<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(Request $request, $parametro="")
    {
        $rq = $request->all();
        $data = array('usuario' => 'Hola Mundo', 'parametro' => $parametro, 'rq' => $rq);
        return view('welcome', $data);
    }
}