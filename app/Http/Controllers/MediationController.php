<?php

namespace App\Http\Controllers;

use App\Mediation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediationController extends Controller
{
    public function store() {
        DB::transaction(function () {
            Mediation::create([
                'type' => 'ticket',
                'model' => 'ticket'
            ]);
        });

        return back();
    }
}
