<!DOCTYPE html>

<!--
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
-->

<html>
<head>
<title>GzipBloat - Exploiting HTTP Gzip Compression to Perform Denial of Service Attacks against User Agents</title>
</head>
<body>
<h1>GzipBloat</h1>
<h2>Common Test Cases:</h2>
<ul>
	<li><a href='./gzipBloat.php?infile=1T.gzip'>1TB 'HTML response'*, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?rounds=4&infile=1T.gzipx4'>1TB 'HTML response'* with 4 rounds of Gzip encoding</a></li>
	<li><a href='./gzipBloat.php?rounds=4&infile=1T.gzipx4&filename=zeros.txt'>1TB file download with 4 rounds of Gzip encoding</a></li>
	<li><a href='./gzipBloat.php?infile=1T.gzip&filename=zeros.txt'>1TB file download, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?infile=1G.gzip'>1G 'HTML response'*, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?infile=1G.gzip&filename=zeros.txt'>1G file download, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?infile=10G.gzip'>10G 'HTML response'*, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?infile=10G.gzip&filename=zeros.txt'>10G file download, Gzip encoded</a></li>
	<li><a href='./gzipBloat.php?infile=10G.gzip&rounds=2'>10G 'HTML response'* with 2 rounds of Gzip encoding</a></li>
	<li><a href='./gzipBloat.php?infile=10G.gzip&rounds=2&filename=zeros.txt'>10G file download with 2 rounds of Gzip encoding</a></li>
	<li><a href='./sdch.php'>1Tb SDCH dictionary</a></li>
</ul>
<p><i>* Obviously this isn't really HTML content - it will extract to a file full of zeros.</i></p>
</body>
</html>
