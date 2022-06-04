<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use App\Models\CategoriaModel;
use App\Models\StaffModel;
use App\Models\PeriodistaModel;
use Dompdf\Dompdf;

class NewsController extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);
        $categoriaModel = model(CategoriaModel::class);
        $periodistaModel = model(PeriodistaModel::class);
        $staffModel = model(StaffModel::class);

        $data = [
            'title' => 'Noticias',
            'categoria' => $categoriaModel->where('id', 'categoria')->find(),
            'news'  => $model->getNews()
        ];

        echo view('news/index', $data);
    }

    public function cards()
    {
        $model = model(NewsModel::class);

        $data = [
            'title' => 'Noticias en versión CARD',
            'news'  => $model->getNews()
        ];

        return view('news/cards', $data);
    }

    // Aquí comienza la función create()
    public function create() 
    {
        $model = model(NewsModel::class);
        $categoriaModel = model(CategoriaModel::class);
        $periodistaModel = model(PeriodistaModel::class);
        $staffModel = model(StaffModel::class);

        


        if ($this->request->getMethod() === 'post' && $this->validate([
            'categoria'     => 'required',
            'periodista'    => 'required',
            'staff'         => 'required',
            'title'         => 'required|min_length[3]|max_length[255]',
            'body'          => 'required'
        ])) {
            

            $data = [
                'categoria' => $this->request->getPost('categoria'),
                'periodista' => $this->request->getPost('periodista'),
                'staff' => $this->request->getPost('staff'),
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body')
            ];

            $model->insert($data);

            return redirect()->to('/news');
        } else {
            $model = model(NewsModel::class);
            $categoriaModel = model(CategoriaModel::class);
            $periodistaModel = model(PeriodistaModel::class);
            $staffModel = model(StaffModel::class);

            $data = [
                'title' => 'Agregar Noticias',
                'categorias' => $categoriaModel->findAll(),
                'staffs'    =>  $staffModel->findAll(),
                'periodistas'    => $periodistaModel->findAll()
            ];
            return view('/news/create', $data);
        }
    }
    // Aquí finaliza la función create()



    public function update()
    {
        $model = model(NewsModel::class);

        $id = $this->request->getVar('id');

        if ($this->request->getMethod() === 'put' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required'
            ])) {

            $data = [
                'title' => $this->request->getVar('title'),
                'slug'  => url_title($this->request->getVar('title'), '-', true),
                'body'  => $this->request->getVar('body')
            ];

            $model->update($id, $data);

            return redirect()->to('/news');
        } else {
            return view('/news/edit');
        }
    }
    
    
    public function pdf()
    {
        //
    }


    public function otroPDF()
    {
        $dompdf = new Dompdf();
        $html = view('news/index');
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
    
}

