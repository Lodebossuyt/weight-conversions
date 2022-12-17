<?php

it('can convert kilograms to pounds correctly', function () {
    $pounds = Weight::kilogrmas(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
