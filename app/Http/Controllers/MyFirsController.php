<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirsController extends Controller
{
    public function index(): string
    {
        return "MyFirsController";
    }

    public function print() {
        return "asdafawefawefawefawefa";
    }
}
