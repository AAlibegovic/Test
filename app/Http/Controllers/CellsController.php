<?php

namespace App\Http\Controllers;
use App\Models\Cells;
use DB;
use Illuminate\Http\Request;

class CellsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cells = DB::table('cells')
            ->get();

        return view('cells.index', ['cells' => $cells]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){

        return view('cells.add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        DB::table('cells')->insert([
            'wardNO' => $request->cellNO,
            'floor' => $request->floor,
            

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
        

        $id = $request->id;

      

    
        $update_query = DB::table('cells')
        ->where('id', $id)
        ->update([
            'wardNO' => $request->cellNO,
            'floor' => $request->floor,
            
            ]);

        return redirect()->route('cells');
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
