<?php

namespace core\Validator;

interface ValidateInterface
{
    public function validate(array $data, array $rules);

    public function errors();
}
