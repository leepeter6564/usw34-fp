<html>

<head>
	<?php
	include('fadefxn.php');

	$par = "
	Fate isn't on your side today though. The dealer turns his cards over with one hand, sweeping away your money with the other. At first you can only blink, watching the last of your savings slip away. You push away from the table, stepping outside to the crowded streets. From inside your coat pocket you pull that damnable letter. The draft letter.

";

	$ques =
	"You had been avoiding the war since it began.

	4

	You expected the war to end before it mattered.

	5";

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
