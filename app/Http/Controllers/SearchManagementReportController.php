<?php

namespace App\Http\Controllers;

use App\Models\SearchManagementReport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchManagementReportController extends Controller
{
    
    public function index()
    {
        {
            if ($projectStatus = request('projectStatus')) {
                $data = SearchManagementReport::where('projectStatus', $projectStatus)->get();
         } else {
            $data = SearchManagementReport::all();
        }
            return view('admin.SearchManagementReport.index')->with('info', $data);
        }
    }

    
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
     * @param  \App\Models\SearchManagementReport  $searchManagementReport
     * @return \Illuminate\Http\Response
     */
    public function show(SearchManagementReport $searchManagementReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchManagementReport  $searchManagementReport
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchManagementReport $searchManagementReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchManagementReport  $searchManagementReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchManagementReport $searchManagementReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchManagementReport  $searchManagementReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchManagementReport $searchManagementReport)
    {
        //
    }
}
