<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Calculator</title>
    <link rel="stylesheet" href="{{asset('assets/calculator/css/style.css')}}"/>
</head>
<body>
<div class="calculator-wrapper" id="calculator">
    <div class="calculator-body">
        <div style="font-size: xx-large; font-family: Arial, Helvetica, sans-serif; text-align: center;">Calculator
        </div>
        <div class="control-group" style="justify-content: center;">
            <input type="text" class="label_entry" value="Reference"/>
            <input type="text" class="percent_entry" value="1.0%"/>
            <span class="number_output"></span>
        </div>
        <div class="control-group" style="justify-content: center;">
            <input type="text" class="label_entry" value="Auto"/>
            <input type="text" class="percent_entry" value="1.4%"/>
            <span class="number_output"></span>
        </div>
        <hr style="margin-top: 20px;"/>
        <div class="control-group" style="justify-content: center;">
            <input type="text" class="label_entry" value="Zone"/>
            <input type="text" class="percent_entry" value="1.9%"/>
            <span class="number_output"></span>
        </div>
        <div class="control-group" style="justify-content: center;">
            <div class="label_entry D">
                <button class="btn_default">Default</button>
            </div>
            <input type="text" class="percent_entry D" value="2.3%" disabled/>
            <span class="number_output D"></span>
        </div>
        <div class="control-group" style="justify-content: center;">
            <input type="text" class="label_entry" value="Limited"/>
            <input type="text" class="percent_entry" value="2.9%"/>
            <span class="number_output"></span>
        </div>
    </div>
    <hr style="margin-top: 20px;"/>
    <p style="margin-top: 15px; font-family: Arial, Helvetica, sans-serif; text-align: center;">Current</p>
    <div class="calculator-header" style="justify-content: center;">
        <button class="btn_reset">Reset</button>
        <input type="number" class="number_entry" value=""/>
        <button class="btn_cal">Calculate</button>
    </div>
    <div class="calculator-footer" style="justify-content: center;">
        <button class="btn_minus">-</button>
        <button class="btn_plus">+</button>
    </div>
    <div style="margin-top: 15px; font-family: Arial, Helvetica, sans-serif; text-align: center;">Copyright
        &copy; {{\Carbon\Carbon::now()->year}} WAYSAPP Company Limited. <br/>All Rights Reserved.
    </div>
</div>
<script src="{{asset('assets/calculator/js/script.js')}}"></script>
</body>
</html>
