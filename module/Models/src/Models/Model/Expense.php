<?php
namespace Models\Model;

class Expense {
    private $expenseMapper;
    public $id;
    public $amount;
    
    public function setExpenseMapper($mapper){
        $this->expenseMapper = $mapper;
    }
    
    public function save(){
        $this->expenseMapper->save($this);
    }
    
    public function getArrayCopy(){
        return array(
            'id' => $this->id,
            'amount' => $this->amount
        );
    }
}