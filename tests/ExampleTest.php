<?php

use Lodeb\WeightConversions\WeightConversions;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can convert kilograms to stones', function () {
    $pounds = WeightConversions::kilograms(100)->toStones();

    expect($pounds)->toEqual(15.747);
});
