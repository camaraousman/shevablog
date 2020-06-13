<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Photo;
use App\Roles;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Display all users .
     *
     * @return \Illuminate\Http\Response
     */

    public function user()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Roles::pluck('name', 'id');

        return view('admin.users.create', compact('role'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)

    {

        $user = new User();
        $photo = new Photo();

        $input = $request->all();
        $password = $request->input('password');
        $input['password'] = bcrypt($password);

        if($image = $request->file('image')){


            $name = time() . '_' . $request->input('name') . '_' . $image->getClientOriginalName();
            $image->move('img/profile_pics', $name);

            $photo = Photo::create(['url'=>$name]);

            $input['photo_id'] = $photo->id;
        }


        User::create($input);
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
