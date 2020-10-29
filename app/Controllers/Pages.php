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

    public function login()
    {
        $data = [
            'title' => 'Login',
            'navActive' => 'login',
        ];
        return view('pages/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
            'navActive' => 'register',
        ];
        return view('pages/register', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'navActive' => 'about',
        ];
        return view('pages/about', $data);
    }

    public function popular()
    {
        $data = [
            'title' => 'Popular',
            'navActive' => 'popular',
        ];
        return view('pages/popular', $data);
    }

    //--------------------------------------------------------------------

}
