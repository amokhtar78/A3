<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BmiController extends Controller {

    public function input(Request $request) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        $this->validate($request, [
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'date' => 'required|date'
        ]);
        $weight = $request->input('weight', null);
        $height = $request->input('height', null);
        $date = $request->input('date', null);
        $gender = $request->input('gender');
        $personAge = date('Y') - date('Y', strtotime($date));
        $personBmi = 0;
        if ($height != 0)
            $personBmi = round($weight / ($height * $height));

        return view('bmi.input')->with([
                    'weight' => $weight,
                    'height' => $height,
                    'userAge' => $personAge,
                    'date' => $date,
                    'userBmi' => $personBmi,
                    'gender' => $gender
        ]);
    }

}
