<?php

namespace App\Http\Controllers;

use App\Nombres;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NombresController extends Controller
{
    public function index()
    {
            $nombres=\App\Nombres::all();
            return view('nombres/lista', compact('nombres'));
    }

    public function create()
    {
        return view('nombres/crear');
    }

    public function store()
    {
        $this->validate(request(),[
            'nombre' => ['required', 'max:20']
        ]);

        $data= request()->all();
        Nombres::create($data);

        return redirect()->to('nombres');
    }

    public function show($nombre)
    {
        dd($nombre);
    }


}
