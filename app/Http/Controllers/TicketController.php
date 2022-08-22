<?php

namespace App\Http\Controllers;

use App\Mediation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function store()
    {
        DB::transaction(function() {
            request()->merge([
                'emails' => [
                    'teste1@teste.com', 'teste2@teste.com'
                ]
            ]);

            Mediation::create([
                'type' => 'ticket',
                'model' => 'ticket',
            ]);
        });

        return back();
    }
}
