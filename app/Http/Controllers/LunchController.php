<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LunchController extends Controller
{
    public function index() {
        return view('admin.lunch');
    }
}
