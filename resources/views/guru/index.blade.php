@extends('template')

@section('main')
<section class="container" id="guru" style="font-family: 'Fira Sans', sans-serif;">

    <div id="atas" style="margin-top: -460px; margin-left: 50px;">
    	<h6 style="color: white; line-height: 30px;">Cari spare part & aneka peralatan kapal yang anda inginkan</h6>
      	<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Ketik Pencarian Anda" aria-label="Search" style="padding-right: 570px;">
      		<select class="btn btn-light my-2 my-sm-0" style="margin-right: 10px;"><option>Semua Kategori</option>
      		</select>
      		<button class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
    	</form>
    </div>

	<div class="container card border-light" style="padding-top: 200px; margin-left:-15px; margin-top: 30px; width:1200px;">
	  <div class="card-overlay" style="margin-left: 35px; margin-top: -170px;">
	    <h6 class="card-title" style="font-weight: bold; color: #ca6d39; margin-bottom: 30px;"> / KATEGORI PRODUK / GENSEET & KELISTRIKAN / NAMA PRODUK DETAIL</h6>
	    <h4 style="font-weight: bold; color: #082750; margin-bottom: 30px;">Spare Part Kapal 1</h4>
	    <div>
	    	<img src="{{ ('img/blog/blog_4.png') }}" style="width: 470px; height: 470px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/blog/blog_4.png') }}" style="width: 100px; height: 100px; margin-left: -460px; margin-top: 490px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 100px; height: 100px; margin-left: -340px; margin-top: 490px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 100px; height: 100px; margin-left: -220px; margin-top: 490px;" class="rounded float-left" alt="...">
	    	<img src="{{ ('img/o.png') }}" style="width: 100px; height: 100px; margin-left: -100px; margin-top: 490px;" class="rounded float-left" alt="...">
	    </div>
	  </div>

	<div style="margin-top: -640px; margin-left: 830px;">
		<h6 style="font-weight: bold;" ><a href="#" style="color: #ca6d39;">Kembali Ke kategori Produk &emsp; ></a></h6>
		<!-- <h6 style="font-weight: bold; margin-top: -27px; margin-left: 250px; margin-bottom: 30px;">></h6> -->
	</div>

	<div style="margin-top: 12px; margin-left: 530px; margin-right: 30px; margin-bottom: 50px;">
		<table class="table">
		  <tbody>
		    <tr>
		      <th scope="col">SKU/ID NUMBER</th>
		      <td style="font-size: 15px;">OP0125/221</td>
		    </tr>
		    <tr>
		      <th scope="col">DIMENSI</th>
		      <td scope="col" style="font-size: 15px;">120 x 240 x 100 cm (pxlxt)</td>
		    </tr>
		    <tr>
		      <th scope="col">BERAT</th>
		      <td scope="col" style="font-size: 15px;">1000 kg</td>
		    </tr>
		    <tr>
		      <th scope="col">DESKRIPSI</th>
		      <td scope="col" style="font-size: 15px;">
		      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
		    </tr>
		  </tbody>
		</table>
		<hr size="1px" color="#6e6e6e" width="100%">
		<button type="button" class="btn btn-success">Inkuri Via Whatsapp</button>
		<button type="button" class="btn btn-danger">Inkuri Form Online</button>
		<hr size="1px" color="#6e6e6e" width="100%">
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
			<h5 style="font-weight: bold; color: #ca6d39; margin-top: -230px; margin-bottom: 30px;">REKOMENDASI PRODUK SPARE PART LAINNYA</h5>
						<div class="row row-cols-1 row-cols-md-3">
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/learn_about_bg.png') }}" class="card-img-top" alt="...">
			      <div class="card-body">
			        <p class="card-text">Spare Part Kapal 1</p>
			        <h6 class="card-title">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_1.png') }}" class="card-img-top" alt="...">
			      <div class="card-body">
			        <p class="card-text">Spare Part Kapal 2</p>
			        <h6 class="card-title">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_2.png') }}" class="card-img-top" alt="...">
			      <div class="card-body">
			        <p class="card-text">Spare Part Kapal 3</p>
			        <h6 class="card-title">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-4">
			    <div class="">
			      <img src="{{ ('img/blog/single_blog_4.png') }}" class="card-img-top" alt="...">
			      <div class="card-body">
			        <p class="card-text">Spare Part Kapal 4</p>
			        <h6 class="card-title">Rp 12.000.000,-<strike style="font-size: 12px;">Rp 15.000.000,-</strike></h6>
			      </div>
			    </div>
			  </div>
			</div>

			<h6 style="font-weight: bold;  margin-left: 920px;"><a href="#" style="color: #ca6d39;">Lihat Semua Produk &emsp; ></a></h6>
			<br><br>
			
		</div>
	</div>

@stop 

