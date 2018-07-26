<?php

require('home3h.html');
date_default_timezone_set("Asia/Kolkata");
echo "

	<p style='text-align: center;font-size: 30px;font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic,'AppleGothic', sans-serif; border:2px solid blue;'> <b>" .date("d-m-Y"). "  " .date("l").  "  " .date("h:i:sa"). "</b>  </p>


";
require('home3f.html');
?>