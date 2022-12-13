<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;
class RegisterController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'first_name'=>"required|max:200|min:1",
            'last_name'=>"required|max:200|min:1",
            'username'=>"required|max:200|min:1",
            'sponsor_username'=>"required|max:200|min:1",
            'position'=>"required|max:200|min:1",
            'gender'=>"required|max:200|min:1",
            'email'=>"required|max:200|min:1",
            'phone'=>"required|max:200|min:1",
            'password'=>"required|max:200|min:1",
        ]);
        if($validator->passes()){
            $user=new User;
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->username=$request->username;
            $user->sponsor_username=$request->sponsor_username;
            $user->position=$request->position;
            $user->gender=$request->gender;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->password=Hash::make($request->password);
            $user->save();
            if ($user) {
                return response()->json(['message'=>'Category Added Success']);
            }
        }
        return response()->json(['error'=>$validator->getMessageBag()]);
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
