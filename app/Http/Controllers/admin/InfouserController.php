<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfouserController extends Controller
{
    public function index(){
        return view('admin.info-users.index');
    }
}
