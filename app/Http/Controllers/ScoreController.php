<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Charts\ScoreChart;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ScoreChart $chart)
    {
        return view('score.index', ['chart' => $chart->build()]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'quiz' => 'required|integer',
            'tugas' => 'required|integer',
            'absensi' => 'required|integer',
            'praktik' => 'required|integer',
            'uas' => 'required|integer',
        ]);
        
        $score = new Score();
        $score->name = $validatedData['name'];
        $score->quiz = intval($validatedData['quiz']);
        $score->tugas = intval($validatedData['tugas']);
        $score->absensi = intval($validatedData['absensi']);
        $score->praktik = intval($validatedData['praktik']);
        $score->uas = intval($validatedData['uas']);
        $score->save();
         
        return redirect()->route('score.index')
                        ->with('success','Nilai berhasil di input.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScoreChart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
