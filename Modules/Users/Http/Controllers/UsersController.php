<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Session;
// use Model\User;
use Modules\Users\Entities\User;
use Modules\Role\Entities\Role;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    use ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        if(get_role(Auth::user()->id_user_group) != 'FALSE'){
            return view('users::index')->with('users', User::getUsers())->with('roles', Role::all());
            // dd(User::with('role'));
            // return view('users::index')->with('users', User::with('role')->paginate(3))->with('roles', Role::all());
        }else{
            return redirect('forbidden');
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('users::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users',
            'username' => 'required|string|unique:users',
            'password' => 'required|min:5',
            'hp'    => 'required|max:15',
            'id_user_group' => 'required|integer'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username'   => $request->username,
            'password'   => Hash::make($request->password),
            'hp'  => $request->hp,
            'id_user_group'  => $request->id_user_group
        ]);



        Session::flash('success', 'Post Created Succefully');
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        $user = User::findOrFail($id);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->hp = $request->hp;
        $user->id_user_group = $request->id_user_group;
        $user->save();




        Session::flash('success', 'User berhasil di update!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'User berhasil di hapus');
        return redirect()->back();

    }
}
