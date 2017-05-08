<html>

<head>
	<?php
	include('fadefxn.php');

	$par =
"Smoke fills the air, and the smell of alcohol heavy on folks' breath. People squabble over space at the bar and the ladies strolling between the rickety wooden tables. You mostly ignore them, focusing instead on your game, possibly the most important game of your life.

The year is 1862, and while you should be focused on tending crops and utilizing those familiar April showers, you're at a bar. This afternoon you set out with your whole savings, $50 sequestered in your pocket. You ignored the scant few posters and the criers shouting about recruitment. Word of the new conscription laws had spread like wildfire across the once sleepy farms of Arkansas. Now people were alive, the poor ones at least. $300 dollars and you could guarantee yourself a chance to go home, no questions asked, and forget about this war. As you stare down at your two cards, a stony mask on your face, you have to make a decision…
";

	$ques =
	"You hit, the dealer at the rough table sliding a card your way.

	3

	You stand, confident enough in your hand.

	3";

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
