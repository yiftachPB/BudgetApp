<?php
namespace Budget\V1\Rest\Expense;

class ExpenseEntity
{
    public $id;
    public $amount;
    
    public function getArrayCopy(){
        return array(
            'id' => $this->id,
            'amount' => $this->amount
        );
    }
    
    public function exchangeArray($array){
        $this->id = $array['id'];
        $this->amount = $array['amount'];
    }
}
