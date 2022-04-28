<?php

namespace App\Http\Controllers;

use App\Models\SpinnerWinner;
use Illuminate\Http\Request;

class SpinnerWinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $title = 'All Noor Gamers';
            $i = 0;
            $total = SpinnerWinner::count();
            $forms = SpinnerWinner::orderBy('id','desc')->get();


            // if (request()->ajax()) {
            //     return datatables()->of(Form::select('*'))
            //         ->addColumn('action', 'action')
            //         ->rawColumns(['action'])
            //         ->addIndexColumn()
            //         ->make(true);
            // }
            // dd($forms);
            return view('newLayout.spinerindex',compact('total','title','forms'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpinnerWinner  $spinnerWinner
     * @return \Illuminate\Http\Response
     */
    public function show(SpinnerWinner $spinnerWinner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpinnerWinner  $spinnerWinner
     * @return \Illuminate\Http\Response
     */
    public function edit(SpinnerWinner $spinnerWinner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpinnerWinner  $spinnerWinner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpinnerWinner $spinnerWinner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpinnerWinner  $spinnerWinner
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpinnerWinner $spinnerWinner)
    {
        //
    }
}
