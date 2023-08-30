<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Login;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.index');
    }
    
    public function simpan_data(Request $request) {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_obat' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);
    
        $admin = new Admin();
        $admin->nama_obat = $request->input('nama_obat');
        $admin->keterangan = $request->input('keterangan');
        
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
           
            $admin->image = $filename;
        }
    
        $admin->save();

        return view ('admin.index');
    }
    
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
{
    $admin = Admin::find($id);
    if (!$admin) {
        return redirect()->route('admin.index')->with('error', 'Admin not found');
    }

    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'nama_obat' => 'required|string|max:255',
        'keterangan' => 'required|string',
    ]);

    $admin->nama_obat = $request->input('nama_obat');
    $admin->keterangan = $request->input('keterangan');

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('public/images'), $filename);
        $admin->image = $filename;
    }

    $admin->save();

    return redirect()->route('admin.data', ['id' => $admin->id])->with('success', 'Admin updated successfully');
}




    public function data(){
        $nama_obat = Admin::all();
        return view('admin.data', ['nama_obat' => $nama_obat]);
    }
    
    public function delete($id)
    {
      
        $admin = Admin::findOrFail($id);
        
        $admin->delete();
        
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
