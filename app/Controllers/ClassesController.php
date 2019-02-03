<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Classes;
use CodeIgniter\API\ResponseTrait;

class ClassesController extends Controller {

    use ResponseTrait;

    public function index() {
        $model = new Classes();
        $class = $model->findAll();
        return $this->respond($class, 200, 'yayeet');
    }

    public function show($id) {
        $model = new Classes();
        $class = $model->find($id);
        return $this->respond($class, 200, 'Class found');
    }

    public function new() {
        return $this->failUnauthorized('Unauthorized/Not implemented', 401, "error");
    }

    public function edit() {
        return $this->failUnauthorized('No edits allowed/Not implemented', 401, "error");
    }

    public function create() {
        return $this->failUnauthorized('No creation allowed/Not implemented', 401, "error");
    }

    public function update() {
        return $this->failUnauthorized('No updates allowed/Not implemented', 401, "error");
    }

    public function delete() {
        return $this->failUnauthorized('No deletes allowed/Not implemented', 401, "error");
    }
}
?>