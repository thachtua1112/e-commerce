<?php
    function findTopTwoLargestNumbers($array) {
        $largest = $array[0];
        $secondLargest = $array[0];
        // Loop through the array
        foreach ($array as $number) {
            if ($number > $largest) {
                // If the number is greater than the current largest, update both variables
                $secondLargest = $largest;
                $largest = $number;
            } elseif ($number > $secondLargest && $number < $largest) {
                // If the number is greater than the second largest but smaller than the largest, update the second largest only
                $secondLargest = $number;
            }
        }

        // Return an array containing the top two largest numbers
        return [$largest, $secondLargest];
    }

    // Usage example
    $array = [0, 6, 100, 46, 47];
    $topTwoLargest = findTopTwoLargestNumbers($array);

    // Output the result
    echo "The top two largest numbers are: " . $topTwoLargest[0] . " and " . $topTwoLargest[1] . "\n";
