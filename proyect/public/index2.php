<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $groupMembers = [
            ['name' => 'Darlin Mariela Ramos Gutierrez', 'Carnet' => 'SMSS172422'],
            ['name' => 'Katherine Verenice Fuentes Rivera', 'Carnet' => 'SMSS077422'],
            ['name' => 'Marcela Nohemy Hernández Villatoro', 'Carnet' => 'SMSS072922'],
            ['name' => 'Marcos Isaí Brioso Benavides', 'Carnet' => 'SMSS137422'],
            ['name' => 'Anderson José Berrios Diaz', 'Carnet' => 'SMSS100222'],
        ];
        
        return view('about', compact('groupMembers'));
    }
}