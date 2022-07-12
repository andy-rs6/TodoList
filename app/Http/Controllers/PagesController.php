<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Reminder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
