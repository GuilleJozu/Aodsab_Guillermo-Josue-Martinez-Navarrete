<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index()
    {
        $staff = model(StaffModel::class);

        $datos = [
            'title'        => 'Staff registrados en el sistema',
            'staffs'   => $staff->getStaff()
        ];

        return view('staff/index', $datos);
    }

    public function create()
    {

        $model = model(StaffModel::class);

        $data = [
            'title' => 'Agregar Staff',
            
        ];

    

        if ($this->request->getMethod()=== 'post' && $this->validate([
            'nombre' => 'required|min_length[3]|max_length[255]',
            'apellidos' => 'required|min_length[3]|max_length[255]',
            'funcion' => 'required|min_length[3]|max_length[50]',
            'descripcionFuncion'  => 'required',
            'fechaIngreso'  => 'required',
            'salario'  => 'required',
            'activo'  => 'required'
        
        ])) {
            $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'slug'  => url_title($this->request->getPost('nombre'), '-', true),
            'apellidos' => $this->request->getPost('apellidos'),
            'funcion' => $this->request->getPost('funcion'),
            'descripcionFuncion'  => $this->request->getPost('descripcionFuncion'),
            'fechaIngreso'  => $this->request->getPost('fechaIngreso'),
            'salario'  => $this->request->getPost('salario'),
            'activo'  => $this->request->getPost('activo')

             ]);

            return redirect()->to('/staff');
        } else {
            return view('/staff/create', $data);
        }
    }

    public function update()
    {
        $model = model(NewsModel::class);

        $id = $this->request->getVar('id');

        if ($this->request->getMethod() === 'put' && $this->validate([
                'nombre' => 'required|min_length[3]|max_length[255]',
                'apellidos' => 'required|min_length[3]|max_length[255]',
                'funcion' => 'required|min_length[3]|max_length[50]',
                'descripcionFuncion'  => 'required',
                'fechaIngreso'  => 'required',
                'salario'  => 'required',
                'activo'  => 'required'
            ])) {

            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'slug'  => url_title($this->request->getPost('nombre'), '-', true),
                'apellidos' => $this->request->getPost('apellido'),
                'funcion' => $this->request->getPost('funcion'),
                'descripcionFuncion'  => $this->request->getPost('descripcionFuncion'),
                'fechaIngreso'  => $this->request->getPost('fechaIngreso'),
                'salario'  => $this->request->getPost('salario'),
                'activo'  => $this->request->getPost('activo')
            ];

            $model->update($id, $data);

            return redirect()->to('/staff');
        } else {
            return view('/staff/edit');
        }
    }
}
