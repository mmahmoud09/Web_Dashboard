<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ViewOptionsController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function addproviders()
    {
        $providers = Provider::all();
        return view('admin.addproviders',compact('providers'));
    }

    public function services()
    {
        return view('admin.Services');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function providers()
    {
        return view('admin.providers');
    }

    public function addservices()
    {
        return view('admin.AddService');
    }
    public function requests()
    {
        return view('admin.requests');
    }
}
