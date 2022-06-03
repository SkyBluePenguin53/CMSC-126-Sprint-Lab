<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/InterArt Global CSS.css') }}">
    <script src="{{ asset('js/InterArt Gallery JS.js') }}" type="text/javascript"></script>
	<title>InterArt Gallery Edit Post</title>
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
		
		<h1>PENNAME</h1>

	</div>
	
	<div class="accBorders">
		<h3>Edit Post</h3>
	</div>
	
	<div>
		<div>
		
			<form action="InterArt Gallery Posting.php" enctype="multipart/form-data">
				<label for="postTitle">Title</label>
				<input type="text" id="title" name="title" placeholder="Think of a fancy one?">
				<label for="postGallery">Select Image</label>
				<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
				<label for="postContent">Contents</label>
				<textarea id="content" name="content" style="height:200px" placeholder="No content?"></textarea>
				<button type="submit" name="create">Edit Post</button>
			</form>
			
		</div>
	</div>

</body>

</html>
