<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$start = Carbon::parse('2023-01-01');
$end = Carbon::parse('2023-02-15');

echo "Start: " . $start->toDateTimeString() . "\n";
echo "End: " . $end->toDateTimeString() . "\n";
echo "DiffInMonths: " . $start->diffInMonths($end) . "\n";
echo "FloatDiffInMonths: " . $start->floatDiffInMonths($end) . "\n";
