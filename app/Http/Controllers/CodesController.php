<?php

namespace App\Http\Controllers;
use App\Models\Codes;
use DB;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes = DB::table('codes')
            ->get();

        return view('codes.index', ['codes' => $codes]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){

        return view('codes.add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        DB::table('codes')->insert([
            'cellNumber' => $request->cellNumber,
         ]);

        return redirect()->route('codes');
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
        

        $id = $request->id;

      

    
        $update_query = DB::table('codes')
        ->where('id', $id)
        ->update([
            'cellNumber' => $request->cellNumber,

            ]);

        return redirect()->route('codes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(string $id)
    {
        //
    }
}
