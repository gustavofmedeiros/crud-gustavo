<?php
namespace App\Repositories;

use Illuminate\Http\Request;

interface CozinhaRepositoryInterface
{

    public function listarTodas();

    public function buscarIndividual($id);

    public function gravar(Request $request);

    public function atualizar($id, Request $request);

    public function apagar($id);
}
