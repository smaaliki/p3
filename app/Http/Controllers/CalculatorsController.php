<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorsController extends Controller
{
    public function System_Uptime_Calc()
    {
        return view('calculators.systemUptime');
    }

    public function Sample_Size_Calc()
    {
        return view('calculators.sampleSize');
    }

    public function index($n = null)
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

            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        }
    }
}
