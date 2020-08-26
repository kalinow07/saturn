<?php

namespace Kalinow\Saturn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaturnPackageController extends Controller
{
    public function index(){
        return view("kalinow.saturn.views.saturn");
    }
}
