<?php
namespace App\Http\Controllers;

use App\Models\SakinlerBilgi;
use Illuminate\Http\Request;

class SakinlerBilgiController extends Controller
{
    public function index()
    {
        $sakinler = SakinlerBilgi::all();
        return view('sakinler.index', compact('sakinler'));
    }

    public function show($id)
    {
        $sakin = SakinlerBilgi::findOrFail($id);
        return view('sakinler.show', compact('sakin'));
    }
}
