<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/InterArt Global CSS.css') }}">
    <script src="{{ asset('js/InterArt Gallery JS.js') }}" type="text/javascript"></script>
	<title>InterArt Gallery Add Post</title>
</head>

<body id="MainBody">
	<ul class="NavBar">
	<!-- Header portion -->
		
		<div>
			<ul id="navi1">
				<li><a id="TitleButton">InterArt Gallery</a></li>
			</ul>
		</div>
		
		<div>
			
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

	<div id="accnt">
		
		<h1>{{$data2->penname}}</h1>

	</div>
	
	<div class="accBorders">
		<h3>Post an Art!</h3>
	</div>
	
	<div>
		<div>
            @if($errors->any())
                <div>
                    @foreach($errors->all() as $errors)
                        <span>{{$errors}}</span>
                    @endforeach
                </div>
            @endif

		    @if(Session::has('added'))
            <span>{{Session::get('added')}}</span>
            @endif
			<form method="post" action="{{route('post.save')}}" enctype="multipart/form-data">
                @csrf
				Post : <br><input type="text" id="title" name="title" placeholder="Think of a fancy one?"></br>
				Image : <br><input type="file" name="image"></br>
				Content : <br><textarea id="content" name="contents" style="height:200px" placeholder="No content?"></textarea></br>
				<button type="submit" name="create">Create Post</button>
			</form>
			
		</div>
	</div>

</body>

</html>
