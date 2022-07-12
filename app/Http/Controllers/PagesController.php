<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel !';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function reports(){
        $data = array(
            'title' => 'Reports',
            'reports' => ['Web Design', 'Programing']
        );
        return view('pages.reports')->with($data);
    }
}
