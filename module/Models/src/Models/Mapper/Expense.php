<?php
namespace Models\Mapper;

class Expense {
    public function save($expense){
        $expense->id = rand(1, 99);
        return true;
    }
}