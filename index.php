<?php
$quotes = [
	0 => "Never regret anything that made you smile. –Mark Twain",
    1 => "All limitations are self-imposed. –Oliver Wendell Holmes",
    2 => "Try to be a rainbow in someone’s cloud. –Maya Angelou",
    3 => "May your choices reflect your hopes, not your fears. –Nelson Mandela"
]	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maia Vibhakar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<div>
    	<h1>Maia Vibhakar</h1>
    	<img src="dog.jpg" alt="Picture of a Dog">
    	<h2>About Me</h2>
    	<p>
        	I am currently a computer science student at HES. I live in Los Angeles at the moment, but also consider Boston, Mumbai, Vancouver and Zurich my homes. I enjoy meeting new people, reading design books, practicing yoga and cooking!
    	</p>
    	<h2>Random Quote</h2>
    	<p><?php echo $quotes[rand(0,3)] ?></p>
	</div>
</body>
</html>