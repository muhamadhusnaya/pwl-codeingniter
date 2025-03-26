<?php

namespace App\Controllers;

use function PHPUnit\Framework\returnValueMap;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }

    public function front()
    {
        return view('front');
    }

    public function hello($name = null): string
    {
        $data['name'] = $name;
        $data['title'] = "Front Page";
        return view('front', $data);
    }
}