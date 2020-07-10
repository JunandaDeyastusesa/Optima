<!DOCTYPE html>
<html>
<head>
	<title>Siswaku</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
      <style>
        .garis_verikal{
          border-left: 1px gray solid;
          height: 40px;
          width: 0px;
        }
        body{
          font-family: 'Fira Sans', sans-serif;
        }
      </style>

<body>
  <nav class="navbar fixed-top navbar-light bg-light" style="margin-top:-15px;">
    <img class="navbar-brand" src="{{ ('img/c.png') }}" style="margin-left:10px; width: 200px; height: 70px;">
    <p class="" style="color:gray; margin-left:-200px; margin-right:30px; margin-top:25px; font-weight: 700; font-family: 'Fira Sans', sans-serif;">Spare Part & Peralatan Kapal</p>
    <p class="" style="color:gray; margin-right:-190px; margin-top:25px; font-weight: 700;">Profil</p>
    <p class="" style="color:gray; margin-right:-190px; margin-top:25px; font-weight: 700;">HubungiKami</p>
    <p class="" style="color:gray; margin-right:-170px; margin-top:25px; font-weight: 700;">Blog</p>
    <p class="navbar-brand garis_verikal" style="color:gray; margin-top:25px; margin-right:-170px;"></p>
    <p class="" style=" color:gray; margin-right: 50px; margin-top:25px; font-weight: 700;">WHASTAPP 
    <img class="navbar-brand" src="{{ ('img/wa.png') }}" style="margin-left:10px; margin-right:10px; width: 18px; height: 30px;">
     082134562134</p>
  </nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:60px; text-align: center;">
  		<div class="collapse navbar-collapse container" id="navbarNav">
    		<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="color: #082750; margin-right: 70px; margin-left: 30px; font-weight: 700;">ANEKA SPARE PARTS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="color: #082750; margin-right: 70px; font-weight: 700;">GENSET & KELISTRIKAN</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#" style="color: #082750; margin-right: 70px; font-weight: 700;">ANEKA POMPA</a>
      		</li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #082750; margin-right: 70px; font-weight: 700;">PANEL & GAUGE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #082750; margin-right: 20px; font-weight: 700;">HARGA TURUN</a>
          </li>
    		</ul>
  		</div>
		</nav>

    <div style="padding-top: 250px;  background-color: #082750;">
      <div class="card border-light" style="background: linear-gradient(#ececec, #ffffff); padding-top: 200px; margin-top: 30px;"></div>
    </div>


		@yield('main')

    @include('footer')

	
		

<script src="../public/js/jquery.js"></script>
<script src="../public/js/bootstrap.js"></script>




</body>
</html>