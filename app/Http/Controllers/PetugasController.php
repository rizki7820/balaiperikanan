<?php

namespace App\Http\Controllers;

use App\Models\PetugasModel;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
   public function index()
    {
        $petugas = PetugasModel::get();
        return view('dashboard.petugas.index', compact('petugas'));
    }
}
