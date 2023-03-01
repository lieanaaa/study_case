<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProdukRequest;
use Illuminate\Http\Request;
use App\Models\TbProduk;
Use App\Models\USer;
class Produk_C extends Controller
{ 
    // Login
    public function login()
    {
        return view('login');
    }

    public function progin(Request $request){
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
    }

    // Register 
    public function register()
    {
        return view('register');

    }

    public function regis(Request $request){
        User::create ([
            'name' => $request->name,
            'email'=>$request->name,
            'password'=>bcrypt($request->password),
        ]);

        return view('/login'); 
    }


    // Dashboard
     public function dashboard()
     {
        $data = TbProduk::count();
        return view('dashboard', compact('data'));
     }

     // Produk
     public function produk()
     {  
        $produk = TbProduk::all();
        return view('produk', compact('produk'));
        
     }

     // Tambah
     public function tambah()
     {
         return view('tambah');
     }

     public function store(ProdukRequest $request)
     {   
            $data = $request->validated();
            $produk = new TbProduk;
            $produk->judulProduk = $data['judulProduk'];
            $produk->deskripsiBarang = $data['deskripsiBarang'];
            $produk->harga = $data['harga'];
            
            if($request->hasfile('gambar')){
                $file = $request->file('gambar');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('img/', $filename);
                $produk->gambar = $filename;
            }

            $produk->save();

            return redirect()->route('produk')->with('sukses', 'Berhasil');

    }

    // Edit
    public function edit($id)
    {
        $data = TbProduk::find($id);
         return view('edit', compact('data'));
    }

    public function ProsesEditProduk(Request $request, $id)
    {
        $data = TbProduk::find($id);
        $data->update($request->all());
        return redirect('/produk');
    }

    // Hapus
    public function delete($id)
    {
        $data = TbProduk::find($id);
        $data->delete();
        return redirect('/produk');
        return redirect('/dashboard')->with('successDelete', 'Data Berhasil Dihapus');
    }

   
    
    
}

