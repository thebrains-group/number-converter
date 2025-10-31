<?php

namespace TheBrains\NumberConverter;

class NumberConverter
{
    public function __construct(protected int $number)
    {

    }

    public static function number(int $number)
    {
        return new static ($number);
    }

    public function toRoman(): string
    {
        $array = [1,2,3];
        $wiltek = null;

        $map = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        $result = '';
        foreach ($map as $roman => $value) {
            while ($this->number >= $value) {
                $result .= $roman;
                $this->number -= $value;
            }
        }

        return $result;
    }
}
