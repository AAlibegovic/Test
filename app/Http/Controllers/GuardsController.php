<?php

namespace App\Http\Controllers;
use App\Models\Guards;
use DB;
use Illuminate\Http\Request;

class GuardsController extends Controller
{
    public function index()
    {
        $guards = DB::table('guards')
            ->get();

        return view('guards.index', ['guards' => $guards]);
    
    }
    public function create(){


        return view('guards.add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
        ]);

        DB::table('guards')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'wardNO' => $request->wardNO,
            'shift' => $request->shift,
        
         ]);

        return redirect()->route('guards');
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
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'gender' => 'required|integer',
        ]);

    
        $update_query = DB::table('guards')
        ->where('id', $id)
        ->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'wardNO' => $request->wardNO,
            'shift' => $request->shift,

            ]);

        return redirect()->route('guards');
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        $prisoners = DB::table('guards')
        ->where('id', $id)
        ->get();
    
        return view('guards.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        
        Guards::destroy($id);

        return redirect()->route('guards');

    }
    
}

