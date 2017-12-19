<!DOCTYPE html>

<?php

try {
	include('connect.php');
	
//		SumaiL stats
	$sql1 = "SELECT firstName, gamertag, lastName, position, kda, gpm, xpm, winrate FROM PLAYER WHERE playerID = 1";
	
	$stmt1 = $db->prepare($sql1);
	$stmt1->execute();
	
	if($stmt1->rowCount() > 0) {
		$player1Array = $stmt1->fetch(PDO::FETCH_ASSOC);
	} else {
		$player1Array = array('firstName' => "NO DATA", 
							'gamertag' => NULL,
							'lastName' => NULL,
							'position' => NULL,
							'kda' => NULL, 
							'gpm' => NULL,
							 'xpm' => NULL,
							 'winrate' => NULL
							 );
	}
	$stmt1->closeCursor();
	
//		KuroKy stats
	$sql2 = "SELECT firstName, gamertag, lastName, position, kda, gpm, xpm, winrate FROM PLAYER WHERE playerID = 2";
	
	$stmt2 = $db->prepare($sql2);
	$stmt2->execute();
	
	if($stmt2->rowCount() > 0) {
		$player2Array = $stmt2->fetch(PDO::FETCH_ASSOC);
	} else {
		$player2Array = array('firstName' => "NO DATA", 
							'gamertag' => NULL,
							'lastName' => NULL,
							'position' => NULL,
							'kda' => NULL, 
							'gpm' => NULL,
							 'xpm' => NULL,
							 'winrate' => NULL
							 );
	}
	$stmt2->closeCursor();
	
//		Miracle- stats
	$sql3 = "SELECT firstName, gamertag, lastName, position, kda, gpm, xpm, winrate FROM PLAYER WHERE playerID = 3";
	
	$stmt3 = $db->prepare($sql3);
	$stmt3->execute();
	
	if($stmt3->rowCount() > 0) {
		$player3Array = $stmt3->fetch(PDO::FETCH_ASSOC);
	} else {
		$player3Array = array('firstName' => "NO DATA", 
							'gamertag' => NULL,
							'lastName' => NULL,
							'position' => NULL,
							'kda' => NULL, 
							'gpm' => NULL,
							 'xpm' => NULL,
							 'winrate' => NULL
							 );
	}
	$stmt3->closeCursor();
	
	
//		Faith_bian stats
	$sql4 = "SELECT firstName, gamertag, lastName, position, kda, gpm, xpm, winrate FROM PLAYER WHERE playerID = 4";
	
	$stmt4 = $db->prepare($sql4);
	$stmt4->execute();
	
	if($stmt4->rowCount() > 0) {
		$player4Array = $stmt4->fetch(PDO::FETCH_ASSOC);
	} else {
		$player4Array = array('firstName' => "NO DATA", 
							'gamertag' => NULL,
							'lastName' => NULL,
							'position' => NULL,
							'kda' => NULL, 
							'gpm' => NULL,
							 'xpm' => NULL,
							 'winrate' => NULL
							 );
	}
	$stmt4->closeCursor();
	
//		RAMZES666 stats
	$sql5 = "SELECT firstName, gamertag, lastName, position, kda, gpm, xpm, winrate FROM PLAYER WHERE playerID = 5";
	
	$stmt5 = $db->prepare($sql5);
	$stmt5->execute();
	
	if($stmt5->rowCount() > 0) {
		$player5Array = $stmt5->fetch(PDO::FETCH_ASSOC);
	} else {
		$player5Array = array('firstName' => "NO DATA", 
							'gamertag' => NULL,
							'lastName' => NULL,
							'position' => NULL,
							'kda' => NULL, 
							'gpm' => NULL,
							 'xpm' => NULL,
							 'winrate' => NULL
							 );
	}
	$stmt5->closeCursor();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beautipul Doto!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/apps/570/0bbb630d63262dd66d2fdd0f7d37e8661a410075.jpg"/>
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style type="text/css">
		
		/* Create asymetrical columns that floats next to each other */
		.columnL {
			float: left;
			width: 30%;
			padding: 10px;
			height: 1000px;
		}
		.columnR {
			float: left;
			width: 70%;
			padding: 10px;
			height: 1000px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Beautipul Doto
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="games.php">Games</a>
                </li>
                <li>
                    <a href="players.php">Players</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="background-color:#aaa">
            <div class="container-fluid"><img src="img/AegisOfChampions.png" style="float:right;width:20%;height:auto;"/>	
                <h1>Players</h1>
                <p>This is where you can see how your favorite Dota pros are doing this year.</p><br>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                <br><br>
                
                <div class="row">
                	
                	<!-- Left column -->
                	<div class="columnL">
						<h2>Featured players</h2>
						<button type="button" class="btn btn-default" id="OGvsFnatic" onClick="function1()">Sumail</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="TKvsVP" onClick="function2()">KuroKy</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="TKvsVP" onClick="function3()">Miracle-</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="TKvsVP" onClick="function4()">Faith_bian</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="TKvsVP" onClick="function5()">RAMZES666</button>
						<br/><br/>
					</div>

					<!-- Right column -->
					<div class="columnR">
					
					<h2>2018 Season</h2>
					<table class="table table-bordered">
							<thead style="font-weight:bold">
								<tr>
									<td>First Name</td>
									<td>GamerTag</td>
									<td>Last Name</td>
									<td>Position</td>
									<td>KDA average</td>
									<td>GPM average</td>
									<td>XPM average</td>
									<td>Winrate</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="firstName">&nbsp;</td>
									<td id="gamertag">&nbsp;</td>
									<td id="lastName">&nbsp;</td>
									<td id="position">&nbsp;</td>
									<td id="kda">&nbsp;</td>
									<td id="gpm">&nbsp;</td>
									<td id="xpm">&nbsp;</td>
									<td id="winrate">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					
					</div>
				</div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
		
		function function1() {
			document.getElementById("firstName").innerHTML="<?php echo $player1Array["firstName"]; ?>";
			document.getElementById("gamertag").innerHTML="<i><?php echo $player1Array["gamertag"]; ?></i>";
			document.getElementById("lastName").innerHTML="<?php echo $player1Array["lastName"]; ?>";
			document.getElementById("position").innerHTML="<?php echo $player1Array["position"]; ?>";
			document.getElementById("kda").innerHTML="<?php echo $player1Array["kda"]; ?>";
			document.getElementById("gpm").innerHTML="<?php echo $player1Array["gpm"]; ?>";
			document.getElementById("xpm").innerHTML="<?php echo $player1Array["xpm"]; ?>";
			document.getElementById("winrate").innerHTML="<?php echo $player1Array["winrate"]; ?>";
		}
		
		function function2() {
			document.getElementById("firstName").innerHTML="<?php echo $player2Array["firstName"]; ?>";
			document.getElementById("gamertag").innerHTML="<i><?php echo $player2Array["gamertag"]; ?></i>";
			document.getElementById("lastName").innerHTML="<?php echo $player2Array["lastName"]; ?>";
			document.getElementById("position").innerHTML="<?php echo $player2Array["position"]; ?>";
			document.getElementById("kda").innerHTML="<?php echo $player2Array["kda"]; ?>";
			document.getElementById("gpm").innerHTML="<?php echo $player2Array["gpm"]; ?>";
			document.getElementById("xpm").innerHTML="<?php echo $player2Array["xpm"]; ?>";
			document.getElementById("winrate").innerHTML="<?php echo $player2Array["winrate"]; ?>";
		}
		
		function function3() {
			document.getElementById("firstName").innerHTML="<?php echo $player3Array["firstName"]; ?>";
			document.getElementById("gamertag").innerHTML="<i><?php echo $player3Array["gamertag"]; ?></i>";
			document.getElementById("lastName").innerHTML="<?php echo $player3Array["lastName"]; ?>";
			document.getElementById("position").innerHTML="<?php echo $player3Array["position"]; ?>";
			document.getElementById("kda").innerHTML="<?php echo $player3Array["kda"]; ?>";
			document.getElementById("gpm").innerHTML="<?php echo $player3Array["gpm"]; ?>";
			document.getElementById("xpm").innerHTML="<?php echo $player3Array["xpm"]; ?>";
			document.getElementById("winrate").innerHTML="<?php echo $player3Array["winrate"]; ?>";
		}
		
		function function4() {
			document.getElementById("firstName").innerHTML="<?php echo $player4Array["firstName"]; ?>";
			document.getElementById("gamertag").innerHTML="<i><?php echo $player4Array["gamertag"]; ?></i>";
			document.getElementById("lastName").innerHTML="<?php echo $player4Array["lastName"]; ?>";
			document.getElementById("position").innerHTML="<?php echo $player4Array["position"]; ?>";
			document.getElementById("kda").innerHTML="<?php echo $player4Array["kda"]; ?>";
			document.getElementById("gpm").innerHTML="<?php echo $player4Array["gpm"]; ?>";
			document.getElementById("xpm").innerHTML="<?php echo $player4Array["xpm"]; ?>";
			document.getElementById("winrate").innerHTML="<?php echo $player4Array["winrate"]; ?>";
		}
		
		function function5() {
			document.getElementById("firstName").innerHTML="<?php echo $player5Array["firstName"]; ?>";
			document.getElementById("gamertag").innerHTML="<i><?php echo $player5Array["gamertag"]; ?></i>";
			document.getElementById("lastName").innerHTML="<?php echo $player5Array["lastName"]; ?>";
			document.getElementById("position").innerHTML="<?php echo $player5Array["position"]; ?>";
			document.getElementById("kda").innerHTML="<?php echo $player5Array["kda"]; ?>";
			document.getElementById("gpm").innerHTML="<?php echo $player5Array["gpm"]; ?>";
			document.getElementById("xpm").innerHTML="<?php echo $player5Array["xpm"]; ?>";
			document.getElementById("winrate").innerHTML="<?php echo $player5Array["winrate"]; ?>";
		}
    </script>
    <?php
	}
	catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}	
	?>

</body>

</html>
</html>