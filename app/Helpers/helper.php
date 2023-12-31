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
        case null:
            return 'N/A';
        case 0:
            return 'Today';
        case 1:
            return 'Tomorrow';
        default:
            return $day . ' Days';
    }
}

function calculatePercentageChange($valueD3, $valueD2)
{
    if ($valueD3 == 0) {
        return "--";
    } else {
        return ($valueD3 - $valueD2) / $valueD2;
    }
}

function calculatePattern($valueB3, $valueD2, $valueD3)
{
    if ($valueB3 == 0) {
        return "----";
    } else {
        if ($valueB3 >= $valueD2 && $valueD3 >= $valueB3) {
            return "UU";
        } elseif ($valueB3 >= $valueD2 && $valueD3 < $valueB3) {
            return "UF";
        } elseif ($valueB3 < $valueD2 && $valueD3 >= $valueB3) {
            return "FU";
        } else {
            return "FF";
        }
    }
}

function calculateResultDiff($valueE7, $valueE8)
{
    if (($valueE7 < 0 && $valueE8 < 0) || ($valueE7 > 0 && $valueE8 > 0)) {
        return "Same";
    } else {
        return "Different";
    }
}

function calculatePattern2($valueB4, $valueB3, $valueD3, $valueD4)
{
    if ($valueB4 == 0) {
        return "----";
    } else {
        if ($valueB4 >= $valueD3 && $valueD4 >= $valueB4) {
            return "UU";
        } elseif ($valueB4 >= $valueD3 && $valueD4 < $valueB4) {
            return "UF";
        } elseif ($valueD4 < $valueB3 && $valueB4 >= $valueD4) {
            return "FU";
        } else {
            return "FF";
        }
    }
}

function calculateResultPattern($valueE7, $valueE8)
{
    if ($valueE8 > $valueE7) {
        return "U";
    } else {
        return "F";
    }
}

function compareDates($date1, $date2)
{
    return \Carbon\Carbon::parse($date1)->toDateString() == \Carbon\Carbon::parse($date2)->toDateString();
}

function getNumberRemarks($number)
{
    $remarks = \App\Models\NumberRemarks::where('stockno', convertToStockFormat($number))->where('user_id', auth()->id())->first();
    if ($remarks) {
        return $remarks->remarks;
    } else {
        return '';
    }

}

function can_access(string $permission_name): bool
{
    $admin = [
        'dashboard',
        'daily_checklist',
        'notes',
        'recent_ra',
        'mark_favourite',
        'number_list',
        'number_details',
        'ra_pattern',
        'remarks_of_number',
        'transaction_record',
        'ra_dates',
        'ra_data_review',
        'ra_data_update',
        'transactions',
        'users',
        'top_bar_icons',
        'languages',
        'calculator',
    ];
    $member = [
        'dashboard',
        'daily_checklist',
        'notes',
        'recent_ra',
        'mark_favourite',
        'number_list',
        'number_details',
        'ra_pattern',
        'remarks_of_number',
        'transaction_record',
        'ra_dates',
        'ra_data_review',
        'top_bar_icons',
        'languages',
        'calculator',
    ];
    $registered = [
        'dashboard',
        'recent_ra',
        'number_details',
        'ra_pattern',
        'ra_dates',
        'data_review',
        'top_bar_icons',
        'languages',
    ];

    $user = auth()->user();
    if ($user->isAdmin()) {
        return in_array($permission_name, $admin);
    } elseif ($user->isMember()) {
        return in_array($permission_name, $member);
    } elseif ($user->isUser()) {
        return in_array($permission_name, $registered);
    } else {
        return false;
    }

}


