<?php

namespace App\Http\Controllers;

use App\Models\HizmetKategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        $parent_categories = HizmetKategori::whereNull('parent_id')->get();



        return view('layout', compact('parent_categories'));
    }
}
