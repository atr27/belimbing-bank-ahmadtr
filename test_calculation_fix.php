<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$startDate = Carbon::parse('2023-01-01');
$withdrawDate = Carbon::parse('2023-02-15');

// Logic from controller
$months = (int) $startDate->diffInMonths($withdrawDate);

echo "Start: " . $startDate->toDateTimeString() . "\n";
echo "Withdraw: " . $withdrawDate->toDateTimeString() . "\n";
echo "Months (Integer Cast): " . $months . "\n";

// Verify it is an integer
if (is_int($months) && $months === 1) {
    echo "SUCCESS: Months is an integer and calculated correctly as 1.\n";
} else {
    echo "FAILURE: Months calculation is incorrect.\n";
}
