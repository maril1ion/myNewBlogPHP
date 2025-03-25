<?php

namespace core\Validator;

class Validate implements ValidateInterface
{
    private array $errors = [];

    private array $data = [];

    public function validate(array $data, array $rules)
    {
        // [$key => [min:3,max:10,]]
        $this->errors = [];
        $this->data = $data;
        // Перебераем массив правил
        foreach ($rules as $key => $rule) {
            $rules = $rule;
            foreach ($rules as $rule) {
                // Разбиваем по explode на : правила
                $rule = explode(':', $rule);
                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;
                $errors = $this->validateRules($key, $ruleName, $ruleValue);
                if ($errors) {
                    $this->errors[$key][] = $errors;
                }
            }
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    private function validateRules(string $key, string $ruleName, ?string $ruleValue = null)
    {
        $value = $this->data[$key];
        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return 'Ошибка, поле является обязательным для заполнения! ';
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    return "Ошибка, имя | {$value} | должно быть больше {$ruleValue}";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    return "Ошибка, имя | {$value} | должно быть меньше {$ruleValue}";
                }
                break;
        }

        return false;
    }
}
