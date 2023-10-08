<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.index', get_defined_vars());
    }

    public function about()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.about', get_defined_vars());
    }

    public function horses()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.horses', get_defined_vars());
    }

    public function members()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.members', get_defined_vars());
    }

    public function news()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.news', get_defined_vars());
    }

    public function shop()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.shop', get_defined_vars());
    }

    public function merchandise()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.merchandise', get_defined_vars());
    }

    public function termsAndCondition()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.terms-condition', get_defined_vars());
    }

    public function privacy()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.privacy-policy', get_defined_vars());
    }

    public function contact()
    {
        // $profile = Auth::user();
        // dd($profile);
        return view('website.contact', get_defined_vars());
    }
}
