<html>

<head>
	<title>USW 34: Choose your own adventure</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- CSS Stylesheet -->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	$("#fade1").delay( 2000 ).fadeIn( 2000 );
	$("#fade2").delay( 4000 ).fadeIn( 2000 );
	$("#fade3").delay( 6000 ).fadeIn( 2000 );

});
</script>

<body>
	<center>
		<div style="height:400px">
		<h2> USW34: The Civil War, Final Project </h2>
		<h4> By Peter Lee, Vishal Jain, and MaryBeth Schleicher</h4>
		<div class="parallax1"></div>

		<div class="parallax1"></div>
		<div id='fade1' style="display:none; width:80%">
			<p>
			Welcome to the Choose Your Own Adventure creative project for the course USW 34: The Civil War from Nat Turner to Birth of a Nation. This project explores the tale of an ex-slave Union soldier and a gambler-turned-confederate soldier. Through these stories that YOU choose, we hope to convey a better understanding of what it may have been like to be a soldier on either side of the war.
			</p>
		
		</div>
		<div id='fade2' class="float_col" style="display:none;height:200px">
			<p>
			You are an ex-slave who has escaped from the south through rather unconventional means. You are now determined to fight against the southern institution that had enslaved you in the past. Will you be able to survive the ordeal?
			</p>
			<form action="/union/1.php" class="inline">
    			<button type="submit" id="flag"><img src="union_flag.jpg"></button>
			</form>
			Join the Union!
			<br>
		</div>

		
		<div id='fade3' class="float_col" style="display:none;height:200px">
			<p>
			You are a young southern lad taking part in a war that you don't fully understand. As you fight in the war as a confederate soldier, you're not entirely sure what to expect. Perhaps you will discover more about what this war means...or die trying.
			</p>
			<form action="/confed/1.php" class="inline">
    			<button type="submit" id="flag"><img src="confed_flag.jpg"></button>
			</form>
			Join the Confederacy!
			<br>
		</div>
	</center>
</body>

</html>