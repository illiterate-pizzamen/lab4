<?php
/**
 * Created by PhpStorm.
 * User: remtr
 * Date: 29-Jan-19
 * Time: 11:53 AM
 */
namespace App\Controllers;
use CodeIgniter\Controller;
use Student;
use CodeIgniter\API\ResponseTrait;

class StudentController extends Controller {

    use ResponseTrait;

    public function index() {
        $model = new Student();
        $students = $model->findAll();
        return $this->respond($students, 200, 'yeet');
    }

    public function show($id) {
        $model = new Student;
        $student = $model->find($id);
        return $this->respond($student, 200, 'student found');
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