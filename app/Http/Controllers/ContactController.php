<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\User;
use Illuminate\Support\Facades\DB;
use Auth;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'tel' => '',
            'city' => ''
        ]);
        $id = Auth::user()->id;
        DB::table('users')
            ->where('id', $id)
            ->update(['email' => $request->email,'name' => $request->username,'tel' => $request->tel,'city' => $request->city]);

        return redirect()->route('contact')->with('success', 'Данные успешно сохранены!');
    }
}
