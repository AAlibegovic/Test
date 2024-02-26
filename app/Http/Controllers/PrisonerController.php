<?php

namespace App\Http\Controllers;
use App\Models\Prisoner;
use DB;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prisoners = DB::table('prisoners')
            ->get();

        return view('prisoners.index', ['prisoners' => $prisoners]);
    
    }
    public function create(){

        $codes = DB::table('codes')
            ->get();

        return view('prisoners.add',['codes' => $codes]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        

        $request->validate([
            'fname' => 'required|string|max:255',
        ]);

        DB::table('prisoners')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'number' => $request->number,
            'description' => $request->description,
        
         ]);

        return redirect()->route('prisoners');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'fname' => 'required|string|max:255',
            'gender' => 'required|integer',
        ]);

    
        $update_query = DB::table('prisoners')
        ->where('id', $id)
        ->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'number' => $request->number,
            'description' => $request->description,

            ]);

        return redirect()->route('prisoners');
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        $prisoners = DB::table('prisoners')
        ->where('id', $id)
        ->get();

        $codes = DB::table('codes')
        ->get();
    
        return view('prisoners.edit', ['prisoners' => $prisoners , 'codes' => $codes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function file_add(Request $request)
    {
        $id=$request->id;
        
        $prisoners = Prisoner::find($id);

        return view('prisoners.file_add', ['id' => $id , 'prisoners' => $prisoners]);

    }

    public function process(Request $request)
    {
        $id=$request->id;
        
        $prisoners = Prisoner::find($id);

        $folder_to_save = $prisoners->code;

        $file = $request->file('file');

        $filename = $prisoners->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('prisoners');

    }
    public function destroy(string $id)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        
        Prisoner::destroy($id);

        return redirect()->route('prisoners');

    }
    
}
