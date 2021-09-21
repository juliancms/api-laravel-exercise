<?php

namespace App\Http\Controllers;

use App\Events\UserSendRequestNumber;
use App\Models\Bigbang;
use Illuminate\Http\Request;
use App\Http\Requests\BigbangRequest;
use App\Http\Resources\BigbangResource;
use App\Numbers\NumberConversor;

class BigbangController extends Controller
{
    /**
     * Outputs the string representation of numbers from 1 to n.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(BigbangRequest $request)
    {
        $conversor = new NumberConversor;
        $number = $request->input('n');
 
        $numbers = [];

        foreach (range(1, $number) as $n) {

            if($conversor->isMultipleOfThreeFiveSeven($n)) {
                $numbers[] = $conversor->isMultipleOfThreeFiveSeven($n);
            } else if ($conversor->isMultipleOfFiveSeven($n)) {
                $numbers[] = $conversor->isMultipleOfFiveSeven($n);
            } else if ($conversor->isMultipleOfThreeSeven($n)) {
                $numbers[] = $conversor->isMultipleOfThreeSeven($n);
            } else if ($conversor->isMultipleOfThreeFive($n)) {
                $numbers[] = $conversor->isMultipleOfThreeFive($n);
            } else {
                $numbers[] = $conversor->isMultipleOf($n);
            }
        }

        event(new UserSendRequestNumber($number));

        return new BigbangResource($numbers);
    }
}
