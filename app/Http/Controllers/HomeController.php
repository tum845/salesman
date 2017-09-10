<?php

namespace App\Http\Controllers;

use Khill\Lavacharts\Lavacharts;

class HomeController extends AppBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lava = new Lavacharts(); // See note below for Laravel

        $temperatures = $lava->DataTable();

        $temperatures->addDateColumn('Date')
            ->addNumberColumn('Max Temp')
            ->addNumberColumn('Mean Temp')
            ->addNumberColumn('Min Temp')
            ->addRow(['2014-10-1',  67, 65, 62])
            ->addRow(['2014-10-2',  68, 65, 61])
            ->addRow(['2014-10-3',  68, 62, 55])
            ->addRow(['2014-10-4',  72, 62, 52])
            ->addRow(['2014-10-5',  61, 54, 47])
            ->addRow(['2014-10-6',  70, 58, 45])
            ->addRow(['2014-10-7',  74, 70, 65])
            ->addRow(['2014-10-8',  75, 69, 62])
            ->addRow(['2014-10-9',  69, 63, 56])
            ->addRow(['2014-10-10', 64, 58, 52])
            ->addRow(['2014-10-11', 59, 55, 50])
            ->addRow(['2014-10-12', 65, 56, 46])
            ->addRow(['2014-10-13', 66, 56, 46])
            ->addRow(['2014-10-14', 75, 70, 64])
            ->addRow(['2014-10-15', 76, 72, 68])
            ->addRow(['2014-10-16', 71, 66, 60])
            ->addRow(['2014-10-17', 72, 66, 60])
            ->addRow(['2014-10-18', 63, 62, 62]);

        $lava->LineChart('Temps', $temperatures, [
            'title' => 'Data on October 2014'
        ]);



        $reasons = $lava->DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(['Check Reviews', 5])
            ->addRow(['Watch Trailers', 2])
            ->addRow(['See Actors Other Work', 4])
            ->addRow(['Settle Argument', 89]);

        $lava->PieChart('IMDB', $reasons, [
            'title'  => 'Reasons I visit IMDB',
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],
                ['offset' => 0.3]
            ]
        ]);

        return view('home')->with(['lava'=>$lava]);
    }
}
