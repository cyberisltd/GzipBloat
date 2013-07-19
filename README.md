GzipBloat
=========

* Author: geoff.jones@cyberis.co.uk
* Copyright: Cyberis Limited 2013
* License: GPLv3 (See LICENSE)

PHP framework to test User-Agents and intermediary content inspection devices for denial-of-service vulnerabilities with respect to HTTP response decompression.

Description
-----------
GzipBloat faciliates easy testing of vulnerable clients and intermediary content inspection devices by delivering pre-compressed content (/dev/zero) with necessary HTTP response headers set. Using multiple rounds of encoding, a 43 Kilobyte HTTP server response will equate to a 1 Terabyte file when decompressed by a receiving client - an effective compression ratio of 25,127,100:1.

Dependencies
------------
To create the test cases:

* dd (Linux)
* bash

To run the server-side scripts:

* Apache/PHP

Create Test Cases
-----------------

./makeGzips.sh

Issues
------
Kindly report all issues via https://github.com/cyberisltd/GzipBloat/issues
