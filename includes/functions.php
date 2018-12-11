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

/**
 * Displays an error Message
 * 
 * @param string $msg the message to display 
 */
function errorMessage($msg)
{
	if (!isset($_SESSION['error']) || !is_array($_SESSION['error']))
	{
		$_SESSION['error']=array($msg);
	}
	else
	{
		$_SESSION['error'][]=$msg;
	}
}

/**
 * mysql_query wrapper
 * 
 * @param string $query SQL query 
 */
function dbQuery($query,$conn)
{
	$result=mysqli_query($conn, $query);
	
	//check result
	if (!$result) {
		$message  = 'Invalid query: ' . mysqli_error($conn) . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	
	return $result;
}
