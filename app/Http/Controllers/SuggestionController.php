<?php

namespace App\Http\Controllers;

use App\Exports\SuggestionExport;
use App\Models\Suggestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sugerencias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sugerencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suggestion = Suggestion::create($request->all());
        return response()->json($suggestion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function show(Suggestion $suggestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(int $suggestion)
    {
        $suggestion = Suggestion::find($suggestion);
        return view('sugerencias.edit', compact('suggestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $suggestion)
    {
        $suggestion = Suggestion::find($suggestion);
        $suggestion->update($request->all());
        return response()->json($suggestion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $suggestion)
    {
        Suggestion::find($suggestion)->delete();
    }

    public function getSuggestions()
    {
        $suggestions = Suggestion::all();
        return DataTables::of($suggestions)->make(true);
    }

    public function pdf()
    {
        $suggestions = Suggestion::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.pdf', compact('suggestions'));
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new SuggestionExport, 'Sugerencias_' . Carbon::now() . '.xlsx');
    }
}
