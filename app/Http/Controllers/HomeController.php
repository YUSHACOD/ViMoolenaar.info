<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home");
    }

    public function books() {
        return view("books");
    }

    public function contact() {
        return view("contact");
    }

    public function history() {
        return view("history");
    }

    public function about() {
        return view("about");
    }
}
