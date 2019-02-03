<?php
/*
Aaron
*/
use CodeIgniter\Model;

class Classes extends Model {

    protected $data=[
        '1' => ['id' => '1', 'name'=>'Class 1', 'day'=>'MON'],
        '2' => ['id' => '2', 'name'=>'Class 2', 'day'=>'TUES'],
        '3' => ['id' => '3', 'name'=>'Class 3', 'day'=>'WED'],
        '4' => ['id' => '4', 'name'=>'Class 4', 'day'=>'THURS'],
        '5' => ['id' => '5', 'name'=>'Class 5', 'day'=>'FRI'],
        '6' => ['id' => '6', 'name'=>'Class 6', 'day'=>'SAT'],
        '7' => ['id' => '7', 'name'=>'Class 7', 'day'=>'SUN']
    ];

    public function find($id = null)
    {
        return $this->data[$id];
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}