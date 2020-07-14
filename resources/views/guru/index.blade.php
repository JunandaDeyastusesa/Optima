@extends('template')

@section('main')
<section class="container" id="guru" style="font-family: 'Fira Sans', sans-serif; margin-bottom:150px;">

    <div id="atas" style="margin-top: -460px; margin-left: 40px;">
    	<h6 style="color: white; line-height: 15px; margin-top:15px;">Cari spare part & aneka peralatan kapal yang anda inginkan</h6>
      	<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Ketik Pencarian Anda" aria-label="Search" style="padding-right: 555px; height:32px; font-sixe:12px;">
      		<select class="btn btn-light my-2 my-sm-0" style="margin-right: 10px; width:140px; font-size:13px;"><option>Semua Kategori</option>
      		</select>
      		<button class="btn btn-success my-2 my-sm-0" type="submit" style="padding-right:45px; height:32px;">&emsp; &ensp;Cari</button>
    	</form>
    </div>

	<div class="container card border-light" style="padding-top: 200px; margin-bottom:-150px; margin-left:-15px; margin-top: 30px; width:1200px;">
	  <div class="card-overlay" style="margin-left: 35px; margin-top: -170px;">
	    <h6 class="card-title" style="font-weight: bold; color: #ca6d39; margin-bottom: 30px;"> / KATEGORI PRODUK / GENSEET & KELISTRIKAN / NAMA PRODUK DETAIL</h6>
	    <h4 style="font-weight: bold; color: #082750; margin-bottom: 30px;">Spare Part Kapal 1</h4>
	    <div>
	    	<img src="{{ ('img/blog/blog_4.png') }}" style="width: 470px; height: 470px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/blog/blog_4.png') }}" style="width: 110px; height: 110px; margin-left: -470px; margin-top: 500px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 110px; height: 110px; margin-left: -350px; margin-top: 500px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 110px; height: 110px; margin-left: -230px; margin-top: 500px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 110px; height: 110px; margin-left: -110px; margin-top: 500px;" class="rounded float-left" alt="...">
	    </div>
	  </div>

	<div style="margin-top: -660px; margin-left: 830px;">
		<h6 style="font-weight: bold;" ><a href="#" style="color: #ca6d39;">Kembali Ke kategori Produk &emsp; ></a></h6>
		<!-- <h6 style="font-weight: bold; margin-top: -27px; margin-left: 250px; margin-bottom: 30px;">></h6> -->
	</div>

	<div style="margin-top: 12px; margin-left: 580px; margin-right: 30px; margin-bottom: 50px;">
		<div style="font-size:12px;">
			<hr size="0.5px" style="margin-top:-5px;" color="#6e6e6e" width="100%">
				<p style="margin-top:20px; margin-bottom:20px;"><a style="font-weight: 700;">SKU/ID NUMBER</a> &emsp; &emsp; OP0125/221</p>
			<hr size="0.5px" style="margin-top:0px;" color="#6e6e6e" width="100%">
				<p style="margin-top:20px; margin-bottom:20px;"><a style="font-weight: 700;">DIMENSI </a> &emsp; &emsp; &emsp; &emsp; &emsp;120 x 240 x 100 cm (pxlxt)</p>
			<hr size="0.5px" style="margin-top:0px;" color="#6e6e6e" width="100%">
				<p style="margin-top:20px; margin-bottom:20px;"><a style="font-weight: 700;">BERAT</a> &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;100kg</p>
			<hr size="0.5px" style="margin-top:0px;" color="#6e6e6e" width="100%">
				<p style="font-weight: 700; margin-top:30px;">DESKRIPSI</p>
				<p style="margin-top:-33px; margin-left:123px;  margin-bottom:30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<hr size="0.5px" style="margin-top:-5px;" color="#6e6e6e" width="100%">
			
		</div>
			<button type="button" class="btn btn-success" style="margin-top:10px; margin-bottom:10px">Inkuri Via Whatsapp</button>
			<button type="button" class="btn btn-danger">Inkuri Form Online</button>
			<hr size="1px" color="#6e6e6e" width="100%">
			<p style="font-weight:500; font-size:12px">MENGAPA MEMBELI DI OPTIMA PARTS-TOKO ONLINE JUAL SPARE PARTS & PERALATAN KAPAL</p>
			<p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit.</p>
		</div>
	</div>
</section>

	<div style="padding-top: 300px; background-color: #f1f1f1;">
		<div class="container">
			<h6 style="font-weight: bold; color: #ca6d39; margin-top: -240px; margin-bottom: 30px;">REKOMENDASI PRODUK SPARE PART LAINNYA</h6>
						<div class="row row-cols-1 row-cols-md-3">
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/learn_about_bg.png') }}" style="height:250px;" class="card-img-top" alt="...">
			      <div class="card-body" style="margin-top:-10px; margin-left:-20px;">
			        <p class="card-text">Spare Part Kapal 1</p>
			        <h6 class="card-title" style="margin-top:-13px;">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_1.png') }}" style="height:250px;" class="card-img-top" alt="...">
			      <div class="card-body" style="margin-top:-10px; margin-left:-20px;">
			        <p class="card-text">Spare Part Kapal 2</p>
			        <h6 class="card-title" style="margin-top:-13px;">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_2.png') }}" style="height:250px;" class="card-img-top" alt="...">
			      <div class="card-body" style="margin-top:-10px; margin-left:-20px;">
			        <p class="card-text">Spare Part Kapal 3</p>
			        <h6 class="card-title" style="margin-top:-13px;">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_4.png') }}" style="height:250px;" class="card-img-top" alt="...">
			      <div class="card-body" style="margin-top:-10px; margin-left:-20px;">
			        <p class="card-text">Spare Part Kapal 4</p>
			        <h6 class="card-title" style="margin-top:-13px;">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			</div>

			<h6 style="font-weight: bold;  margin-left: 920px; margin-bottom:80px; margin-top:-10px;"><a href="#" style="color: #ca6d39;">Lihat Semua Produk &emsp; ></a></h6>
			<br><br>
			
		</div>
	</div>

@stop 

