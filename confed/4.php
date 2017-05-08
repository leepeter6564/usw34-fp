<html>

<head>
	<?php
	include('fadefxn.php');

	$par = 
	"Slavery, no slavery, Union, no Union, none of it mattered to your world. You had a farm to tend and a family to feed. So much for that plan. You crumpled the letter and shoved it back in your coat.

 	They'd get you in the army one way or another, so you might as well save the army a few days. The sooner you were in, the sooner your service would end most likely. One way or another.";

	$ques =
	"[go to THE NEXT MORNING]

	6";

	?>
</head>

<?php
fade_in($par, $ques);
?>


<body>
	<center>

		<?php 
		print_par($par, $ques);
		?>
		
	</center>
</body>

</html>
