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
        ->paginate(1);
        
        return view('admin.lienquan.index',['lienquans'=>$lienquans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $thongtin = $request->cookie('thongtin');
        $trangthai = $request->cookie('trangthai');

        //dd($trangthai);
        $kichhoat = $request->cookie('kichhoat');
        $ranks = LienquanRank::get();
        return view('admin.lienquan.create',['ranks'=>$ranks,'thongtin'=>$thongtin, 'trangthai'=>$trangthai,'kichhoat'=>$kichhoat ]);
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

        $data['thongtin'] = $request->thongtin;
        if($data['thongtin'] == 'on') $data['thongtin'] = 1; else $data['thongtin'] = 0;
        $data['trangthai'] = $request->trangthai;
        if($data['trangthai'] == 'on') $data['trangthai'] = 'on'; else $data['trangthai'] = 'off';
        $data['kichhoat'] = $request->kichhoat;
        if($data['kichhoat'] == 'on') $data['kichhoat'] = 'yes'; else $data['kichhoat'] = 'no';

        $data['user_id'] = Auth::user()->id;


        // Cookie 
        $thongtin = $data['thongtin'];
        $trangthai = $data['trangthai'];
        $kichhoat = $data['kichhoat'];


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

            'thongtin' => $data['thongtin'],
            'trangthai' => $data['trangthai'],
            'kichhoat' => $data['kichhoat'],
            'user_id' => $data['user_id']

        ]);

        return redirect('/admin/lienquan')
        ->withCookie(cookie()->forever('thongtin', $thongtin))
        ->withCookie(cookie()->forever('trangthai', $trangthai))
        ->withCookie(cookie()->forever('kichhoat', $kichhoat));
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
