<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/InterArt Global CSS.css') }}">
    <script src="{{ asset('js/InterArt Gallery JS.js') }}" type="text/javascript"></script>
	<title>InterArt Gallery Register</title>
</head>

<body id="MainBody">

<ul class="NavBar">
<!-- Header portion -->

	<div>
		<ul id="navi1">
			<li><a href="/home" id="TitleButton">InterArt Gallery</a></li>
		</ul>
	</div>
	<div>
		<ul id="navi2">
			<li><a href="/home/blogs">Find an Art!</a></li>
			<li><a href="/home/about">About Us</a></li>
			<li><a href="/home/login">Login</a></li>
		</ul>
	</div>
	<div>
		<ul id="clock">
			<span id="hours">00</span>
			<span>:</span>
			<span id="minutes">00</span>
			<span>:</span>
			<span id="seconds">00</span>
			<span id="labelTime">-M</span>
		</ul>
	</div>
	
	
</ul>


<div class="lr-content">
    <div class="centerVandH">
	    <h1>Register</h1>
	    <form action="{{route('register-user')}}" method="post">
            @if(Session::has('success'))
	        <div id="accntPosResult">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
	        <div id="accntNegResult">{{Session::get('fail')}}</div>
            @endif
            @csrf
		    <label id="lrLabel">Penname</label>
		    <input type="text" class="lrinputs" name="penname" value="{{old('penname')}}" placeholder="Penname">
            <label id="lrLabel">Password</label>
		    <input type="password" class="lrinputs" name="password" placeholder="Password">
            <span id="accntError">@error('penname'){{$message}} @enderror</span>
            <br>
            <span id="accntError">@error('password'){{$message}} @enderror</span>

            <div id="submits">
			    <input type="submit" name="create" value="Create account"/>
		    </div>
	    </form>
    </div>
</div>

</body>
</html>
