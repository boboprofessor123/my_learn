<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mylearn;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JSON_learninfo = mylearn::get();
        return $JSON_learninfo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $mylearn = new mylearn();
        $mylearn->tag = $request->tag;
        $mylearn->title = $request->title;
        $mylearn->content = $request->content;
        $mylearn->save();
        return response()->json($mylearn);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mylearn::where('id', $id)->delete();
    }
}
