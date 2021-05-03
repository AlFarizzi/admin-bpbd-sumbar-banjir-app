<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage() {
        return view("pages.auth.login");
    }

    public function login(Request $request) {
        if(Auth::guard("admin")->attempt(["username" => $request->username, "password" => $request->password])) {
            return redirect()->route("indexInformasi");
        } else {
            return redirect()->back();
        }
    }
}
