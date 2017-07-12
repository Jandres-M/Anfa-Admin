<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Club;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::orderBy('name', 'ASC')->paginate(5);

        return view('admin.users.index')->with('users', $users);
    }

    public function RecuperarPassword($id)
    {
       $user = User::find($id);
       $user->$this->load->library('email');
      
       $this->email->from($user->email, $user->name );
       $this->email->to('jandresss94@gmail.com')->subject('Olvido de Password');
      /* $this->email->cc('another@example.com');
       $this->email->bcc('and@another.com');*/
       
      /* $this->email->subject('subject');
       $this->email->message('message');*/
       
       $this->email->send();
       
       // $this->email->print_debugger(); = bcrypt($user->name);
        $user->save();
       return redirect()->route('auth.login');
    }
   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubes = Club::all()->lists('club','idClub');
       // $users = User::all();
        return view('admin.users.create')->with('clubes', $clubes);//->with('clubes', $clubes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
       /* $user->email = '';*/
        $user->password = bcrypt($user->password);
       /*if($user->rol=='Dirigente'){*/
      //  $user->idClub->default('is_null'('')) = $request->idClub;
       /* }else{
        $user->idClub('');
}*/
        $user->save();
         

        Flash::success("Se ha creado satisfactoriamente el usuario ". $user->name);
        return redirect()->route('admin.users');
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
        $user = User::find($id);
        $clubes = Club::all()->lists('club','idClub');
        return view('admin.users.edit',['user'=>$user, 'clubes'=>$clubes]);
    }

     public function estado($id)
    {
        $user = User::find($id);
       
        return view('admin.users.estado',['user'=>$user]);
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
        $user = User::find($id);

        $user->name            = $request->name ;
        $user->email            = $request->email;
        $user->rol              = $request->rol;
        $user->idClub           = $request->idClub;
        $user->save();
        
        Flash::success('El usuario '.$user->name.' ha sido editado exitosamente.');
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario '.$user->name.' ha sido eliminado.');
        return redirect()->route('admin.users');
    }


     public function update_estado(Request $request, $id)
    {
        $user = User::find($id);
        $user->estado  = $request->estado;
        $user->save();
        
        Flash::success('El usuario '.$user->name.' se le ha cambiado el estado exitosamente.');
        return redirect()->route('admin.users');
    }


    public function resetPassword($id)
    {
        $user = User::find($id);
        $user->password = bcrypt($user->name);
        $user->save();

        Flash::success('Se ha reestablecido la contraseña del usuario '.$user->name.' exitosamente.');
        return redirect()->route('admin.users');
    }




}
