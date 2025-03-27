<?php

namespace App\Controllers;

use function PHPUnit\Framework\returnValueMap;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function hello($name = null)
    {
        $data['name'] = $name;
        $data['title'] = "Front Page";
        return view('front', $data);
    }
}