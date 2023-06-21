<?php
    function withdrawAmount($amount, $bankNotes) {
        // Initialize an empty array to store the count of each bank note
        $noteCounts = [];
        foreach ($bankNotes as $note) {
            // calculate the number of bank notes required and update the amount
            if ($amount >= $note) {
                $count = intdiv($amount, $note);
                $noteCounts[$note] = $count;
                $amount -= $count * $note;
            }
        }
        echo "The minimum number of bank notes required:\n";
        foreach ($noteCounts as $note => $count) {
            echo "$" . $note . ": " . $count . "\n";
        }
    }

    // Usage example
    $requestedAmount = 2018;
    $bankNotes = [50, 10, 5, 1];
    withdrawAmount($requestedAmount, $bankNotes);
