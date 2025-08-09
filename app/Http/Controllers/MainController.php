<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function nova_pagina():View
    {
        return view('nova_pagina'); 
    }

    public function testes(Request $request)
    {
        //dados do usuario autenticado
        $id = $request->user()->id;
        $name = $request->user()->name; 
        $email = $request->user()->email;

        echo 'id do usuario logado : '.$id.'<br>';
        echo 'nome do usuario logado : '.$name.'<br>';
        echo 'email do usuario logado : '.$email.'<br>';


    }

    public function nova_pagina_publica():View
    {
        return view('nova_pagina_publica');
    }
}
