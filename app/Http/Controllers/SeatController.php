<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seat;
use App\Models\Gereja;

use Illuminate\Pagination\Paginator;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function kursi()
    {
        $items = Gereja::all();

        return view('pages.seat.indexSeat')->with([
            'items' => $items
        ]);
    }

    public function setKursi($id)
    {
        $gereja = Gereja::where('id', $id)->first();
        $items = Seat::where('churc_id', $gereja->id)->paginate(10);
        // var_dump($items);die();

        return view('pages.seat.setKursi')->with([
            'items' => $items,
            'gereja' => $gereja
        ]);
    }

    public function active($id)
    {
        // $gereja = Gereja::where('id', $id)->first();
        // $item = Seat::where('churc_id', $gereja->id)->get();

        $item = Seat::findOrFail($id);
        $item['status'] = 'Active';
        $item->save();
        return redirect()->route('setKursi', $item->id);
    }

    public function tidak($id)
    {
        $item = Seat::findOrFail($id);
        $item['status'] = 'Tidak';
        $item->save();
        return redirect()->route('setKursi', $item->id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
