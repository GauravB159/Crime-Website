<html>
<head><title>Trial</title>
<link rel="stylesheet" type="text/css" href="searchL.css">
<link href="https://fonts.googleapis.com/css?family=Allerta|Nunito" rel="stylesheet">
</head>
<body>
 <div class="navbar">
    <ul>
      <li><a id="active" href="#">Home</a></li>
      <li><a href="#">Criminal Records</a></li>
      <li><a href="#">Jail Map</a></li>
      <li style="float:right"><a href="log.html">Login</a></li>
      <li style="float:right"><a href="reg.html">Register</a></li>
    </ul>
  </div>
<?php
	echo "<p id='res'>2 search results found</p>";
	echo "<table>";
	echo "<thead>";
	echo "<th class='search pad'>Photo</td>
              <th class='search pad'>Name</td>
              <th class='search pad'>Crime Type</td>
              <th class='search pad'>Sentence</td>
             </thead>"; 
	for($i=0;$i<3;$i++)
	{
          echo "<tr>
          	<td class='search'><img src='avatar.png' align='middle'/></td>
                <td class='search pad'>Anonymous</td>
                <td class='search pad'>Hacking</td>
                <td class='search pad'>5 Years</td>
                </tr>";             		
	}
	echo "</table>";
?>
</body>
</html>
