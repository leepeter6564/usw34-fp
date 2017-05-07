<html>

<head>
	<?php
	include('fadefxn.php');

	$par =
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at varius velit, quis vulputate elit. Nullam viverra consectetur libero, aliquet imperdiet tellus pellentesque convallis. Ut et odio nisl. Nulla facilisi. Nulla facilisi. Phasellus rhoncus fermentum interdum. Nam mauris metus, porttitor at sem eget, sagittis imperdiet lectus. Duis luctus, diam eu egestas eleifend, turpis magna porttitor mauris, quis pharetra velit diam sit amet justo. Aenean at auctor lacus. Nullam non orci sit amet odio placerat cursus. Proin lobortis dictum elit in gravida. Nulla justo enim, pellentesque a facilisis in, dignissim vitae ante.

Fusce laoreet maximus velit, at vulputate nibh. Nullam nec tempor ligula. Nullam ex lectus, semper sit amet odio vel, sagittis faucibus urna. Phasellus tortor tellus, porttitor mattis accumsan sed, elementum id diam. Nam vehicula ultricies risus ultricies condimentum. Ut gravida tempor massa sed accumsan. Morbi sed erat augue. Morbi id convallis eros. In nisi odio, aliquam et viverra quis, tincidunt ut nisl. Morbi molestie imperdiet odio in lacinia. Mauris viverra odio at nisi eleifend, sit amet vulputate nibh placerat. Curabitur malesuada mi a ex gravida, pharetra euismod tellus interdum. Aenean et bibendum mauris. Quisque maximus, erat eu faucibus blandit, leo quam aliquam odio, id lacinia velit diam et ligula. Donec vestibulum imperdiet elementum.";

	$ques =
	"take me to 2

	2

	take me to 3

	3

	take me to 4

	4";

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
