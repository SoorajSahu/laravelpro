<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $req)
    {
        $user = new User();
        $user->firstname = $req->firstname;
        $user->middlename = $req->middlename;
        $user->lastname = $req->lastname;
        $user->dob = $req->dob;
        $user->gender = $req->gender;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('dashboard');
    }
    public function register(Request $req)
    {
        $user = new User();
        $user->firstname = $req->firstname;
        $user->middlename = $req->middlename;
        $user->lastname = $req->lastname;
        $user->dob = $req->dob;
        $user->gender = $req->gender;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);
       try {
            if ($user->save())
            return json_encode(["message" => "Data storeded"]);
       } catch (\Throwable $th) {
        return json_encode(["message" => "Email Already Exist"]);
       }
       
        
           
    }
    public function logout(Request $request)
    {
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');

    }


    public function showusers()
    {
        $users = DB::table('users')->get();
        // dd($users[0]->dob);
        $table = '';
        foreach ($users as  $data) {
            $table .= '
            <tr>
                <td >' . $data->id . '</td>
                <td >' . $data->firstname . '</td>
                <td >' . $data->lastname . '</td>
                <td >' . $data->email . '</td>
          </tr>
            ';
        }
        // dd($table);
        return $table;
    }

    public function signin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:4'
        ]);
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {

            return redirect()->intended('dashboard');
        } else {


            return back()->withInput($request->only('email', 'remember'));
        }

        return back()->withInput($request->only('email', 'remember'));
    }
};
