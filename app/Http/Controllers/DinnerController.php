<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinnerController extends Controller
{
    public function index() {
        return view('admin.dinner');
    }
}
