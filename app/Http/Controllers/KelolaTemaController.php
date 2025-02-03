<?php

namespace App\Http\Controllers;

use App\Models\KelolaTema;
use Illuminate\Http\Request;

class KelolaTemaController extends Controller
{
    public function index()
    {
        $kelolaTema = KelolaTema::first(); 
        return view('kelola-tema.index', compact('kelolaTema'));
    }

        public function updateBackground(Request $request)
    {
        $request->validate([
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = $request->file('background_image')->getClientOriginalName();
        $request->file('background_image')->move(public_path('assets/img'), $fileName);

        KelolaTema::updateOrCreate(
            ['id' => 1],
            ['background_image' => 'assets/img/' . $fileName]
        );

        return redirect()->route('kelola-tema.index')->with('success', 'Gambar background berhasil diperbarui.');
    }



    public function updateLogo(Request $request)
    {
        $request->validate([
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $fileName = $request->file('logo_image')->getClientOriginalName();
        
        $request->file('logo_image')->move(public_path('assets/img'), $fileName);
    
        KelolaTema::updateOrCreate(
            ['id' => 1],
            ['logo_image' => 'assets/img/' . $fileName]
        );
    
        return redirect()->route('kelola-tema.index')->with('success', 'Logo berhasil diperbarui.');
    }
    
    

    public function updateMenu(Request $request)
    {
        $request->validate([
            'menu_navigation' => 'required|json',
        ]);

        KelolaTema::updateOrCreate(
            ['id' => 1],
            ['menu_navigation' => $request->menu_navigation]
        );

        return redirect()->route('kelola-tema.index')->with('success', 'Menu navigasi berhasil diperbarui.');
    }
}
