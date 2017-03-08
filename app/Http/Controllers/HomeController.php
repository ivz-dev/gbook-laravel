<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Гостевая книга на Laravel",
            "pageTitle" => "Гостевая книга"
        ];
        return view("pages.messages.index", $data);
    }

    public function edit($id)
    {
        $data = [
            "title" => "Гостевая книга на Laravel",
            "pageTitle" => "Гостевая книга"
        ];

        return view('pages.messages.edit', $data);
    }
}
