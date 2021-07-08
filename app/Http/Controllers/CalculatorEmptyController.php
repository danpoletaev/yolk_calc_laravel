<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorEmptyController extends Controller
{
    public function index() {
        return view('calculator_without_back');
    }
}
