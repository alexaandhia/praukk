<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Produk;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
    
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            $userName = Auth::user()->name; 
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin')->with('userName', $userName);
            } elseif (Auth::user()->role == 'cashier') {
                return redirect()->route('cashier')->with('userName', $userName);
            }
        } else {
            return redirect()->back()->with('errorLogin', 'Login gagal, silahkan coba lagi');
        }
    }

    //FITUR ADMIN
    public function admin()
    {
        $userName = session('userName');
        return view('admin.admindash', compact('userName'));
    }

    public function admin_product()
    {
        $produk = Produk::get();
        return view('admin.product', compact('produk'));
    }

    public function admin_create_product()
    {
        return view('admin.create-product');
    }

    public function create_product(Request $request)
    {
        $request->validate([
            'nama_produk'=>'required',
            'gambar'=>'required|mimes:jpg,jpeg,png',
            'harga'=>'required',
            'stok'=>'required',
        ]);

        $gambar = $request->file('gambar');
        $img = rand() . '.' . $gambar->extension();
        $path = public_path('assets/produk/');
        $gambar->move($path, $img);

        $produk = Produk::create([
            'nama_produk' => $request['nama_produk'], 
            'gambar' => $img,
            'harga' => $request['harga'],
            'stok' => $request['stok'],
        ]);

        return redirect('/admin-product')->with('success', 'New Product Added');
    }

    public function edit_product($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.edit-product', compact('produk'));
    }

    public function update_product(Request $request, Produk $produk, $id)
    {
        try {
            $produk = Produk::findOrFail($id);
            $gambar = $request->file('gambar');
            $img = rand() . '.' . $gambar->extension();
            $path = public_path('assets/produk/');
            $gambar->move($path, $img);
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'gambar' => $img,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
            return redirect('/admin-product')->with('success', 'Product Edited!');
            } catch (\Exception $error) {
                return redirect()->back()->with('errorEdit', $error->getMessage());
            }
    }

    public function update_stock(Request $request, $id)
{
    try {
        $produk = Produk::findOrFail($id);
        $produk->update([
            'stok' => $request->stok,
        ]);
        return redirect('/admin-product')->with('success', 'Stock Edited!');
    } catch (\Exception $error) {
        return redirect()->back()->with('errorEdit', $error->getMessage());
    }
}


    public function delete_product($id){
        $produk = Produk::where('id', $id)->firstOrFail();
        unlink('assets/produk/' . $produk['gambar']);
        $produk->delete();
        Produk::where('id', $id)->delete();
        return redirect('/admin-product')->with('success','Produk telah di hapus');
    }

    public function admin_transaction()
    {
        return view('admin.transaction');
    }

    public function users()
    {
        $users = User::get();
        return view('admin.users', compact('users'));
    }

    public function add_users()
    {
        return view('admin.add-user');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
    
        $user = User::create([
            'name' => $validatedData['name'],
            'role' => $validatedData['role'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), 
        ]);
    
        Auth::login($user);
    
        return redirect('/admin-users')->with('successRegister', 'New account has been created!');
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id); 
        return view('admin.edit-user', compact('user'));
    }

    public function update_user(Request $request, User $user, $id)
    {
        try {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        return redirect('/admin-users')->with('success', 'Account Edited!');
        } catch (\Exception $error) {
            return redirect()->back()->with('errorEdit', $error->getMessage());
        }
    }

    public function delete_user($id){
        $user = User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect()->back()->with('successDelete', 'delete succeed!'); 
    }

    //FITUR KASIR
    public function cashier()
    {
        return view('cashier.cashierdash');
    }

    public function cashier_products()
    {
        $produk = Produk::get();
        return view('cashier.products', compact('produk'));
    }

    public function cashier_add_transaction()
    {
        $produk = Produk::get();
        return view('cashier.add', compact('produk'));
    }

    public function cashier_transaction()
    {
        $produk = Produk::get();
        return view('cashier.transaction', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('successLogout', 'Logout Succeed');
    }
}
