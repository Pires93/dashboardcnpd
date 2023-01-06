<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users',$users);
    }

   /* public function profile(User $profile){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('users.profile',compact('user'));
    }*/

    public function profile($id)
    {
        $users = User::whereId($id);
        return view('users.profile')->with('users', $users);
    }

   /* protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'typeUser' => $data['typeUser'],
            'password' => Hash::make($data['password']),
        ]);
    }*/
     public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->typeUser=$request->typeUser;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('/users');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
       User::destroy($id);
       return redirect('/users');
    }
}
