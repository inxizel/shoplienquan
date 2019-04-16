@extends('layouts.admin')

@section('css')
<!-- vendor css -->

@endsection

@section('js')
<script>
  $( ".lienquan" ).addClass( "active show-sub" );
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
    <a href="/admin/lienquan"><button class="btn btn-primary btn-block mg-b-10 btn-add"><i class="fa fa-send mg-r-10"></i>Back To List</button></a>
    <div class="panel panel-default">


	<div class="panel-body">

	<form action ="/admin/lienquan" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-6">
		    <div class="form-group">
		        <label>Chọn Rank</label>
		        <div class="input-group">
		            <div class="input-group-addon">
		                Rank
		            </div>
	                <select class="form-control" name="rank">
	                @foreach($ranks as $row)
	                	<option value="{{$row->id}}">{{$row->name}}</option>
	               	@endforeach
	                
	                </select>
	            </div>
	        </div>
	    </div>
		<div class="col-md-6">
	    	<div class="form-group">
	    		<label>Season</label>
	    		<input class="form-control" placeholder="Rank mùa mấy" id="season" name="season" type="text" value="8"/>
	    	</div>
	    </div>
	    
	    
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tài khoản</label>
						<input class="form-control" placeholder="Tải khoản" id="taikhoan" name="taikhoan" type="text" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Mật khẩu</label>
						<input class="form-control" placeholder="Mật khẩu" id="matkhau" name="matkhau" type="text" value=""/>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label>Số Tướng</label>
				<input class="form-control" placeholder="Số Tướng" id="count_champs" name="count_champs" type="text" value=""/>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Số Skin</label>
				<input class="form-control" placeholder="Số skin liên quân" id="count_skins" name="count_skins" type="text" value=""/>
			</div>
		</div>
	    <div class="col-md-3">
	        <div class="row">
	            <div class="col-md-6">
	        		<div class="form-group">
	        			<label>Số bảng ngọc</label>
	        			<input class="form-control" placeholder="Số bảng ngọc" id="count_bangngoc" name="count_bangngoc" type="text" value="2"/>
	        		</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="form-group">
	        			<label>Điểm ngọc</label>
	        			<input class="form-control" placeholder="Điểm ngọc" id="diemngoc" name="diemngoc" type="text" value=""/>
	        		</div>
	        	</div>
	    	</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="row">
			    <div class="col-md-6">
			    	<div class="form-group">
			    		<label>Giá bán</label>
			    		<input class="form-control" placeholder="Giá?" name="gia" type="number" autofocus="" value=""/>
			    	</div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
			    		<label>Giảm giá</label>
			    		<input class="form-control" placeholder="Giảm giá?" name="giamgia" type="number" autofocus="" value=""/>
			    	</div>
			    </div>
			</div>
		</div>
	    <div class="col-md-3">
			<div class="form-group">
				<label>Số Vàng</label>
				<input class="form-control" placeholder="Số vàng còn lại" id="ip" name="ip" type="text" value=""/>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Ảnh đại diện</label>
				<input class="form-control" placeholder="Thumbnail?" id="thumb" name="thumb" type="text" value="1"/>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="form-group">
				<label>Số hình ảnh</label>
				<input class="form-control" placeholder="Số hình ảnh" id="count_img" name="count_img" type="text" value="1"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 dropdown" data-filter="tim-theo-tuong">
	        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	        Nhập tên tướng
	        </button>
	        <ul class="dropdown-menu filter-clothes">
	            <li class="txt-filter">
	                <input style="margin-left: 5px; color: #121212; border:none; padding: 5px; background-color: #fff;" type="text" id="champFilter" placeholder="Nhập tên tướng..." data-provide="typeahead" autocomplete="off">
	            </li>
	        </ul>
	    </div>
		<div class="col-md-6 dropdown" data-filter="trang-phuc">
	        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	        Nhập tên trang phục
	        </button>
	        <ul class="dropdown-menu filter-clothes">
	            <li class="txt-filter">
	                <input style="margin-left: 5px; color: #121212; border:none; padding: 5px; background-color: #fff;" type="text" id="skinFilter" placeholder="Nhập tên trang phục..." data-provide="typeahead" autocomplete="off">
	            </li>
	        </ul>
	    </div>

	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				
				<textarea class="form-control" rows="2" id="champs" name="champs" placeholder="Auto Complete Champs"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				
				<textarea class="form-control" rows="2" id="skins" name="skins" placeholder="Auto Complete Skins"></textarea>
			</div>
		</div>
	</div>       
	<div class="row">
		<div class="col-md-3">
			<div class="form-group remove-margin-b">
				<label class="css-input switch switch-sm switch-primary">
					<input type="checkbox" id="kichhoat" name="kichhoat" <?php echo "checked='true'"; ?>/>
					<span></span> Kích hoạt?
	                
				</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group remove-margin-b">
				<label class="css-input switch switch-sm switch-primary">
					<input type="checkbox" id="trangthai" name="trangthai" <?php  echo "checked='true'" ?>/>
					<span></span> Trạng Thái
	                
				</label>
			</div>
		</div>
		
		<div class="col-md-3">
		    <div class="form-group remove-margin-b">
				<label class="css-input switch switch-sm switch-primary">
					<input type="checkbox" id="fb" name="fb" <?php  echo "checked='true'" ?> />
					<span></span> Facebook
	                
				</label>
			</div>
		</div>
		<div class="col-md-3">
		    <div class="form-group remove-margin-b">
				<label class="css-input switch switch-sm switch-primary">
					<input type="checkbox" id="thongtin" name="thongtin" <?php echo "checked='true'" ?> />
					<span></span> Thông Tin
	                
				</label>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<button id="login" type="submit" class="sa-lib-dk btn btn-success" name="upacc_lienquan">Đăng bán</button>
			</div>
		</div>
	</div>

	</div> <!--End pannel body--> 
	</div> <!--End pannel-->

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