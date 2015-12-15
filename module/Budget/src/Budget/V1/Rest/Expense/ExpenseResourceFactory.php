<?php
namespace Budget\V1\Rest\Expense;

class ExpenseResourceFactory
{
    public function __invoke($services)
    {
        return new ExpenseResource();
    }
}
