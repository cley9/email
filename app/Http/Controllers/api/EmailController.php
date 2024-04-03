<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email(Request $request){
        return response()->json(["status"=>200, "data"=>$request],200);
    }
    function contactoAgrupec(Request $request)
    {
        $remitenteName = $request->name;
        $remitenteMail = $request->email;
        $remitenteAsunto = $request->asunto;
        $remitenteMensaje = $request->message;
        Mail::to('cleyutp@gmail.com')->send(new ContactoMail($remitenteName, $remitenteMail, $remitenteAsunto, $remitenteMensaje));
        return response()->json(["status"=>200, "message"=>"Correo enviado con éxito"],200);
    }
}
