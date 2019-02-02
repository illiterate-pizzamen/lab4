<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use CodeIgniter\Model;

class Employee extends Model {

    protected $data=[
        '1' => ['id' => '1', 'name'=>'Justin Pancho', 'age'=>'18'],
        '2' => ['id' => '2', 'name'=>'Remy Truong', 'age'=>'18'],
        '3' => ['id' => '3', 'name'=>'Aaron Vong', 'age'=>'18'],
        '4' => ['id' => '4', 'name'=>'Big boy', 'age'=>'50']
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