<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $hairCut   = Antrian::where('paket', 'cut')->where('is_call', false)->count();
        $goodLook   = Antrian::where('paket', 'look')->where('is_call', false)->count();
        $goodMood    = Antrian::where('paket', 'mood')->where('is_call', false)->count();
        $hairEnjoy  = Antrian::where('paket', 'enjoy')->where('is_call', false)->count();

        return view('dashboard.index', [
            'hairCut'      => $hairCut,
            'goodLook'      => $goodLook,
            'goodMood'       => $goodMood,
            'hairEnjoy'    => $hairEnjoy,
        ]);
    }
}
