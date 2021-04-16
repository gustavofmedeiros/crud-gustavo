<?php
namespace App\Services;

use Illuminate\Support\Facades\Validator;
use App\Repositories\CozinhaRepositoryInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CozinhaService
{

    private $cozinhaRepository;

    public function __construct(CozinhaRepositoryInterface $cozinhaRepository)
    {
        $this->cozinhaRepository = $cozinhaRepository;
    }

    public function listarTodas()
    {
        $cozinhas = $this->cozinhaRepository->listarTodas();
        return response()->json($cozinhas, Response::HTTP_OK);
    }

    public function buscarIndividual($id)
    {
        $cozinha = $this->cozinhaRepository->buscarIndividual($id);
        return response()->json($cozinha, Response::HTTP_OK);
    }

    public function gravar(Request $request)
    {
        $cozinha = $this->cozinhaRepository->gravar($request);
        return response()->json("Cozinha criada com sucesso!", Response::HTTP_CREATED);
    }

    public function atualizar($id, Request $request)
    {
        $cozinha = $this->cozinhaRepository->atualizar($id, $request);
        return response()->json($cozinha, Response::HTTP_OK);
    }

    public function apagar($id)
    {
        $this->cozinhaRepository->apagar($id);
        return response()->json(null, Response::HTTP_OK);
    }
}
