<!DOCTYPE html>
<html>
<head>
	<title>Siswaku</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">


    
      <style>
  body{
    background-image: url(img/1.png);
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 0px;
    padding-left: 0%;
  }

</style>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand">LaravelApp</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">

          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
      @else

      		<li class="nav-item active">
        		<a class="nav-link" href="http://localhost/tutorial/public/homepage">Home</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="{{url('about')}}">About</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="http://localhost/tutorial/public/siswa">Siswa</a>
      		</li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('kelas')}}">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('guru')}}">Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('wali')}}">Wali</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
              </li>
            @endguest

    		</ul>
  		</div>
		</nav>


		@yield('main')

    @include('footer')

	
		

<script src="../public/js/jquery.js"></script>
<script src="../public/js/bootstrap.js"></script>




</body>
</html>