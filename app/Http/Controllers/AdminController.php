<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   // Displays the admin index page.
    public function index() {
        return view('admin.index');
    }
}
