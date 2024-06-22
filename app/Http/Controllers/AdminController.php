<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvRequest;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Mail\ConfirmMail;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function log_form(){
        return view('admin.login');
    }

    public function login(Request $request){

        $admin = Admin::where('email', $request->email)->first();
        if ($admin && $request->pass == $admin->password) {
            // Auth::login($admin);
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.log_form')->with('faild',"Email or Password is wrong");
        }

    }

    public function reject($id){
        $provider=Provider::findOrFail($id);
        $path = $provider->picture;
        $provider->delete();
        File::delete($path);

        return redirect()->route('admin.addproviders')->with('success',"This provider rejected successfully...");
    }


    public function confirm(){
//        $provider = Provider::findOrFail($id)->first();
           Mail::to('ahmedebra053@gmail.com')->send(new ConfirmMail());
        return redirect()->route('admin.addproviders')->with('success', "This provider confiremed successfully...");
    }

}
