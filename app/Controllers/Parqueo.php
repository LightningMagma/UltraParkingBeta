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

        $post = $this->request->getPost(['vehplaca', 'vehtipo','vehconductor']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'vehplaca' => 'required|max_length[255]|min_length[3]',
            'vehtipo'  => 'required|max_length[5000]|min_length[3]',
            'vehconductor'  => 'required|max_length[5000]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a parking item'])
                . view('parqueo/create')
                . view('templates/footer');
        }

        $model = model(ParqueoModelo::class);

        $model->insert([
            'vehplaca' => $post['vehplaca'],
            'vehtipo'  => $post['vehtipo'],
            'vehconductor' => $post['vehconductor'],
        ]);

        return view('templates/header', ['title' => 'Create a parking item'])
            . view('parqueo/success')
            . view('templates/footer');
    }
    public function update($vehplaca=null){

        $model=model(ParqueoModelo::class);
        $data['parqueo']=$model->getById($vehplaca);

        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
                . view('parqueo/update')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['vehplaca','vehtipo','vehconductor']);
            $model->save([
                'vehplaca' => $post['vehplaca'],
                'vehtipo'  => $post['vehtipo'],
                'vehconductor' => $post['vehconductor'],
            ]);
    
            return view('templates/header', ['title' => 'Parqueo actualizado'])
                . view('parqueo/actualizar')
                . view('templates/footer');
    }

    public function delete($vehplaca=null){
        $model=model(ParqueoModelo::class);
        $data['parqueo']=$model->getById($vehplaca);
        $post = $this->request->getPost(['vehplaca']);
        $model->delete([
            'vehplaca' => $post['vehplaca'],
        ]);

        return view('templates/header', ['title' => 'Parqueo actualizado'])
                . view('parqueo/deleted')
                . view('templates/footer');
    }
}