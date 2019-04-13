<?php

namespace App\Http\Controllers;

use App\Lienquan;
use Illuminate\Http\Request;

class LienquanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lienquans = Lienquan::
        orderby('lienquans.id','desc')
        ->paginate(10);
        return view('admin.lienquan.index',['lienquans'=>$lienquans ]);
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
     * @param  \App\Lienquan  $lienquan
     * @return \Illuminate\Http\Response
     */
    public function show(Lienquan $lienquan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lienquan  $lienquan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lienquan $lienquan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lienquan  $lienquan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lienquan $lienquan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lienquan  $lienquan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lienquan $lienquan)
    {
        //
    }
}
