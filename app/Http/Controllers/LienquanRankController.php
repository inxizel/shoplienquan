<?php

namespace App\Http\Controllers;

use App\LienquanRank;
use Illuminate\Http\Request;

class LienquanRankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LienquanRanks = LienquanRank::orderby('id','desc')->paginate(50);
        return view('admin.LienquanRank.index',['data'=>$LienquanRanks]);
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
        $data['name'] = $request->name;
        
        $LienquanRank = LienquanRank::create([
            'name' => $data['name']
        ]);
        echo json_encode($data); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Size::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['value'] = $request->value;

        $input =Size::find($id)->update([
            'value' => $data['value']
        ]);

        echo json_encode($data); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Size::destroy($id);
        return redirect('/admin/size');
    }
}
