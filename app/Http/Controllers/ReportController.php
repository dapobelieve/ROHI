<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = DB::table('reports')->get();
        // dd($reports);
        return view('pages.report')->with('reports', $reports);
    }

    public function getreport(Report $id)
    {
        return view('pages.report-single')->with('post', $id);
    }
}
