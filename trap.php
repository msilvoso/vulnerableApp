
<html>

<head>

<title>PHP Trap</title>

</head>

<body>

<h1>#1 Float Around - taken from tdhack.com - Challenge Net 26</h1>

<form method="post">

Solution: <input type="text" name="solution"/><br/>

<input type="submit" value="Solve it!"/>

</form>



<code><span style="color: #000000">

<span style="color: #0000BB">&lt;?&nbsp;$solution</span><span style="color: #007700">=((</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'solution'</span><span style="color: #007700">]*</span><span style="color: #0000BB">1337</span><span style="color: #007700">)+</span><span style="color: #0000BB">1.7</span><span style="color: #007700">);</span><span style="color: #0000BB">$solution</span><span style="color: #007700">=!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^0-9]/'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">.</span><span style="color: #0000BB">$solution</span><span style="color: #007700">)?(int)</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$solution</span><span style="color: #007700">)-</span><span style="color: #0000BB">33</span><span style="color: #007700">:</span><span style="color: #0000BB">1337</span><span style="color: #007700">;if(</span><span style="color: #0000BB">$solution</span><span style="color: #007700">==</span><span style="color: #DD0000">'float'</span><span style="color: #007700">)</span><span style="color: #0000BB">solve</span><span style="color: #007700">();&nbsp;</span><span style="color: #0000BB">?&gt;</span>

<?php
// the dangers of type juggling
function solve()
{
    echo "<h1>Success!!</h1>";
}
if (isset($_POST['solution'])) {
    $solution=(($_POST['solution']*1337)+1.7);$solution=!preg_match('/[^0-9]/',''.$solution)?(int)round($solution)-33:1337;if($solution=='float')solve();
}
?>
</span>

</code>

</body>

</html>
