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

    public function memenuhiSyarat(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $gereja = $request->query('gereja');

        if ($from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('church_id', $gereja)->where('status', 'Success')->get();
        } else {
            $items = Registrants::all();
            // var_dump($items);die();
        }
        return view('pages.form.memenuhiSyarat')->with([
            'items' => $items
        ]);
    }

    public function storeMemenuhiSyarat(Request $request)
    {
        $from = $request->post('from');
        $to = $request->post('to');

        $fromm = Registrants::whereBeetween('created_at', [$from, $to])->get();

        return redirect()->route('gereja.index');

        // whereBetween('created_at',array($from,$to))
        // whereBetween('created_at',[$from,$to])
        // $from = $request->post('from-date');
        // $to = $request->post('to-date');
    }

    public function tidakMemenuhiSyarat(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $gereja = $request->query('gereja');

        if ($from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('church_id', $gereja)->where('status', 'Tidak')->get();
        } else {
            $items = Registrants::all();
            // var_dump($items);die();
        }
        return view('pages.form.tidakMemenuhiSyarat')->with([
            'items' => $items
        ]);

        // return view('pages.form.tidakMemenuhiSyarat');
    }

    public function listMemenuhiSyarat()
    {
        return view('pages.form.listMemenuhiSyarat');
    }

    public function listTidakMemenuhiSyarat()
    {
        return view('pages.form.listTidakMemenuhiSyarat');
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

    function exportCsv(Request $request)
    {
        $fileName = 'memenuhi_syarat.csv';
        $tasks = Registrants::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Title', 'Assign', 'Description', 'Start Date', 'Due Date');

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['Title']  = $task->title;
                $row['Assign']    = $task->assign->name;
                $row['Description']    = $task->description;
                $row['Start Date']  = $task->start_at;
                $row['Due Date']  = $task->end_at;

                fputcsv($file, array($row['Title'], $row['Assign'], $row['Description'], $row['Start Date'], $row['Due Date']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
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
}
