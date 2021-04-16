<?php
namespace App\Http\Controllers;

use App\Services\CozinhaService;
use Illuminate\Http\Request;

class CozinhaController extends Controller
{

    private $cozinhaService;

    public function __construct(CozinhaService $cozinhaService)
    {
        $this->cozinhaService = $cozinhaService;
    }

    public function listarTodas()
    {
        return $this->cozinhaService->listarTodas();
    }

    public function buscarIndividual($id)
    {
        return $this->cozinhaService->buscarIndividual($id);
    }

    public function gravar(Request $request)
    {
        return $this->cozinhaService->gravar($request);
    }

    public function atualizar($id, Request $request)
    {
        return $this->cozinhaService->atualizar($id, $request);
    }

    public function apagar($id)
    {
        return $this->cozinhaService->apagar($id);
    }
}
