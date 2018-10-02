<?php

namespace App\Http\Controllers;

use App\Pbm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PbmsController extends Controller
{
    public function index()
    {
        $boots = DB::table('pbms')->where('type','boots')->get();
        $jassen = DB::table('pbms')->where('type','jassen')->get();
        $broeken = DB::table('pbms')->where('type','broeken')->get();
        $handschoenen = DB::table('pbms')->where('type','handschoenen')->get();
        return view('pbm.index')->with(array('boots'=>$boots, 'jassen'=>$jassen, 'broeken'=>$broeken, 'handschoenen'=>$handschoenen));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $data = DB::table('pbms')->where('id','18')->get();
        $data = \App\pbm::find(18);

        //return view('pbm.show', $data);
        return view('pbm.show')->with(array('data'=>$data));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
