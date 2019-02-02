<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controllers;
use CodeIgniter\Controller;
use Employee;
use CodeIgniter\API\ResponseTrait;

class EmployeeController extends Controller {

    use ResponseTrait;

    public function index() {
        $model = new Employee();
        $employees = $model->findAll();
        return $this->respond($employees, 200, 'yeet');
    }

    public function show($id) {
        $model = new Employee;
        $employee = $model->find($id);
        return $this->respond($employee, 200, 'employee found');
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
