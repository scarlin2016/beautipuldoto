<!DOCTYPE html>

<?php

try {
	include('connect.php');
	
	$sql1 = "SELECT matchID, result, length, direScore, radiantScore, version FROM GAMES WHERE matchID = (SELECT MAX(matchID) AS recentGame FROM GAMES);";
	
	$sql2 = " SELECT 	
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
		FROM PLAYER_GAME_LIST WHERE listID=(SELECT MAX(matchID) AS recentGame FROM GAMES);
	";
	

	$stmt1 = $db->prepare($sql1);
	$stmt1->execute();
	
	if($stmt1->rowCount() > 0) {
		$resultArray = $stmt1->fetch(PDO::FETCH_ASSOC);
	} else {
		$resultArray = array('matchID' => "NO DATA", 
							'result' => NULL,
							'length' => NULL,
							'direScore' => NULL,
							'radiantScore' => NULL, 
							'version' => NULL);
	}
	$stmt1->closeCursor();
	
	$stmt2 = $db->prepare($sql2);
	$stmt2->execute();
	
	if($stmt2->rowCount() > 0) {
		$playerArray = $stmt2->fetch(PDO::FETCH_ASSOC);
	} else {
		$playerArray = array('direPlayer1' => NULL,
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
	$stmt2->closeCursor();

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
        <div id="page-content-wrapper" style="background-color:#aaa;height:1000px;">
            <div class="container-fluid"><img style="float:right;width:20%;height:auto;" src="img/Dota_2_Logo.png"/>	
                <h1>Beautipul Doto</h1>
                <p>Your first choice in professional Dota 2 statistics.</p>
                <p>Open the menu below to begin.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                <br><br>
                <h2>Most Recent Game</h2>
                <table class="table table-bordered" style="width:60%;height:auto;align-content:center;">
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
							<td id="matchID"><?php echo $resultArray["matchID"]; ?></td>
							<td id="result"><?php echo $resultArray["result"] == 0 ? "Dire Victory" : "Radiant Victory"; ?></td>
							<td id="length"><?php echo $resultArray["length"]; ?></td>
							<td id="direScore"><?php echo $resultArray["direScore"]; ?></td>
							<td id="radiantScore"><?php echo $resultArray["radiantScore"]; ?></td>
							<td id="version"><?php echo $resultArray["version"]; ?></td>
						</tr>
					</tbody>
                </table>
                <br>
                <h2>Teams</h2><img src="img/ti7.jpg" style="float:right;width:20%;height:auto;"/>
                <!-- I know, I know. But this is the easiest way to make whitespace. -->
				<p style="margin-left:20px;">Radiant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dire</p>
               
                <table class="table table-bordered" style="width:60%;height:auto;align-content:center;">
                	<thead style="font-weight:bold">
                		<tr>
                			<td><?php echo $playerArray["radiantTeam"]; ?></td>
                			<td><?php echo $playerArray["direTeam"] ;?></td>
                		</tr>
                	</thead>
                	<tbody>
                		<tr>
                			<td><?php echo $playerArray["radiantPlayer1"]; ?></td>
                			<td><?php echo $playerArray["direPlayer1"]; ?></td>
                		</tr>
                		<tr>
                			<td><?php echo $playerArray["radiantPlayer2"]; ?></td>
                			<td><?php echo $playerArray["direPlayer2"]; ?></td>
                		</tr>
                		<tr>
                			<td><?php echo $playerArray["radiantPlayer3"]; ?></td>
                			<td><?php echo $playerArray["direPlayer3"]; ?></td>
                		</tr>
                		<tr>
                			<td><?php echo $playerArray["radiantPlayer4"]; ?></td>
                			<td><?php echo $playerArray["direPlayer4"]; ?></td>
                		</tr>
                		<tr>
                			<td><?php echo $playerArray["radiantPlayer5"]; ?></td>
                			<td><?php echo $playerArray["direPlayer5"]; ?></td>
                		</tr>
                	</tbody>
                </table>
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
    </script>
    
   	<script>
		if (<?php echo $resultArray["result"] ?> == 0){
			document.getElementById("result").innerHTML="Dire Victory";
		} else {
			document.getElementById("result").innerHTML="Radiant Victory";
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