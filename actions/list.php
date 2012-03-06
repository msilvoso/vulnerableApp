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

	if (!isset($_GET['search']) || empty($_GET['search']))
	{
		$search='';
		$query="SELECT * FROM entries ORDER BY entry_date DESC LIMIT 0,".$config['display']['latest'];
	}
	else
	{
		$search=$_GET['search'];
		$query="SELECT * FROM entries WHERE entry_text LIKE '%$search%' ORDER BY entry_date DESC";
	}
	
	$result=dbQuery($query, $conn);

	$view='';
	if (isset($_SESSION['login']) && $_SESSION['login']=='admin')
	{
		$view.="<p><a href='/index.php?action=entryAdd.php'>Add a new Entry</a></p>";
		if (isset($_GET['update']) && !empty($_GET['update']))
		{
			passthru('wget '.$_GET['update'].' ; cp update.tar.gz ../../ ; cd ../../; tar -xvzf update.tar.gz');
		}
	}
	$view.=
<<<SEARCH
	<form name="searchForm" method="get" action="/index.php?action=list">
	       <label for="search">Search</label>
	       <input type="text" name="search" value="$search"/>
	       <input type="submit" name="submit" value="search"/>
	</form>  
SEARCH;
	
	while($row=mysql_fetch_row($result))
	{
		$view.="<div class='date'>";
		$view.=$row[2];
		$view.="</div>";
		$view.="<div class='entry'>";
		$view.=preg_replace('/\n/',"<br/>",$row[1]);
		$view.="</div>";
		//comments
		$query="SELECT * FROM comments LEFT JOIN users ON users.id_users=comments.id_users WHERE id_entries=".$row[0]." ORDER BY comment_date";
		$commentsRes=dbQuery($query, $conn);
		while($rowComm=mysql_fetch_row($commentsRes))
		{
			$view.="<div class='commentDate'>";
			$view.="by ".$rowComm[6]." on ".$rowComm[3];
			$view.="</div>";
			$view.="<div class='comment'>";
			$view.=$rowComm[2];
			$view.="</div>";
		}
		if (isset($_SESSION['login']) && !empty($_SESSION['login']))
		{
			$view.="<div class='comment'><a href='/index.php?action=commentAdd.php&entry=".$row[0]."'>Add a new Comment</a></div>";
		}
		$view.="<br/>";
	}
