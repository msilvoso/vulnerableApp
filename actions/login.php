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

	$login=isset($_POST['login'])?$_POST['login']:'';
	$password=isset($_POST['password'])?$_POST['password']:'';
	
	$query="SELECT * FROM users WHERE login='$login' AND password='$password';";
	
	$result=dbQuery($query, $conn);
	
	//get result
	if ($row=mysqli_fetch_assoc($result))
	{
		$_SESSION['login']=$row['login'];
		$_SESSION['id_users']=$row['id_users'];
	}
	else
	{
		errorMessage("Wrong username or password");
	}
	
	header('Location:index.php');
	exit;
