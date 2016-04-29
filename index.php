<?php

$mail->send('welcome.php',['name'=>'Choxmi'],function($m){
	$m->to('gwcsathsara@gmail.com');
	$m->subject('Welcome');
});