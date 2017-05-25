<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 25-5-2017
 * Time: 05:50
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMyAccount()
    {
        return view('account.form');
    }

    public function postMyAccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('password') != null) {
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();

        return redirect('/b3');
    }

}