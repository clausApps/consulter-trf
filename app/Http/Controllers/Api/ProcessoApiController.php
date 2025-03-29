<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Processo;
use App\Models\Andamento;

class ProcessoApiController extends Controller
{
    public function index(Request $request)
    {
        return Processo::where('user_id', $request->user()->id)->get();
    }

    public function show($id, Request $request)
    {
        $proc = Processo::where('_id', $id)
            ->where('user_id', $request->user()->id)
            ->firstOrFail();

        return $proc;
    }

    public function addAndamento($id, Request $request)
    {
        $request->validate([
            'descricao' => 'required|string'
        ]);

        $proc = Processo::where('_id', $id)
            ->where('user_id', $request->user()->id)
            ->firstOrFail();

        $proc->andamentos[] = [
            'descricao' => $request->descricao,
            'user_id' => $request->user()->id,
            'data' => now()
        ];
        $proc->save();

        return response()->json(['status' => 'ok', 'msg' => 'Andamento adicionado']);
    }

    public function compartilhar($id, Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // lógica simplificada - apenas registro
        return response()->json(['status' => 'ok', 'msg' => 'Processo compartilhado com ' . $request->email]);
    }
}
