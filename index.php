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
session_start();
//includes
$config=parse_ini_file('config.ini',true);
require_once 'includes/database.php';
require_once 'includes/functions.php';

/*
 * main action
 */
if (isset($_GET['action']) && !empty($_GET['action']))
{
	if ((!isset($_SESSION['login']) || empty($_SESSION['login'])) && $_GET['action']!='login.php')
	{
		require_once 'actions/list.php';
		errorMessage('You have to be logged in to execute this action');
	}
	else
	{
		require_once 'actions/'.$_GET['action'];
	}
}
else
{
	require_once 'actions/list.php';
}

/*
 * display
 */
//header
require_once 'header.php';

//login
if (isset($_SESSION['login']) && !empty($_SESSION['login'])):
?>
	<div id="right">
		<p>Welcome <?=$_SESSION['login']?></p>
		<p><a href="/index.php?action=logout.php">logout</a>
	</div>
<?php
else:
?>
	<div id="right">
		<form name="loginForm" action="index.php?action=login.php" method="post">
			<label for="login">Login:</label>
			<br/>
			<input type="text" name="login" id="login"/>
			<br/>
			<label for="password">Password:</label>
			<br/>
			<input type="password" name="password" id="password"/>
			<br/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</div>
<?php
endif;
?>
<div id="main">
<?php
//errors
if (isset($_SESSION['error']) && is_array($_SESSION['error']) && count($_SESSION['error']))
{
	foreach($_SESSION['error'] as $errorMessage):
?>
		<div class="error"><?=$errorMessage?></div>
<?php
	endforeach;
	echo "<br/>";
	unset($_SESSION['error']);
}

//view
echo "$view<br/><br/>";

?>
</div>
<?php
//footer
require_once 'footer.php';
