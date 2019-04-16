@extends('layouts.admin')

@section('css')
<!-- vendor css -->

@endsection

@section('js')
<script>
  $( ".lienquan" ).addClass( "active show-sub" );
</script>


<script >
  
  $('.btn-delete').click(function(){

    var id = $(this).data('id');
    $.ajax({
      type: 'post',
      url : '/admin/lienquan/' + id,
      data: {
        _method : 'delete'
      },
      success : function(res){
        toastr.success('Delete success!')
        setTimeout(function () {
          window.location.href="/admin/lienquan";
        },800);
      }
    })
  });  


</script>
@endsection


@section('main')

<div class="br-mainpanel" style="margin-top: 40px;">

<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Bracket</a>
    <a class="breadcrumb-item" href="#">Forms</a>
    <span class="breadcrumb-item active">Form Elements</span>
  </nav>
</div>
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Form Elements</h4>
  <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
</div>
<div class="br-pagebody">
  <div class="br-section-wrapper">
    <a href="/admin/lienquan/create"><button class="btn btn-primary btn-block mg-b-10 btn-add"><i class="fa fa-send mg-r-10"></i>Add New</button></a>
    <table id="datatable1" class="table display responsive nowrap">
      <thead>
        <tr>
          <th class="wd-5p">ID</th>
          <th class="wd-5p">Tài Khoản</th>
          <th class="wd-5p">Số Tướng</th>
          <th class="wd-5p">Số Skin</th>
          <th class="wd-5p">Điểm Ngọc</th>
          <th class="wd-5p">Price</th>
          <th class="wd-10p">Created At</th>
          <th class="wd-15p">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($lienquans as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->taikhoan}}</td>
          <td>{{$row->count_champs}}</td>
          <td>{{$row->count_skins}}</td>
          <td>{{$row->diemngoc}}</td>
          <td><b>{{number_format($row->gia)}}</b><sup>vnd</sup></td>
          <td>{{ $row->created_at }}</td>      
          <td>
            <a href="javascript:;" class="btn btn-outline-primary btn-icon mg-r-5 btn-edit" data-id="{{$row->id}}"> 
              <div><i class="fa fa-pencil"></i></div>
            </a>
            <a href="javascript:;" class="btn btn-outline-danger btn-icon mg-r-5 btn-delete" data-id="{{$row->id}}">
              <div><i class="fa fa-trash-o"></i></div>
            </a>
            <a href="/admin/product-image" class="btn btn-outline-success btn-icon mg-r-5" data-id="{{$row->id}}">
              <div><i class="fa fa-file-image-o"></i></div>
            </a>
            <a href="/admin/product/detail/{{$row->id}}" class="btn btn-outline-warning btn-icon mg-r-5" data-id="{{$row->id}}">
              <div><i class="fa fa-puzzle-piece"></i></div>
            </a>
            
          </td>   
        </tr>
        @endforeach
        
      </tbody>
    </table>
    {{$lienquans->links()}}

  </div>
</div>

<footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright © 2017. Bracket. All Rights Reserved.</div>
    <div>Attentively and carefully made by ThemePixels.</div>
  </div>
  <div class="footer-right d-flex align-items-center">
    <span class="tx-uppercase mg-r-10">Share:</span>
    <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
    <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
  </div>
</footer>

</div>  



@endsection