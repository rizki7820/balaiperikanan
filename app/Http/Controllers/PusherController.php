<?php

namespace App\Http\Controllers;

use App\Models\PetugasModel;
use Illuminate\Http\Request;
use App\Events\PusherBroadcast;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PusherController extends Controller
{
    public function index()
    {
        $petugas = PetugasModel::get();
        return view('dashboard.livechat.index', compact('petugas'));
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        $content = $request->get('message');
        DataChat::create([
            'content' => $content
        ]);

        return view('broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return view('receive', ['message' => $request->get('message')]);
    }
}