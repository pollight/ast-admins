<?php

namespace App\Http\Controllers;

use App\MachineInfo;
use Illuminate\Http\Request;

class MachineInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\MachineInfo  $machineInfo
     * @return \Illuminate\Http\Response
     */
    public function show(MachineInfo $machineInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MachineInfo  $machineInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(MachineInfo $machineInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MachineInfo  $machineInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MachineInfo $machineInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MachineInfo  $machineInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MachineInfo $machineInfo)
    {
        //
    }
    public function restartMAtriX()
    {

        exec (' /home/ast//mysript',$out);

        return json_encode([
            'Matrix'        => "Wake up... Neo",
            'fromUnix'      => $out,

        ]);
    }
}
