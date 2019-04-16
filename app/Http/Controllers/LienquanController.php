<?php

namespace App\Http\Controllers;

use App\Lienquan;
use App\LienquanRank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        return view('admin.lienquan.index',['lienquans'=>$lienquans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $ranks = LienquanRank::get();
        return view('admin.lienquan.create',['ranks'=>$ranks ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['rank'] = $request->rank;
        $data['season'] = $request->season;
        $data['taikhoan'] = $request->taikhoan;
        $data['matkhau'] = $request->matkhau;
        $data['count_champs'] = $request->count_champs;
        $data['count_skins'] = $request->count_skins;
        $data['count_bangngoc'] = $request->count_bangngoc;
        $data['diemngoc'] = $request->diemngoc;
        $data['gia'] = $request->gia;
        $data['giamgia'] = $request->giamgia;
        $data['ip'] = $request->ip;
        $data['champs'] = $request->champs;
        $data['skins'] = $request->skins;

        $data['user_id'] = Auth::user()->id;

        //dd($data);
      
        $product = Lienquan::create([
            'loainick' => 'LienQuan',
            'rank_id' => $data['rank'],
            'season' => $data['season'],
            'taikhoan' => $data['taikhoan'],
            'matkhau' => $data['matkhau'],
            'count_champs' => $data['count_champs'],
            'count_skins' => $data['count_skins'],
            'count_bangngoc' => $data['count_bangngoc'],
            'diemngoc' => $data['diemngoc'],
            'gia' => $data['gia'],
            'giamgia' => $data['giamgia'],
            'ip' => $data['ip'],
            'champs' => $data['champs'],
            'skins' => $data['skins'],

            'thongtin' => 1,
            'trangthai' => 1,
            'kichhoat' => 1,

            'uutien' => 0,

            'thumb_id' => 1,
            'image_id' => 1,



            'user_id' => $data['user_id']

        ]);
        redirect('/admin/lienquan');
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
