<!DOCTYPE html>
<html>
<head>
	<title>Siswaku</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    
      <style>
        .garis_verikal{
          border-left: 1px gray solid;
          height: 40px;
          width: 0px;
        }
      </style>

<body>
  <nav class="navbar fixed-top navbar-light bg-light">
    <img class="navbar-brand" src="{{ ('img/c.png') }}" style="margin-left:10px; width: 140px; height: 50px;">
    <p class="" style="margin-right:170px; font-weight: bold;">Spare Part & Peralatan Kapal</p>
    <p class="" style="margin-right:-80px; font-weight: bold;">Profil</p>
    <p class="" style="margin-right:-80px; font-weight: bold;">HubungiKami</p>
    <p class="" style="margin-right:-80px; font-weight: bold;">Blog</p>
    <p class="navbar-brand garis_verikal" style="margin-right:-80px;"></p>
    <p class="" style=" margin-right: 50px; font-weight: bold;">WHASTAPP 082134562134</p>
  </nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:50px; text-align: center;">
  		<div class="collapse navbar-collapse container" id="navbarNav">
    		<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="margin-right: 70px; margin-left: 30px; font-weight: bold;">ANEKA SPARE PARTS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="margin-right: 70px; font-weight: bold;">GENSET & KELISTRIKAN</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="margin-right: 70px; font-weight: bold;">ANEKA POMPA</a>
      		</li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-right: 70px; font-weight: bold;">PANEL & GAUGE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-right: 20px; font-weight: bold;">HARGA TURUN</a>
          </li>
    		</ul>
  		</div>
		</nav>

    <div style="padding-top: 300px; background-color: #082750;">
      <div class="card border-light" style="background: linear-gradient(#ececec, #ffffff); padding-top: 200px; margin-top: 30px;"></div>
    </div>


		@yield('main')

    @include('footer')

	
		

<script src="../public/js/jquery.js"></script>
<script src="../public/js/bootstrap.js"></script>




</body>
</html>