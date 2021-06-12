<?php

namespace App\Http\Controllers;

use App\Models\Gereja;
use App\Models\Registrants;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.form.index');
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
        //
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

    public function memenuhiSyarat()
    {
        $gereja = Gereja::where('id')->first();

        $items = Registrants::with(['gereja'])->where()->get();
        var_dump($gereja);die(); 
        return view('pages.form.memenuhiSyarat')->with([
            'items' => $items
        ]);
    }

    public function tidakMemenuhiSyarat()
    {
        return view('pages.form.tidakMemenuhiSyarat');
    }

    public function listMemenuhiSyarat()
    {
        return view('pages.form.listMemenuhiSyarat');
    }

    public function listTidakMemenuhiSyarat()
    {
        return view('pages.form.listTidakMemenuhiSyarat');
    }
}
