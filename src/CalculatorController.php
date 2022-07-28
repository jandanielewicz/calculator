<?php

namespace Jandanielewicz\Calculator;


use App\Http\Controllers\Controller;


class CalculatorController extends Controller
{

    public function add(float $a, float $b)  {

        try {
            return response()->json([ 'status' => 'OK', 'result' => $a + $b ]);
        } catch(\Exception $e) {
            throw $e;
        }

    }

    public function substract(float $a, float $b) {
        return response()->json([ 'status' => 'OK', 'result' => $a - $b ]);
    }

    public function multiply(float $a, float $b)  {

        try {
            return response()->json([ 'status' => 'OK', 'result' => $a * $b ]);
        } catch(\ErrorException $e) {
            throw $e;
        }
    }

    public function divide(float $a, float $b) {
        try {
            return response()->json([ 'status' => 'OK', 'result' => $a / $b ]);
        } catch(\DivisionByZeroError $e){
            throw $e;
        } catch(\ErrorException $e) {
            throw $e;
        } catch(\Exception $e) {
            throw $e;
        }
    }
}
