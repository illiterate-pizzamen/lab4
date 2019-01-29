<?php
/**
 * Created by PhpStorm.
 * User: remtr
 * Date: 29-Jan-19
 * Time: 11:27 AM
 */
use CodeIgniter\Model;

class Student extends Model {

    protected $data=[
        '1' => ['id' => '1', 'name'=>'Willis Jackson', 'age'=>'19'],
        '2' => ['id' => '2', 'name'=>'Leo Lamoriello', 'age'=>'32'],
        '3' => ['id' => '3', 'name'=>'Suzie Kwan', 'age'=>'23'],
        '4' => ['id' => '4', 'name'=>'Chantelle Davidson', 'age'=>'21']
    ];

    // Returns a record of the student with a passed in ID
    public function find($id = null)
    {
        return $this->data[$id];
    }

    // Returns a record of all the students
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}