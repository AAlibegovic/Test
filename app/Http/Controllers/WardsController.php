<?php

namespace App\Http\Controllers;
use App\Models\Wards;
use DB;
use Illuminate\Http\Request;

class WardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wards = DB::table('wards')
        ->get();

        return view('wards.index', ['wards' => $wards]);
    }
    public function create(){

        return view('wards.add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('wards')->insert([
            'cellNO' => $request->cellNO,
            
            

         ]);

        return redirect()->route('cells');
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
