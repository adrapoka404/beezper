<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function __invoke()
    {
        return "aPI";
    }
    public function dashboard(){
        return "API";
    }
}
