<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlFormController extends Controller
{
    //
    function getData(Request $req)
    {

        $req->validate([
            'username' => 'required | max:10',
            'password' => 'required | min:3',

        ]);
        return $req->input();
        // echo "form submitted";
    }
}
