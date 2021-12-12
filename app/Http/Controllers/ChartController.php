<?php

namespace App\Http\Controllers;

use App\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    function index()
    {
        //GroupBy by Price
        // $chartdata = Chart::select('Price', DB::raw('count(*) as total'))->groupBy('Price')->pluck('total', 'Price')->all();
      
        //GroupBy by Name
        $chartdata = Chart::select('Name', DB::raw('count(*) as total'))->groupBy('Name')->pluck('total', 'Name')->all();


        // dd($chartdata);
        // Generate random colours for the groups
        for ($i = 0; $i <= count($chartdata); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        // Prepare the data for returning with the view
        $chart = new Chart;
        $chart->labels = (array_keys($chartdata));
        $chart->dataset = (array_values($chartdata));
        $chart->colours = $colours;
        return view('charts.index', compact('chart'));
    }
}
