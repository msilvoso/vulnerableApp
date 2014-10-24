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

	if (isset($_GET['entry']) && !empty($_GET['entry']))
	{
		$entry=$_GET['entry'];
		$view=
<<<FREE
	<form action="/index.php?action=commentInsert.php" method="post">
		<label for="text">New comment</label><br/>
		<textarea name="text" cols="80" rows="10"></textarea><br/>
		<input type="hidden" name="entry" value="$entry"/>
		<input type="submit" name="submit" value="Submit">
	</form>
FREE;
	}
	else
	{
		header('Location:index.php');
		exit;
	}
