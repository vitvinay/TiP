<?php

	$pw = 123456;
	$hashed = Hash::make($pw);

	if(!Hash::check($pw, $hashed))
	{
echo "match";
	}
	else{
	echo"not match";
	}


?>