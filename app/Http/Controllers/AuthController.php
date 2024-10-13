<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
   
    public function checkDirectory(Request $request)
    {
        $request->validate([
            'directory' => 'required|string',
        ]);

        $directoryPath = $request->input('directory');

        if (is_dir('../'.$directoryPath)) {
            return Redirect::to('../'.$directoryPath.'/public');
        }

        return back()->withErrors(['directory' => 'La información ingresada no es válida.']);
    }
}
