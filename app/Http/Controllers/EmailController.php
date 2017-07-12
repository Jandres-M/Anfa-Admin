<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use App\Http\Controllers\Auth;

use App\User;
//use Auth;
use Mail;
use Storage;
use Laracasts\Flash\Flash;


//use Validator;

/*use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;*/
/*use Swift_Mailer;
use Swift_Message;
use \Illuminate\Mail\Message*/


class EmailController extends Controller
{

 public function Crear()
 {

 return view('admin.notificaciones.mailbox2');

    }
 



 /*protected function createMessage()
    {
        $message = new Message(new Swift_Message);

        // If a global from address has been specified we will set it on every message
        // instances so the developer does not have to repeat themselves every time
        // they create a new message. We will just go ahead and push the address.
        if (! empty($this->from['email'])) {  //address
            $message->from($this->from['email'], $this->from['name']);
        }

        return $message;
    }*/


    public function Enviar(Request $request)
    {
     
//$user= User::find($id);
 $pathToFile="";
    $containfile=false; 
   $rem= $rem('rem') ;
    $name= $name('name');
    if($request->hasFile('file') ){
       $containfile=true; 
       $file = $request->file('file');
       $nombre=$file->getClientOriginalName();  
       $pathToFile= storage_path('app') ."/". $nombre;
    }

  

    $destinatario=$request->input('destinatario');
    $asunto=$request->input('asunto');
    $contenido=$request->input('contenido_mail');
   
   
    $data = array('contenido' => $contenido);
 $r= Mail::send('admin/notificaciones/index', $data, function ($message) use ($asunto,$destinatario,  $containfile,$pathToFile,$rem,$name) {
       // $message->from('plusispruebas@gmail.com', 'plusis');
        $message->from($rem,$name);
        $message->to($destinatario)->subject($asunto);
       if($containfile){
        $message->attach($pathToFile);
        }

    });
        
    if($r){   
             if($containfile){ Storage::disk('local')->delete($nombre); }  
              Flash::success('Correo Enviado correctamente');      
            return redirect()->route('admin.notificaciones');  
    }else
    {   
          Flash::error('hubo un error vuelva a intentarlo'); 

          return redirect()->route('admin.notificaciones');                        
    }



}

public function store(Request $request)
    {
        if($request->hasFile('file') ){ 
         
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $nombre=$file->getClientOriginalName();
        $r= Storage::disk('local')->put($nombre,  \File::get($file));
       

         } 
         else{

            return "no";
         } 

        if($r){
            return $nombre ;
        }
        else
        {
            return "error vuelva a intentarlo";
        }
      
         
    }
















}

    