<?php

namespace Siddiqur\DynamicJoin\Http\Controllers;

use Illuminate\Http\Request;
use Siddiqur\DynamicJoin\Models\Report;
use DB;

class ViewReportListController extends Controller
{
    public function index()
    {
        $reports = DB::table('reports')->get();
        // $reports = Report::all();
        // dd($reports);
        return view('reportList.index', ['reports' => $reports]);
    }

    public function show($id)
    {
        $reports = Report::find($id);
        return view('reportList.show', ['reports' => $reports]);
    }
}
