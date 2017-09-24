<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return Job::with(['company','skills'])->get();
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
         //
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Skill  $skill
      * @return \Illuminate\Http\Response
      */
     public function show(Skill $skill)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Skill  $skill
      * @return \Illuminate\Http\Response
      */
     public function edit(Skill $skill)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Skill  $skill
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Skill $skill)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Skill  $skill
      * @return \Illuminate\Http\Response
      */
     public function destroy(Skill $skill)
     {
         //
     }
}
