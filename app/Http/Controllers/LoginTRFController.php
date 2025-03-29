<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoginTRFController extends Controller
{
    protected string $cookieFile;

    public function __construct()
    {
        $this->cookieFile = storage_path('app/cookies_trf6.txt');
    }

    public function loginForm()
    {
        return view('trf6.login');
    }

    public function autenticar(Request $request)
    {
        $usuario = $request->input('usuario');
        $senha = $request->input('senha');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://eproc1g.trf6.jus.br/eproc/controlador.php?acao=login_efetuar");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'txtUsuario' => $usuario,
            'pwdSenha' => $senha
        ]));
        curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookieFile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Redireciona para segunda etapa (inserção do código)
        return view('trf6.codigo');
    }

    public function validarCodigo(Request $request)
    {
        $codigo = $request->input('codigo_validacao');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://eproc1g.trf6.jus.br/eproc/controlador.php?acao=validar_codigo_2fa");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'codigo' => $codigo
        ]));
        curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookieFile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        // Aqui poderia validar se autenticou com sucesso
        return redirect()->route('processos.form')->with('resultado', 'Sessão autenticada com sucesso!');
    }

    public function logout()
    {
        // Realiza logout no TRF6 e remove o cookie
        $ch = curl_init("https://eproc1g.trf6.jus.br/eproc/controlador.php?acao=logout");
        curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookieFile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);

        Storage::delete("cookies_trf6.txt");

        return redirect()->route('login.trf6')->with('resultado', 'Logout efetuado.');
    }
}
