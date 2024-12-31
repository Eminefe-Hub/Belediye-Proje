<?php
namespace App\Http\Controllers;

use App\Models\HizmetBilgi;
use App\Models\HizmetKategori;
use Illuminate\Http\Request;

class HizmetBilgiController extends Controller
{
    public function show(Request $request)
    {
        // Ana kategoriler
        $parent_categories = HizmetKategori::whereNull('parent_id')->get();

        // Alt kategoriler (Bu kategori seçildiğinde filtrelenecek)
        $sub_categories = HizmetKategori::where('parent_id', $request->id)->get();
        $category_ids = $sub_categories->pluck('id');

        // Hizmet bilgilerini al
        $bilgiler = HizmetBilgi::whereIn('hizmet_kategori_id', $category_ids)->get();

        return view('hizmet-bilgi', compact('parent_categories', 'sub_categories', 'bilgiler'));
    }
}


