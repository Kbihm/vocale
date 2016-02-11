<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,
    Input,
    Redirect;
use App\Article;
use App\User;
use Session;
use Hash;
class usersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = array('test' => 1);
        $articles = User::all();
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        // validate
     
        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'business_phone' => 'required|numeric',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3'
         
        );
        $validator = Validator::make(Input::all(), $rules);

     
        if ($validator->fails()) {
            return Redirect::to('users/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->phone = Input::get('phone');
            $user->business_phone = Input::get('business_phone');
            $user->status = 0;
            $user->is_active = 0;
            $user->password=Hash::make(Input::get('password'));
            $user->user_type = 'business_owner';
            $user->save();
            // redirect
            Session::flash('message', 'Thanks For Registration.We will contact you soon.');
            return Redirect::to('/users');
        }  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return view('users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
