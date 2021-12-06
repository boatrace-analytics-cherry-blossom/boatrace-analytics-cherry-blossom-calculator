# Boatrace Analytics Cherry Blossom Calculator

[![Build Status](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/workflows/tests/badge.svg)](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/v/stable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/v/unstable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator)
[![License](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator/license)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator)

## Installation
```
$ composer require boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-calculator
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Cherry\Blossom\Calculator;

var_dump(Calculator::calculateMedian([5, 1, 3])); // 中央値 3.0
var_dump(Calculator::calculateMedian([5, 1, 3, 2])); // 中央値 2.5

var_dump(Calculator::calculateAverage([5, 1, 3])); // 平均値 3.0
var_dump(Calculator::calculateAverage([5, 1, 3, 2])); // 平均値 2.75

var_dump(Calculator::calculateVariance([5, 2, 6, 1, 3, 4, 7])); // 分散 4.0
var_dump(Calculator::calculateVariance([5, 2, 6, 1, 3, 4, 7, 1, 4])); // 分散 4.0

var_dump(Calculator::calculateStandardDeviation([5, 2, 6, 1, 3, 4, 7])); // 標準偏差 2.0
var_dump(Calculator::calculateStandardDeviation([5, 2, 6, 1, 3, 4, 7, 1, 4])); // 標準偏差 2.0

var_dump(Calculator::calculateReciprocal(4)); // 逆数 0.25
var_dump(Calculator::calculateReciprocal(8)); // 逆数 0.125

var_dump(Calculator::calculateSyntheticOdds([12.0, 24.0])); // 合成オッズ 8.0
var_dump(Calculator::calculateSyntheticOdds([12.0, 24.0, 24.0])); // 合成オッズ 6.0
```

## License
The Boatrace Analytics Cherry Blossom Calculator is open source software licensed under the [MIT license](LICENSE).
