<?php

	echo ("
<link rel='stylesheet' type='text/css' href='../stylesheet_st.css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>");

	function fade_in($paragraphs, $questions){
		$par = explode("\n\n", $paragraphs);
		$ques = explode("\n\n", $questions);
		$length = count($par) + (count($ques) / 2);
		$delay = 0;

		echo(
			"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

			<script>
				$(document).ready(function(){"
		);

		for( $i = 0; $i < $length; $i++ ){
			echo(
				"$('#fade" . $i . "').delay(" . $delay . ").fadeIn( 2000 );"
			);
			$delay = $delay + 2000;
		}

		echo(
				"});
			</script>"
		);



	}

	function print_par($paragraphs, $questions){
		$par = explode("\n\n", $paragraphs);
		$ques = explode("\n\n", $questions);
		$lenp = count($par);
		$lenq = count($ques) / 2;
		for( $i = 0; $i < $lenp; $i++ ){
			echo(
				"<div id='fade" . $i . "' style='display:none;width:80%'>
					<p>"
					. $par[$i] .
					"</p>
				</div>"
			);
		}

		for ($i = 0; $i < $lenq; $i++ ){
			echo(
				"<br style='clear:both' />
				<div id='fade" . ($i + $lenp) . "' style='display:none;float:left;margin-left:10%'>
					<p>"
					. $ques[2 * $i] .
					"</p>

					<form action='" . $ques[2 * $i + 1] . ".php' class='inline'>
						<button type='submit'>Hello</button>
					</form>
				</div>"
			);
		}
	}


?>