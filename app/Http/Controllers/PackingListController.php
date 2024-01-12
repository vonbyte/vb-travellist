<?php

namespace App\Http\Controllers;

use App\Models\PackingList;
use Illuminate\Http\Request;

class PackingListController extends Controller
{
    public function new(Request $request)
    {
        return view('packinglist.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $list = PackingList::create($data);



        $message = ['success' => 'List created'];


        return $this->redirectBackOrJson($message, $list, 201);

    }

    public function list(Request $request)
    {
        $lists = PackingList::all();

        return view('packinglist.table', ['lists' => $lists]);
    }
}
