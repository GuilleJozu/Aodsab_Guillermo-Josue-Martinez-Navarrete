<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoriaController extends BaseController
{
    public function index()
    {
        $categoria = model(CategoriaModel::class);

        $datos = [
            'title'        => 'Categorias registradas en el sistema',
            'categorias'   => $categoria->getCategoria()
        ];

        return view('categoria/index', $datos);
    }

    public function create()
    {

        $model = model(CategoriaModel::class);

        $data = [
            'title' => 'Agregar Categoria',
            
        ];

    

        if ($this->request->getMethod()=== 'post' && $this->validate([
            'nombre' => 'required|min_length[3]|max_length[255]',
            'descripcion'  => 'required'
        
        ])) {
            $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'slug'  => url_title($this->request->getPost('nombre'), '-', true),
            'descripcion'  => $this->request->getPost('descripcion')

             ]);

            return redirect()->to('/categoria');
        } else {
            return view('/categoria/create', $data);
        }
    }

    public function edit()
    {
        $model = model(NewsModel::class);

        $id = $this->request->getVar('id');

        if ($this->request->getMethod() === 'put' && $this->validate([
                'nombre' => 'required|min_length[3]|max_length[255]',
                'descripcion'  => 'required'
            ])) {

            $data = [
                'nombre' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body')
            ];

            $model->update($id, $data);

            return redirect()->to('/categoria');
        } else {
            return view('/categoria/edit');
        }
    }
}
