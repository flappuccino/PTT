<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function  login(Request $request)
    {
       $username= $request->username;
       $password= $request->password;
       $user=User::where('username', $username)->first();
    //    dd($username);
        if($user !=null && $user->username==$username && $user->password==$password){
            return redirect('/tambahproduk');
        }
        else{
            return redirect('/login');
        }
        
    }


    public function  register(Request $request, user $user)
    {
        $data = $request->all();
        $nama= $data['nama'];
        $password= $data['password'];
        $username= $data['username'];
        $no_tlpn= $data['no_tlpn'];
        $email= $data['email'];
        
        $data=[
            'nama' => $nama,
            'password' => $password,
            'username' => $username,
            'no_tlpn' => $no_tlpn,
            'email' => $email,
            'role' => 2
        ];

        // dd($data);

        User::create($data);
        return redirect('/login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
