<?php

namespace App\Http\Controllers;

use App\Number;
use Illuminate\Http\Request;
use App\Http\Requests;

class NumberController extends Controller
{
    public function index() {

        return view('number.index');
    }

    public function store(Request $request, Number $number) {
        $this->validate($request, [
            'number' => 'required|integer|between:1,100'
        ]);

        $array1 = range(1,100);
        $array2 = $array1;
        unset($array1[$request->number-1]);
        $missingNumber = array_diff($array2,$array1);

        foreach ($missingNumber as $key => $value) {
            $numberValue =  $value;
        }
        $number->number = $numberValue;
        // save number to table, just for fun
        $number->storeNumber();

        return view('number.store', compact('number'));
    }

}
