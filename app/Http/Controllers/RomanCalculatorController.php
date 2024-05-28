<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RomanCalculatorController extends Controller
{
    private const ROMAN_NUMBERS = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];
    private const ROMAN_VALUES = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];

    public function index()
    {
        return view('roman_calculator.index');
    }

    public function calculateNumber(Request $request)
    {
        $request->validate([
            'decimal' => 'integer|max:1000|min:1',
        ]);

        $decimal = $request->integer('decimal');

        $romanNumber = null;

        foreach (self::ROMAN_VALUES as $i => $value) {
            while ($decimal >= $value) {
                $romanNumber .= self::ROMAN_NUMBERS[$i];
                $decimal -= $value;
            }
        }

        return view('roman_calculator.index', compact('romanNumber'));
    }
}
