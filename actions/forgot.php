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

    //This file adds a nice blind SQL injection
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']))
    {
        $email=$_POST['email'];
        $query="SELECT * FROM users WHERE email='$email';";

        $result=dbQuery($query, $conn);
        //get result
        if ($row=mysql_fetch_assoc($result))
        {
            /*
                send the password - not relevant in the application
             */
            $view="Email with password sent";
        }
        else
        {
            $view="Email does not exist in the database";
        }
    }
    else
    {
        $view=
<<<FREE
    <form action="/index.php?action=forgot.php" method="post">
        <label for="email">E-mail</label>
        <input type="text" name="email" /><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
FREE;
    }