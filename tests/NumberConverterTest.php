<?php

use TheBrains\NumberConverter\NumberConverter;

it('convertit correctement en chiffres romains', function () {
    expect(NumberConverter::number(1)->toRoman())->toBe('I');
    expect(NumberConverter::number(4)->toRoman())->toBe('IV');
    expect(NumberConverter::number(9)->toRoman())->toBe('IX');
    expect(NumberConverter::number(44)->toRoman())->toBe('XLIV');
    expect(NumberConverter::number(1999)->toRoman())->toBe('MCMXCIX');
    expect(NumberConverter::number(2025)->toRoman())->toBe('MMXXV');
});
