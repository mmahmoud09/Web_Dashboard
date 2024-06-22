<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvRequest;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function show(){
        return view('provider_form');
    }

    public function store(ProvRequest $request){



        $provider = new Provider();
        $provider->name= $request->fname;
        $provider->email = $request->email;
        $provider->service = $request->job;
        $provider->location = $request->address;
        $provider->phone_number = $request->phone;
        $provider->password= $request->password;
        if ($request->hasFile('pic')) {
            $image = $request->file('pic');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('providers_images'), $imageName);
            $provider->picture = 'providers_images\\' . $imageName;
        }

        $provider->save();

        return redirect('providers')->with('status', "تـم تسجيل بياناتك بنجاح...");
    }
}
