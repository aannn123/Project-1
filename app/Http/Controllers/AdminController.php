<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registrants;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $success = Registrants::where('status', 'Success')->count();
        $failed = Registrants::where('status', 'Failed')->count();
        $all = Registrants::all()->count();
        // var_dump($success);die();

        return view('admin.index')->with([
            'success' => $success,
            'failed' => $failed,
            'all' => $all
        ]);
    }

    public function create()
    {
        
    }
}
