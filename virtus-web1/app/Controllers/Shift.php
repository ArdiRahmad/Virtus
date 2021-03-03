<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Shift extends BaseController
{
    public function index()
    {
        return view('Shift/Shift');
    }
}
