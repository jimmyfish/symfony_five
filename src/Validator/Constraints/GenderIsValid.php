<?php


namespace App\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

class GenderIsValid extends Constraint
{
    public $message = '"{{ string }}" has illegal value';
    public $fields = [];

    public function validatedBy()
    {
        return \get_class($this).'Validator';
    }
}