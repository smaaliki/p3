<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorsController extends Controller
{
    public function System_Uptime_Calc(Request $request)
    {
        dump($request->all());
        return view('calculators.systemUptime');
    }

    public function Sample_Size_Calc(Request $request)
    {
        # Validate the request data
        #@Todo: For some reason the validation causes the claculator page to go back to the calculators homepage.
        #$this->validate($request, [
        #    'numCalls' => 'required|numeric',
        #    'errorMargin' => 'required|numeric|min:0|max:6',
        #]);

        # Get/Set the data
        $numCalls = $request->input('numCalls', null);
        $errorMargin = $request->input('errorMargin', null);
        $confLevel = $request->input('confLevel', 4);

        $sampleSize = '';

        if($numCalls && $confLevel) {
            if ($confLevel == 1) {
                $zScore = 1.28;
            } else if ($confLevel == 2) {
                $zScore = 1.44;
            } else if ($confLevel == 3) {
                $zScore = 1.65;
            } else if ($confLevel == 4) {
                $zScore = 1.96;
            } else if ($confLevel == 5) {
                $zScore = 2.58 * 2.58;
            }

            $sampleSize = 0.25 / ((($errorMargin / 100) / $zScore) * (($errorMargin / 100) / $zScore));
            $sampleSize = round(($sampleSize * $numCalls) / ($sampleSize + $numCalls - 1));
        }
        # Return the view, with the results
        return view('calculators.sampleSize')->with([
            'numCalls' => $numCalls,
            'errorMargin' => $errorMargin,
            'confLevel' => $confLevel,
            'sampleSize' => $sampleSize,
        ]);
    }

    public function index($n = null, Request $request)
    {
        $methods = [];
        # If no specific calculator is specified, show index of all available methods
        if (is_null($n)) {
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'Calc')) {
                $methods[] = $method;
                }
            }

            return view('calculators')->with(['methods' => $methods]);
        } # Otherwise, load the requested method
        else {
            $method = $n;

            return (method_exists($this, $method)) ? $this->$method($request) : abort(404);
        }
    }
}
