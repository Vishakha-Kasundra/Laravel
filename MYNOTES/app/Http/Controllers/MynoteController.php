<?php

namespace App\Http\Controllers;

use App\Models\mynote;
use App\Models\User;
use Illuminate\Http\Request;

class MynoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::withwherehas('note',function($abc){
            $abc->where("user_id","=",auth()->id());
        })->get();
        return view('dashboard', compact('data'));
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = mynote::create($request->all() + ['user_id' => auth()->id()]);
        if($user){
            return redirect()->route('mynote.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(mynote $mynote)
    {
        return view('notes.show', compact('mynote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mynote $mynote)
    {
        return view('notes.edit', compact('mynote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mynote $mynote)
    {
        $mynote->update( $request->all() + ['user_id' => auth()->id()]);
        return redirect()->route('mynote.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mynote $mynote)
    {
        $mynote->delete();
        return redirect()->route('mynote.index');
    }
}
