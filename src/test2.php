<?php
    function findNumberWithSingleOccurrence($array) {
        // Initialize an empty associative array to store the counts of each number
        $counts = [];
        // Iterate over each number in the array
        foreach ($array as $number) {
            if (isset($counts[$number])) {
                $counts[$number]++;
            } else {
                $counts[$number] = 1;
            }
        }
        // Iterate over the counts array and return the number that occurs exactly one time
        foreach ($counts as $number => $count) {
            if ($count === 1) {
                return $number;
            }
        }
        return null;
    }

    // Usage example
    $array = [4, 8, 9, 5, 8, 9, 4, 1, 9, 5];
    $numberWithSingleOccurrence = findNumberWithSingleOccurrence($array);

    // Output the result
    if ($numberWithSingleOccurrence !== null) {
        echo "The number that repeats exactly one time is: " . $numberWithSingleOccurrence . "\n";
    } else {
        echo "There is no number that repeats exactly one time in the array." . "\n";
    }
