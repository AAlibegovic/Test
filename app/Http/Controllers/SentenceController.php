<?php

namespace App\Http\Controllers;
use App\Models\Sentence;
use Illuminate\Http\Request;
use DB;
class SentenceController extends Controller
{
    public function index()
    {
        $allSentences = DB::table('prisoners')
        ->select('*', DB::raw('count(*) as brojac'))
        ->groupBy('prisoners.fname')
        ->join('sentences', 'prisoners.id', '=', 'sentences.id')
        ->get();

    // 	Ispisati najčešće korištene blokove
         $mostCommonWards = DB::table('wards')
        ->select('wards.*', DB::raw('count(*) as brojac'))
        ->groupBy('wards.id')
        ->join('cells',  'wards.id', '=', 'cells.wardNO')
        ->join('codes', 'cells.id', '=', 'codes.cellNumber')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

    // Ispisati broj započetih kazni u periodu od 1.12.2021 do 31.12.2023

    
    $from = '2023-01-01 00:00:00';
    $to = '2023-12-31 23:59:59';

    $numberOfSentences = DB::select("
    SELECT COUNT(*) as count
    FROM sentences
    WHERE startDate BETWEEN ? AND ?
    ", [$from, $to]);

    // Extracting count from the result and converting it to a string
    $countAsString = strval($numberOfSentences[0]->count);

    //    Ispisati imena i prezimena zaštiatara koji su radili u prvoj smjeni za započete kazne periodu od 01.01.2023 do 31.12.2023.
    $from = '2023-01-01 00:00:00';
    $to = '2023-12-31 23:59:59';
              
     $firstShifts = DB::table('guards') 
    ->select('guards.fname as f_name', 'guards.lname as l_lname')
    ->join('wards', 'guards.wardNO', '=', 'wards.id') 
    ->join('cells', 'wards.id', '=', 'cells.wardNO') 
    ->join('sentences', 'cells.id', '=', 'sentences.cellNO') 
    ->where('guards.shift', '1')
    ->whereBetween('sentences.startDate', [$from, $to])
    ->get();

    return view('sentences.index', 
        [
        'allSentences' =>$allSentences,
        'mostCommonWards' =>$mostCommonWards, 
        'numberOfSentences' =>$countAsString,
        'firstShifts' =>$firstShifts 
        ]);
}
    public function create(){

        return view('sentences.add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('sentences')->insert([
            'prisonerNO' => $request->prisonerNO,
            'cellNO' => $request->cellNO,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'description' => $request->description,
            
            
            

         ]);

        return redirect()->route('sentences');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


