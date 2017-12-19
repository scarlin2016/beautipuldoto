<!DOCTYPE html>

<?php

try {
	include('connect.php');
	
//		OG vs Fnatic queries
	$sql1a = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = 1;";
	
	$sql1b = " SELECT 	
			direPlayer1, 
			direPlayer2, 
			direPlayer3, 
			direPlayer4, 
			direPlayer5, 
			radiantPlayer1, 
			radiantPlayer2, 
			radiantPlayer3,
			radiantPlayer4,
			radiantPlayer5,
			direTeam,
			radiantTeam
		FROM PLAYER_GAME_LIST WHERE listID = 1;
	";
	

	$stmt1a = $db->prepare($sql1a);
	$stmt1a->execute();
	
	if($stmt1a->rowCount() > 0) {
		$resultArray1 = $stmt1a->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray1 = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt1a->closeCursor();
	
	$stmt1b = $db->prepare($sql1b);
	$stmt1b->execute();
	
	if($stmt1b->rowCount() > 0) {
		$playerArray1 = $stmt1b->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray1 = array('direPlayer1' => NULL,
							'direPlayer2' => NULL,
							'direPlayer3' => NULL,
							'direPlayer4' => NULL,
							'direPlayer5' => NULL,
							'radiantPlayer1' => NULL,
							'radiantPlayer2' => NULL,
							'radiantPlayer3' => NULL,
							'radiantPlayer4' => NULL,
							'radiantPlayer5' => NULL,
							 'direTeam' => NULL,
							 'radiantTeam' => NULL
							);
	}
	$stmt1b->closeCursor();

//		Team Kinguin vs Virtus Pro queries
	$sql2a = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = 2;";
	
	$sql2b = " SELECT 	
			direPlayer1, 
			direPlayer2, 
			direPlayer3, 
			direPlayer4, 
			direPlayer5, 
			radiantPlayer1, 
			radiantPlayer2, 
			radiantPlayer3,
			radiantPlayer4,
			radiantPlayer5,
			direTeam,
			radiantTeam
		FROM PLAYER_GAME_LIST WHERE listID = 2;
	";
	

	$stmt2a = $db->prepare($sql2a);
	$stmt2a->execute();
	
	if($stmt2a->rowCount() > 0) {
		$resultArray2 = $stmt2a->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray2 = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt2a->closeCursor();
	
	$stmt2b = $db->prepare($sql2b);
	$stmt2b->execute();
	
	if($stmt2b->rowCount() > 0) {
		$playerArray2 = $stmt2b->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray2 = array('direPlayer1' => NULL,
							'direPlayer2' => NULL,
							'direPlayer3' => NULL,
							'direPlayer4' => NULL,
							'direPlayer5' => NULL,
							'radiantPlayer1' => NULL,
							'radiantPlayer2' => NULL,
							'radiantPlayer3' => NULL,
							'radiantPlayer4' => NULL,
							'radiantPlayer5' => NULL,
							 'direTeam' => NULL,
							 'radiantTeam' => NULL
							);
	}
	$stmt2b->closeCursor();
	
//		Virtus Pro vs Fnatic queries
	$sql3a = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = 3;";
	
	$sql3b = " SELECT 	
			direPlayer1, 
			direPlayer2, 
			direPlayer3, 
			direPlayer4, 
			direPlayer5, 
			radiantPlayer1, 
			radiantPlayer2, 
			radiantPlayer3,
			radiantPlayer4,
			radiantPlayer5,
			direTeam,
			radiantTeam
		FROM PLAYER_GAME_LIST WHERE listID = 3;
	";
	

	$stmt3a = $db->prepare($sql3a);
	$stmt3a->execute();
	
	if($stmt3a->rowCount() > 0) {
		$resultArray3 = $stmt3a->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray3 = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt3a->closeCursor();
	
	$stmt3b = $db->prepare($sql3b);
	$stmt3b->execute();
	
	if($stmt3b->rowCount() > 0) {
		$playerArray3 = $stmt3b->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray3 = array('direPlayer1' => NULL,
							'direPlayer2' => NULL,
							'direPlayer3' => NULL,
							'direPlayer4' => NULL,
							'direPlayer5' => NULL,
							'radiantPlayer1' => NULL,
							'radiantPlayer2' => NULL,
							'radiantPlayer3' => NULL,
							'radiantPlayer4' => NULL,
							'radiantPlayer5' => NULL,
							 'direTeam' => NULL,
							 'radiantTeam' => NULL
							);
	}
	$stmt3b->closeCursor();
	
//		OG vs compLexity queries
	$sql4a = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = 4;";
	
	$sql4b = " SELECT 	
			direPlayer1, 
			direPlayer2, 
			direPlayer3, 
			direPlayer4, 
			direPlayer5, 
			radiantPlayer1, 
			radiantPlayer2, 
			radiantPlayer3,
			radiantPlayer4,
			radiantPlayer5,
			direTeam,
			radiantTeam
		FROM PLAYER_GAME_LIST WHERE listID = 4;
	";
	

	$stmt4a = $db->prepare($sql4a);
	$stmt4a->execute();
	
	if($stmt4a->rowCount() > 0) {
		$resultArray4 = $stmt4a->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray4 = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt4a->closeCursor();
	
	$stmt4b = $db->prepare($sql4b);
	$stmt4b->execute();
	
	if($stmt4b->rowCount() > 0) {
		$playerArray4 = $stmt4b->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray4 = array('direPlayer1' => NULL,
							'direPlayer2' => NULL,
							'direPlayer3' => NULL,
							'direPlayer4' => NULL,
							'direPlayer5' => NULL,
							'radiantPlayer1' => NULL,
							'radiantPlayer2' => NULL,
							'radiantPlayer3' => NULL,
							'radiantPlayer4' => NULL,
							'radiantPlayer5' => NULL,
							 'direTeam' => NULL,
							 'radiantTeam' => NULL
							);
	}
	$stmt4b->closeCursor();
	
//		CDEC vs EHOME queries
	$sql5a = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = 5;";
	
	$sql5b = " SELECT 	
			direPlayer1, 
			direPlayer2, 
			direPlayer3, 
			direPlayer4, 
			direPlayer5, 
			radiantPlayer1, 
			radiantPlayer2, 
			radiantPlayer3,
			radiantPlayer4,
			radiantPlayer5,
			direTeam,
			radiantTeam
		FROM PLAYER_GAME_LIST WHERE listID = 5;
	";
	

	$stmt5a = $db->prepare($sql5a);
	$stmt5a->execute();
	
	if($stmt5a->rowCount() > 0) {
		$resultArray5 = $stmt5a->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray5 = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt5a->closeCursor();
	
	$stmt5b = $db->prepare($sql5b);
	$stmt5b->execute();
	
	if($stmt5b->rowCount() > 0) {
		$playerArray5 = $stmt5b->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray5 = array('direPlayer1' => NULL,
							'direPlayer2' => NULL,
							'direPlayer3' => NULL,
							'direPlayer4' => NULL,
							'direPlayer5' => NULL,
							'radiantPlayer1' => NULL,
							'radiantPlayer2' => NULL,
							'radiantPlayer3' => NULL,
							'radiantPlayer4' => NULL,
							'radiantPlayer5' => NULL,
							 'direTeam' => NULL,
							 'radiantTeam' => NULL
							);
	}
	$stmt5b->closeCursor();
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
                <h1>Games</h1>
                <p>From here, you may select from a list of the most recent professional games to view their details.</p><br>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                <br><br>
                
                <div class="row">
                	
                	<!-- Left column -->
                	<div class="columnL">
						<h2>All Recent Games</h2>
						<button type="button" class="btn btn-default" id="OGvsFnatic" onClick="function1()">OG vs. Fnatic</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="TKvsVP" onClick="function2()">Team Kinguin vs. Virtus Pro</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="VPvsFnatic" onClick="function3()">Virtus Pro vs. Fnatic</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="OGvsCol" onClick="function4()">OG vs. compLexity Gaming</button>
						<br/><br/>
						<button type="button" class="btn btn-default" id="CDECvsEHOME" onClick="function5()">CDEC Gaming vs. EHOME</button>
						<br/><br/>
					</div>

					<!-- Right column -->
					<div class="columnR">
					
					<h2>Match Results</h2>
					<table class="table table-bordered">
							<thead style="font-weight:bold">
								<tr>
									<td>Match ID</td>
									<td>Result</td>
									<td>Game Length</td>
									<td>Dire Score</td>
									<td>Radiant Score</td>
									<td>Game Version</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="matchID">&nbsp;</td>
									<td id="result">&nbsp;</td>
									<td id="length">&nbsp;</td>
									<td id="direScore">&nbsp;</td>
									<td id="radiantScore">&nbsp;</td>
									<td id="version">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						
						<h2>Teams</h2>
						<table class="table table-bordered">
							<thead style="font-weight:bold">
								<tr>
									<td>Position</td>
									<td id="radiantTeam">&nbsp;</td>
									<td id="direTeam">&nbsp;</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Carry</td>
									<td id="radiantPlayer1">&nbsp;</td>
									<td id="direPlayer1">&nbsp;</td>
								</tr>
								<tr>
									<td>Mid</td>
									<td id="radiantPlayer2">&nbsp;</td>
									<td id="direPlayer2">&nbsp;</td>
								</tr>
								<tr>
									<td>Offlane</td>
									<td id="radiantPlayer3">&nbsp;</td>
									<td id="direPlayer3">&nbsp;</td>
								</tr>
								<tr>
									<td>Semi-support</td>
									<td id="radiantPlayer4">&nbsp;</td>
									<td id="direPlayer4">&nbsp;</td>
								</tr>
								<tr>
									<td>Hard support</td>
									<td id="radiantPlayer5">&nbsp;</td>
									<td id="direPlayer5">&nbsp;</td>
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
			document.getElementById("matchID").innerHTML="<?php echo $resultArray1["matchID"]; ?>";
			document.getElementById("result").innerHTML="<?php echo $resultArray1["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?>";
			document.getElementById("length").innerHTML="<?php echo $resultArray1["length"]; ?>";
			document.getElementById("direScore").innerHTML="<?php echo $resultArray1["direScore"]; ?>";
			document.getElementById("radiantScore").innerHTML="<?php echo $resultArray1["radiantScore"]; ?>";
			document.getElementById("version").innerHTML="<?php echo $resultArray1["version"]; ?>";
			
			document.getElementById("radiantPlayer1").innerHTML="<?php echo $playerArray1["radiantPlayer1"]; ?>";
			document.getElementById("radiantPlayer2").innerHTML="<?php echo $playerArray1["radiantPlayer2"]; ?>";
			document.getElementById("radiantPlayer3").innerHTML="<?php echo $playerArray1["radiantPlayer3"]; ?>";
			document.getElementById("radiantPlayer4").innerHTML="<?php echo $playerArray1["radiantPlayer4"]; ?>";
			document.getElementById("radiantPlayer5").innerHTML="<?php echo $playerArray1["radiantPlayer5"]; ?>";
			document.getElementById("direPlayer1").innerHTML="<?php echo $playerArray1["direPlayer1"]; ?>";
			document.getElementById("direPlayer2").innerHTML="<?php echo $playerArray1["direPlayer2"]; ?>";
			document.getElementById("direPlayer3").innerHTML="<?php echo $playerArray1["direPlayer3"]; ?>";
			document.getElementById("direPlayer4").innerHTML="<?php echo $playerArray1["direPlayer4"]; ?>";
			document.getElementById("direPlayer5").innerHTML="<?php echo $playerArray1["direPlayer5"]; ?>";
			document.getElementById("direTeam").innerHTML="<?php echo $playerArray1["direTeam"]; ?>";
			document.getElementById("radiantTeam").innerHTML="<?php echo $playerArray1["radiantTeam"]; ?>";
		}
		
		function function2() {
			document.getElementById("matchID").innerHTML="<?php echo $resultArray2["matchID"]; ?>";
			document.getElementById("result").innerHTML="<?php echo $resultArray2["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?>";
			document.getElementById("length").innerHTML="<?php echo $resultArray2["length"]; ?>";
			document.getElementById("direScore").innerHTML="<?php echo $resultArray2["direScore"]; ?>";
			document.getElementById("radiantScore").innerHTML="<?php echo $resultArray2["radiantScore"]; ?>";
			document.getElementById("version").innerHTML="<?php echo $resultArray2["version"]; ?>";
			
			document.getElementById("radiantPlayer1").innerHTML="<?php echo $playerArray2["radiantPlayer1"]; ?>";
			document.getElementById("radiantPlayer2").innerHTML="<?php echo $playerArray2["radiantPlayer2"]; ?>";
			document.getElementById("radiantPlayer3").innerHTML="<?php echo $playerArray2["radiantPlayer3"]; ?>";
			document.getElementById("radiantPlayer4").innerHTML="<?php echo $playerArray2["radiantPlayer4"]; ?>";
			document.getElementById("radiantPlayer5").innerHTML="<?php echo $playerArray2["radiantPlayer5"]; ?>";
			document.getElementById("direPlayer1").innerHTML="<?php echo $playerArray2["direPlayer1"]; ?>";
			document.getElementById("direPlayer2").innerHTML="<?php echo $playerArray2["direPlayer2"]; ?>";
			document.getElementById("direPlayer3").innerHTML="<?php echo $playerArray2["direPlayer3"]; ?>";
			document.getElementById("direPlayer4").innerHTML="<?php echo $playerArray2["direPlayer4"]; ?>";
			document.getElementById("direPlayer5").innerHTML="<?php echo $playerArray2["direPlayer5"]; ?>";
			document.getElementById("direTeam").innerHTML="<?php echo $playerArray2["direTeam"]; ?>";
			document.getElementById("radiantTeam").innerHTML="<?php echo $playerArray2["radiantTeam"]; ?>";
		}
		
		function function3() {
			document.getElementById("matchID").innerHTML="<?php echo $resultArray3["matchID"]; ?>";
			document.getElementById("result").innerHTML="<?php echo $resultArray3["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?>";
			document.getElementById("length").innerHTML="<?php echo $resultArray3["length"]; ?>";
			document.getElementById("direScore").innerHTML="<?php echo $resultArray3["direScore"]; ?>";
			document.getElementById("radiantScore").innerHTML="<?php echo $resultArray3["radiantScore"]; ?>";
			document.getElementById("version").innerHTML="<?php echo $resultArray3["version"]; ?>";
			
			document.getElementById("radiantPlayer1").innerHTML="<?php echo $playerArray3["radiantPlayer1"]; ?>";
			document.getElementById("radiantPlayer2").innerHTML="<?php echo $playerArray3["radiantPlayer2"]; ?>";
			document.getElementById("radiantPlayer3").innerHTML="<?php echo $playerArray3["radiantPlayer3"]; ?>";
			document.getElementById("radiantPlayer4").innerHTML="<?php echo $playerArray3["radiantPlayer4"]; ?>";
			document.getElementById("radiantPlayer5").innerHTML="<?php echo $playerArray3["radiantPlayer5"]; ?>";
			document.getElementById("direPlayer1").innerHTML="<?php echo $playerArray3["direPlayer1"]; ?>";
			document.getElementById("direPlayer2").innerHTML="<?php echo $playerArray3["direPlayer2"]; ?>";
			document.getElementById("direPlayer3").innerHTML="<?php echo $playerArray3["direPlayer3"]; ?>";
			document.getElementById("direPlayer4").innerHTML="<?php echo $playerArray3["direPlayer4"]; ?>";
			document.getElementById("direPlayer5").innerHTML="<?php echo $playerArray3["direPlayer5"]; ?>";
			document.getElementById("direTeam").innerHTML="<?php echo $playerArray3["direTeam"]; ?>";
			document.getElementById("radiantTeam").innerHTML="<?php echo $playerArray3["radiantTeam"]; ?>";
		}
		
		function function4() {
			document.getElementById("matchID").innerHTML="<?php echo $resultArray4["matchID"]; ?>";
			document.getElementById("result").innerHTML="<?php echo $resultArray4["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?>";
			document.getElementById("length").innerHTML="<?php echo $resultArray4["length"]; ?>";
			document.getElementById("direScore").innerHTML="<?php echo $resultArray4["direScore"]; ?>";
			document.getElementById("radiantScore").innerHTML="<?php echo $resultArray4["radiantScore"]; ?>";
			document.getElementById("version").innerHTML="<?php echo $resultArray4["version"]; ?>";
			
			document.getElementById("radiantPlayer1").innerHTML="<?php echo $playerArray4["radiantPlayer1"]; ?>";
			document.getElementById("radiantPlayer2").innerHTML="<?php echo $playerArray4["radiantPlayer2"]; ?>";
			document.getElementById("radiantPlayer3").innerHTML="<?php echo $playerArray4["radiantPlayer3"]; ?>";
			document.getElementById("radiantPlayer4").innerHTML="<?php echo $playerArray4["radiantPlayer4"]; ?>";
			document.getElementById("radiantPlayer5").innerHTML="<?php echo $playerArray4["radiantPlayer5"]; ?>";
			document.getElementById("direPlayer1").innerHTML="<?php echo $playerArray4["direPlayer1"]; ?>";
			document.getElementById("direPlayer2").innerHTML="<?php echo $playerArray4["direPlayer2"]; ?>";
			document.getElementById("direPlayer3").innerHTML="<?php echo $playerArray4["direPlayer3"]; ?>";
			document.getElementById("direPlayer4").innerHTML="<?php echo $playerArray4["direPlayer4"]; ?>";
			document.getElementById("direPlayer5").innerHTML="<?php echo $playerArray4["direPlayer5"]; ?>";
			document.getElementById("direTeam").innerHTML="<?php echo $playerArray4["direTeam"]; ?>";
			document.getElementById("radiantTeam").innerHTML="<?php echo $playerArray4["radiantTeam"]; ?>";
		}
		
		function function5() {
			document.getElementById("matchID").innerHTML="<?php echo $resultArray5["matchID"]; ?>";
			document.getElementById("result").innerHTML="<?php echo $resultArray5["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?>";
			document.getElementById("length").innerHTML="<?php echo $resultArray5["length"]; ?>";
			document.getElementById("direScore").innerHTML="<?php echo $resultArray5["direScore"]; ?>";
			document.getElementById("radiantScore").innerHTML="<?php echo $resultArray5["radiantScore"]; ?>";
			document.getElementById("version").innerHTML="<?php echo $resultArray5["version"]; ?>";
			
			document.getElementById("radiantPlayer1").innerHTML="<?php echo $playerArray5["radiantPlayer1"]; ?>";
			document.getElementById("radiantPlayer2").innerHTML="<?php echo $playerArray5["radiantPlayer2"]; ?>";
			document.getElementById("radiantPlayer3").innerHTML="<?php echo $playerArray5["radiantPlayer3"]; ?>";
			document.getElementById("radiantPlayer4").innerHTML="<?php echo $playerArray5["radiantPlayer4"]; ?>";
			document.getElementById("radiantPlayer5").innerHTML="<?php echo $playerArray5["radiantPlayer5"]; ?>";
			document.getElementById("direPlayer1").innerHTML="<?php echo $playerArray5["direPlayer1"]; ?>";
			document.getElementById("direPlayer2").innerHTML="<?php echo $playerArray5["direPlayer2"]; ?>";
			document.getElementById("direPlayer3").innerHTML="<?php echo $playerArray5["direPlayer3"]; ?>";
			document.getElementById("direPlayer4").innerHTML="<?php echo $playerArray5["direPlayer4"]; ?>";
			document.getElementById("direPlayer5").innerHTML="<?php echo $playerArray5["direPlayer5"]; ?>";
			document.getElementById("direTeam").innerHTML="<?php echo $playerArray5["direTeam"]; ?>";
			document.getElementById("radiantTeam").innerHTML="<?php echo $playerArray5["radiantTeam"]; ?>";
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
