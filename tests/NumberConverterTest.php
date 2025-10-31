<?php

use TheBrains\NumberConverter\NumberConverter;

it('converts numbers to roman', function () {
    expect(NumberConverter::number(1)->toRoman())->toBe('I');
    expect(NumberConverter::number(4)->toRoman())->toBe('IV');
    expect(NumberConverter::number(9)->toRoman())->toBe('IX');
    expect(NumberConverter::number(44)->toRoman())->toBe('XLIV');
    expect(NumberConverter::number(1999)->toRoman())->toBe('MCMXCIX');
    expect(NumberConverter::number(2025)->toRoman())->toBe('MMXXV');
});


it('converts numbers to words', function () {
    expect(NumberConverter::number(0)->toWords())->toBe('zéro');
    expect(NumberConverter::number(1)->toWords())->toBe('un');
    expect(NumberConverter::number(42)->toWords())->toBe('quarante-deux');
    expect(NumberConverter::number(100)->toWords())->toBe('cent');
    expect(NumberConverter::number(1234)->toWords())->toBe('mille deux cent trente-quatre');
});
