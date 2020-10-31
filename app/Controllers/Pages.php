<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WhyTrip',
            'navActive' => 'home',
        ];
        // return view('layout/template');
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'navActive' => 'about',
        ];
        return view('pages/about', $data);
    }

    //--------------------------------------------------------------------

}
