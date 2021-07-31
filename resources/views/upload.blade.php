<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>upload</title>
	<script src="http://localhost/un/blog/public/js/jq.js" type="text/javascript">
		
	</script>
</head>
<body>

	<div>
	<form action="" method="post">
		
		@csrf
		<label>Category</label>
		<input class="" type="text" name="c">
		<label>Playlist</label>
		<input class="" type="text" name="p">

		<label>Playlist ID</label>
		<input class="" type="text" name="pi">
		<label>Page Token</label>
		<input class="" type="text" name="pt">

		<input class="send" type="button" value="upload" name="">


	</form>
	</div> 

	<div>
		<p id="">next</p>
		<p id="next"></p>

		<br><br><br><br>
		<p id="next">Previous</p>
		<p id="pre"></p>
	</div>


<script type="text/javascript">
	

	$(document).ready(function(){


				
			$(".send").click(function(){


					$.get(
			"https://www.googleapis.com/youtube/v3/channels",
			{
				part : "contentDetails",
				forUsername : "tseries",
				key : "AIzaSyBTKTLcnnrysVDABNbsceyE8YHeWaa8oPo"
			},
			function(data){
				$.each(data.items, function(i, item){
					
					var a = item.contentDetails.relatedPlaylists.uploads;
					gervids(a);

				});
			}
	);


	function gervids(a){
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems",
			{
				part : "snippet",
				maxResults : 50,
				playlistId : $("input[name=pi]").val(),
				pageToken : $("input[name=pt]").val(),
				key : "AIzaSyBj41vUXjcd8zcD5-gt9CLbSxVxBj3ANzQ"
			},
			function(data){
				
				$("#next").text(data.nextPageToken);
				$("#pre").text(data.prevPageToken);


				var count = 0 ;


				for(var i = 0; i <= 50; i++){
					var t = data.items[i].snippet.title;
				 var tham = data.items[i].snippet.thumbnails.high.url;
				 var v = data.items[i].snippet.resourceId.videoId;
				 //console.log(t);





				 		$.post(

				 				"{{route('aaa')}}",
				 				{
				 					_token : $("input[name=_token]").val() ,
				 					cat : $("input[name=c]").val() ,
				 					list : $("input[name=p]").val() ,
				 					title : t ,
				 					them : tham ,
				 					vdieo : v
				 				},
				 				function(data){
				 					count++
				 					if(count == 50){
				 						alert('success  :)');
				 					};
				 				}

				 			);




				}

				//console.log(data);



				//$.each(data.items, function(i, item){
					
					// var b = item.snippet.resourceId.videoId;
					// var c = '<li><iframe src=\"//www.youtube.com/embed/'+b+'"></iframe></li>';
					// $('.b').append(c);
					//console.log(item);
				//});
			});
	}



				

	
});
});


</script>


</body>
</html>