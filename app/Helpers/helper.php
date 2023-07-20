<?php


use Illuminate\Support\Facades\Session;

function flashDanger($message)
{
    Session::flash('alert-danger', $message);
}

function flashSuccess($message)
{
    Session::flash('alert-success', $message);
}

function flashWarning($message)
{
    Session::flash('alert-warning', $message);
}

function flashInfo($message)
{
    Session::flash('alert-info', $message);
}

function convertToStockFormat($inputString)
{
    // Extract the numeric part from the input string
    preg_match('/\d+/', $inputString, $matches);
    $numericPart = isset($matches[0]) ? $matches[0] : '';

    // Extract the alphabetic part from the input string
    preg_match('/[a-zA-Z]+/', $inputString, $matches);
    $alphabeticPart = isset($matches[0]) ? strtoupper(substr($matches[0], 0, 2)) : '';

    // Pad the numeric part with leading zeros to 5 digits
    $paddedNumericPart = str_pad($numericPart, 5, '0', STR_PAD_LEFT);

    // Combine the parts to form the final string
    $result = "($paddedNumericPart.$alphabeticPart)";

    return $result;
}

function extractValueFromStockFormat($stockString)
{
    // Remove the opening and closing brackets from the stock string
    $stockString = trim($stockString, '()');

    // Separate the numeric part and alphabetic part
    $numericPart = '';
    $alphabeticPart = '';
    $isNumericPart = true;

    for ($i = 2; $i < strlen($stockString); $i++) {
        $char = $stockString[$i];
        if (ctype_alpha($char)) {
            $isNumericPart = false;
            $alphabeticPart .= $char;
        } elseif (ctype_digit($char)) {
            if ($isNumericPart && $char === '0') {
                continue; // Skip leading zeros
            }
            $isNumericPart = false;
            $numericPart .= $char;
        }
    }
    $value = strtolower($alphabeticPart . 'G') . str_pad($numericPart, 4, '0', STR_PAD_LEFT);
    return $value;
}

function getNumberFromStock($string)
{
    preg_match('/\d+/', $string, $matches);
    return $matches[0] ?? '';
}

function getReadableDay($day)
{
    switch ($day) {
        case 0:
            return 'Today';
        case 1:
            return 'Tomorrow';
        case null:
            return 'N/A';
        default:
            return $day . ' Days';
    }
}
