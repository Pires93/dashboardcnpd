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
       // return view('users.create');
    }


    public function store(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->typeUser=$request->typeUser;
        $user->estado=$request->estado;
        $user->password=Hash::make($request->password);
        if($request->foto) { 
            $nameBd=now().'.'.$request->foto->extension(); 
          $capaname = $request->foto->storeAs('users',$nameBd); 
          $user->foto=$nameBd;
        } 
        $user->save();

        return redirect('/users');
    }


    public function show($id)
    {
        $user = User::find($id); 
        return view('users.profile')->with('user',$user);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $update=$request->all();
        $user->updated_at=date('Y-m-d H:i:s'); 
        $user->name=$request->name;
        $user->email=$request->email;
        $user->estado=$request->estado;
        $user->typeUser=$request->typeUser; 
        if($request->foto) { 
            $nameBd=now().'.'.$request->foto->extension(); 
          $capaname = $request->foto->storeAs('users',$nameBd); 
          $user->foto=$nameBd;
        }   
        $user->save();
        return back()->with('message','User editado com sucesso!');
    }

     
    public function destroy($id)
    {
        User::destroy($id);  
        return redirect('/users')->with('message','User removido com sucesso!');
    }

    public function desativar($id)
    {
        $user = User::find($id);
        $user->estado="Inativo";
        $user->save();
        return back()->with('message','User desativado com sucesso!');
    } 
    public function ativar($id)
    {
        $user = User::find($id);
        $user->estado="Ativo";
        $user->save();
        return back()->with('message','User ativado com sucesso!');
    } 
}
