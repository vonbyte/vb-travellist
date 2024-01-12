<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackingListController extends Controller
{
    public function new(Request $request)
    {
        return view('packinglist.form');
    }
}
