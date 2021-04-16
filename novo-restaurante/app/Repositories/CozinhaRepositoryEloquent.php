<?php
namespace App\Repositories;

use App\Repositories\CozinhaRepositoryInterface;
use App\Models\Cozinha;
use Illuminate\Http\Request;

class CozinhaRepositoryEloquent implements CozinhaRepositoryInterface
{

    private $model;

    public function __construct(Cozinha $cozinha)
    {
        $this->model = $cozinha;
    }

    public function listarTodas()
    {
        return $this->model->all();
    }

    public function buscarIndividual($id)
    {
        return $this->model->find($id);
    }

    public function gravar(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function atualizar($id, Request $request)
    {
        return $this->model->find($id)->update($request->all());
    }

    public function apagar($id)
    {
        return $this->model->find($id)->delete();
    }
}
