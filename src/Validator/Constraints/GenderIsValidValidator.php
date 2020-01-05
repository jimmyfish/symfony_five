<?php


namespace App\Validator\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class GenderIsValidValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /**
         * 0 : Male
         * 1 : Female
         */
        $validValue = [0, 1];

        if (null === $value || '' === $value) {
            return;
        }

        if (!in_array($value, $validValue)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}