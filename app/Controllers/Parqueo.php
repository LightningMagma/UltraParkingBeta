<?php

namespace App\Controllers;

use App\Models\ParqueoModelo;
use CodeIgniter\Exceptions\PageNotFoundException;

class Parqueo extends BaseController
{
    protected $table = 'parqueo';
    public function index()
    
    {
        $model = model(ParqueoModelo::class);

        $data = [
            'parqueo'  => $model->getParqueo(),
            'title' => 'Registro de vehiculos',
        ];

        return view('templates/header', $data)
            . view('parqueo/index')
            . view('templates/footer');
    }
    public function view($vehplaca = null)
    {
        $model = model(ParqueoModelo::class);

        $data['parqueo'] = $model->getParqueo($vehplaca);

        if (empty($data['parqueo'])) {
            throw new PageNotFoundException('Cannot find the parking item: ' . $vehplaca);
        }

        $data['vehplaca'] = $data['parqueo']['vehplaca'];

        return view('templates/header', $data)
            . view('parqueo/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a parking item'])
                . view('parqueo/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['vehplaca', 'vehtipo']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'vehplaca' => 'required|max_length[255]|min_length[3]',
            'vehtipo'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a parking item'])
                . view('parqueo/create')
                . view('templates/footer');
        }

        $model = model(ParqueoModelo::class);

        $model->save([
            'vehplaca' => $post['vehplaca'],
            'vehplaca'  => url_title($post['vehplaca'], '-', true),
            'vehcarro'  => $post['vehcarro'],
        ]);

        return view('templates/header', ['title' => 'Create a parking item'])
            . view('parqueo/success')
            . view('templates/footer');
    }
    public function update($id=null){

        $model=model(NewModels::class);
        $data['news']=$model->getById($id);

        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
                . view('news/update')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['id','title', 'body']);
            $model->save([
                'id' => $post['id'],
                'title' => $post['title'],
                'slug'  => url_title($post['title'], '-', true),
                'body'  => $post['body'],
            ]);
    
            return view('templates/header', ['title' => 'Noticia actualizada'])
                . view('news/actualizar')
                . view('templates/footer');
    }

    public function delete($id=null){
        $model=model(NewModels::class);
        $data['news']=$model->getById($id);
        $post = $this->request->getPost(['id']);
        $model->delete([
            'id' => $post['id'],
        ]);

        return view('templates/header', ['title' => 'Noticia actualizada'])
                . view('news/deleted')
                . view('templates/footer');
    }
}