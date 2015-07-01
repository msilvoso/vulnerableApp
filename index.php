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
	if ((!isset($_SESSION['login']) || empty($_SESSION['login'])) && $_GET['action']!='login.php' && $_GET['action']!='forgot.php' && $_GET['action']!='loginForm.php')
	{
		require_once 'actions/list.php';
		errorMessage('You have to be logged in to execute this action');
	}
	else
	{
		set_include_path(get_include_path() . PATH_SEPARATOR . 'actions/');
		require_once $_GET['action'];
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
?>
<div id="main">
<?php
if (isset($_SESSION['success']) && is_array($_SESSION['success']) && count($_SESSION['success'])) //errors
{
    foreach($_SESSION['success'] as $successMessage):
?>
        <div class="success"><?=$successMessage?></div>
<?php
    endforeach;
    echo "<br/>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error']) && is_array($_SESSION['error']) && count($_SESSION['error'])) //errors
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
