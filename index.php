<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	<h1 class="center">EMS Express DBMS</h1>
	<div class="container">
		<form name="myform" method = POST>
			<div class="row">
				<div class="col-25">
					<label for="fname">Search method</label>
				</div>
				<div class="col-75">
					<select name="SearchOption" onchange="myform.submit()">
						<option value= 0>Choose search way: </option>
						<option value= 1>SQL Search (INSERT)</option>     
						<option value= 2>SQL Search (SELECT)</option>
						<option value= 3>SQL Search (DELETE)</option>
						<option value= 4>SQL Search (UPDATE)</option>
						<option value= 5>Buttom Search (sender)</option>
						<option value= 6>Buttom Search (receiver)</option>
						<option value= 7>Buttom Search (staff)</option>
						<option value= 8>Buttom Search (product)</option>
						<option value= 9>Buttom Search (expressForm)</option>
					</select>
				</div>
			</div>
		</form>
	</div>

	<?php
	$selectOption = $_POST['SearchOption'];

	if ($selectOption == 1 || $selectOption == 2 || $selectOption == 3 || $selectOption == 4) {
		echo '<div class="container">';
		echo '<form method = POST>';
		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">Input</label>';
		echo '</div>';
		echo '<div class="col-75">';
		if ($selectOption == 1) {
			echo '<textarea id="subject" name="iSQL" placeholder="Write something.." style="height:200px"></textarea>';
		} elseif ($selectOption == 2) {
			echo '<textarea id="subject" name="sSQL" placeholder="Write something.." style="height:200px"></textarea>';
		} elseif ($selectOption == 3) {
			echo '<textarea id="subject" name="dSQL" placeholder="Write something.." style="height:200px"></textarea>';
		} elseif ($selectOption == 4) {
			echo '<textarea id="subject" name="uSQL" placeholder="Write something.." style="height:200px"></textarea>';
		}
		echo '</div>';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" value="Submit">';
		echo '</div>';
		echo '</form>';
		echo '</div>';

	} elseif ($selectOption == 5) {
		echo '<div class="container">';
		echo '<form method = POST>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">sdID</label>';
		echo '</div>';

		// echo '<div class="col-25">';
		// echo '<select name="sdIDoperator">';
		// echo '<option value= 0>=</option>';
		// echo '<option value= 1>IN</option>';
		// echo '<option value= 2>NOT IN</option>';
		// echo '</select>';
		// echo '</div>';

		echo '<div class="col-75">';
		echo '<textarea id="subject" name="sdID" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">sdName</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="sdName" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">sdTel</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="sdTel" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">sdPostalCode</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="sdPostalCode" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row">';
		echo '<input type="submit" name="sdSearch" value="search">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="sdInsert" value="insert">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="sdDelete" value="delete">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="sdUpdate" value="update">';
		echo '</div>';						
		echo '</form>';
		echo '</div>';
		echo "<h3>Note: If you want to delete a record, please type into sdID only!</h3>";

	} elseif ($selectOption == 6) {
		echo '<div class="container">';
		echo '<form method = POST>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">rcID</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="rcID" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">rcName</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="rcName" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">rcTel</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="rcTel" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">rcPostalCode</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="rcPostalCode" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row">';
		echo '<input type="submit" name="rcSearch" value="search">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="rcInsert" value="insert">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="rcDelete" value="delete">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="rcUpdate" value="update">';
		echo '</div>';			
		echo '</form>';
		echo '</div>';
		echo "<h3>Note: If you want to delete a record, please type into sdID only!</h3>";

	} elseif ($selectOption == 7) {
		echo '<div class="container">';
		echo '<form method = POST>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">stID</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="stID" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">stName</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="stName" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">stTel</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="stTel" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row">';
		echo '<input type="submit" name="stSearch" value="search">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="stInsert" value="insert">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="stDelete" value="delete">';
		echo '</div>';	
		echo '<div class="row">';
		echo '<input type="submit" name="stUpdate" value="update">';
		echo '</div>';					
		echo '</form>';
		echo '</div>';	
		echo "<h3>Note: If you want to delete a record, please type into sdID only!</h3>";

	} elseif ($selectOption == 8) {
		echo '<div class="container">';
		echo '<form method = POST>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">pdNo</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="pdNo" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">efSerialNo</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="efSerialNo" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">pdType</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="pdType" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">pdContent</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="pdContent" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">pdValue</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="pdValue" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">pdWeight</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="pdWeight" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<input type="submit" name="pdSearch" value="search">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="pdInsert" value="insert">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="pdDelete" value="delete">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="pdUpdate" value="update">';
		echo '</div>';
		echo '</form>';
		echo '</div>';	
		echo "<h3>Note: If you want to delete a record, please type into sdID only!</h3>";

	} elseif ($selectOption == 9) {
		echo '<div class="container">';
		echo '<form method = POST>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">efSerialNo</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="efSerialNo" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">signedStID</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="signedStID" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">efOfficeCode</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="efOfficeCode" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">efDateMailed</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="efDateMailed" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<div class="col-25">';
		echo '<label for="subject">efPostage</label>';
		echo '</div>';
		echo '<div class="col-75">';
		echo '<textarea id="subject" name="efPostage" placeholder="Write something.." style="height:50px"></textarea>';
		echo '</div>';
		echo '</div>';

		echo '<div class="row">';
		echo '<input type="submit" name="efSearch" value="search">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="efInsert" value="insert">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="efDelete" value="delete">';
		echo '</div>';
		echo '<div class="row">';
		echo '<input type="submit" name="efUpdate" value="update">';
		echo '</div>';
		echo '</form>';
		echo '</div>';								
		echo "<h3>Note: If you want to delete a record, please type into sdID only!</h3>";	
	} else {
		echo "<h3> Please Choose a Search Way </h3>";
	}


	if ($Query = $_POST['iSQL']){
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
	    $sql = preg_replace('/\s\s+\n/', ' ', $Query);

	    if ($mysqli->query($sql) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $mysqli->error;
	    }
	} elseif ($Query = $_POST['sSQL']) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$sql = preg_replace('/\s\s+\n/', ' ', $Query);
    	$sQueryResults = $mysqli->query($sql);
    	$sQueryRowcount = mysqli_num_rows($sQueryResults);

    if($sQueryRowcount > 0) {
        if (stripos($sql, 'FROM `sender`') !== false) {
            echo "<h3 class = \"entity\"> sender </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>sdID</th><th>sdName</th><th>sdTel</th><th>sdPostalCode</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['sdID'];
                echo "</td><td>";
                echo $row['sdName'];
                echo "</td><td>";
                echo $row['sdTel'];
                echo "</td><td>";
                echo $row['sdPostalCode'];
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `receiver`') !== false) {
            echo "<h3 class = \"entity\"> receiver </h3>";
            echo "<table class=\"table table-striped table-bordered table-hover\">";
            echo "<tr><th>rcID</th><th>rcName</th><th>rcTel</th><th>rcPostalCode</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['rcID'];
                echo "</td><td>";
                echo $row['rcName'];
                echo "</td><td>";
                echo $row['rcTel'];
                echo "</td><td>";
                echo $row['rcPostalCode'];
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `staff`') !== false) {
            echo "<h3 class = \"entity\"> staff </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>stID</th><th>stName</th><th>stTel</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['stID'];
                echo "</td><td>";
                echo $row['stName'];
                echo "</td><td>";
                echo $row['stTel'];
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `expressForm`') !== false) {
            echo "<h3 class = \"entity\"> expressForm </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>efSerialNo</th><th>signedStID</th><th>efOfficeCode</th><th>efDateMailed</th><th>efPostage</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['efSerialNo'];
                echo "</td><td>";
                echo $row['signedStID'];
                echo "</td><td>";
                echo $row['efOfficeCode'];
                echo "</td><td>";
                echo $row['efDateMailed'];
                echo "</td><td>";
                echo $row['efPostage'];                                
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `product`') !== false) {
            echo "<h3 class = \"entity\"> product </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>pdNo</th><th>efSerialNo</th><th>pdType</th><th>pdContent</th><th>pdValue</th><th>pdWeight</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['pdNo'];
                echo "</td><td>";
                echo $row['efSerialNo'];
                echo "</td><td>";
                echo $row['pdType'];
                echo "</td><td>";
                echo $row['pdContent'];
                echo "</td><td>";
                echo $row['pdValue'];
                echo "</td><td>";
                echo $row['pdWeight'];
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `product`') !== false) {
            echo "<h3 class = \"entity\"> product </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>pdNo</th><th>efSerialNo</th><th>pdType</th><th>pdContent</th><th>pdValue</th><th>pdWeight</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['pdNo'];
                echo "</td><td>";
                echo $row['efSerialNo'];
                echo "</td><td>";
                echo $row['pdType'];
                echo "</td><td>";
                echo $row['pdContent'];
                echo "</td><td>";
                echo $row['pdValue'];
                echo "</td><td>";
                echo $row['pdWeight'];
                echo "</td></tr>";
            }
            echo "</table>";
        } elseif (stripos($sql, 'FROM `deliver`') !== false) {
            echo "<h3 class = \"entity\"> deliver </h3>";
            echo '<table class=\"table table-striped table-bordered table-hover\">';
            echo "<tr><th>deliverStID</th><th>efSerialNo</th></tr>";
            while($row = mysqli_fetch_array($sQueryResults)) {
                echo "<tr><td>";
                echo $row['deliverStID'];
                echo "</td><td>";
                echo $row['efSerialNo'];
                echo "</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "No results<br>";
    }
    $mysqli->close();

	} elseif($Query = $_POST['dSQL']) {		
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
	    $sql = preg_replace('/\s\s+\n/', ' ', $Query);

	    if ($mysqli->query($sql) === TRUE) {
	        echo "Record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
	    $mysqli->close();

	} elseif($Query = $_POST['uSQL']) {		
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
	    $sql = preg_replace('/\s\s+\n/', ' ', $Query);

	    if ($mysqli->query($sql) === TRUE) {
	        echo "Record updated successfully";
	    } else {
	        echo "Error updating record: " . $mysqli->error;
	    }
	    $mysqli->close();

	} elseif(isset($_POST['sdSearch'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$sdID = $_POST['sdID'];
		$sdName = $_POST['sdName'];
		$sdTel = $_POST['sdTel'];
		$sdPostalCode = $_POST['sdPostalCode'];

		/* -------------------- sender -------------------- */
		$sdResults = mysqli_query($mysqli, "SELECT * FROM sender
			WHERE (`sdID` = '$sdID')
			OR (`sdName` LIKE '$sdName')
			OR (`sdTel` LIKE '$sdTel')
			OR (`sdPostalCode` LIKE '$sdPostalCode')")
		or die(mysqli_error($mysqli));    

		$sdRowcount = mysqli_num_rows($sdResults);
		echo "<h3 class = \"entity\"> sender </h3>";
		if ($sdRowcount > 0) {
			echo '<table class=\"table table-striped table-bordered table-hover\">';
			echo "<tr><th>sdID</th><th>sdName</th><th>sdTel</th><th>sdPostalCode</th></tr>";
			while($row = mysqli_fetch_array($sdResults)) {
				echo "<tr><td>";
				echo $row['sdID'];
				echo "</td><td>";
				echo $row['sdName'];
				echo "</td><td>";
				echo $row['sdTel'];
				echo "</td><td>";
				echo $row['sdPostalCode'];
				echo "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results<br>";
		}
		$mysqli->close(); 
	} elseif(isset($_POST['rcSearch'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$rcID = $_POST['rcID'];
		$rcName = $_POST['rcName'];
		$rcTel = $_POST['rcTel'];
		$rcPostalCode = $_POST['rcPostalCode'];

		$rcResults = mysqli_query($mysqli, "SELECT * FROM receiver
			WHERE (`rcID` = '$rcID')
			OR (`rcName` LIKE '$rcName')
			OR (`rcTel` LIKE '$rcTel')
			OR (`rcPostalCode` LIKE '$rcPostalCode')")
		or die(mysqli_error($mysqli));    

		$rcRowcount = mysqli_num_rows($rcResults);
		echo "<h3 class = \"entity\"> receiver </h3>";
		if ($rcRowcount > 0) {
			echo '<table class=\"table table-striped table-bordered table-hover\">';
			echo "<tr><th>rcID</th><th>rcName</th><th>rcTel</th><th>rcPostalCode</th></tr>";
			while($row = mysqli_fetch_array($rcResults)) {
				echo "<tr><td>";
				echo $row['rcID'];
				echo "</td><td>";
				echo $row['rcName'];
				echo "</td><td>";
				echo $row['rcTel'];
				echo "</td><td>";
				echo $row['rcPostalCode'];
				echo "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results<br>";
		}
		$mysqli->close(); 	
	} elseif(isset($_POST['stSearch'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$stID = $_POST['stID'];
		$stName = $_POST['stName'];
		$stTel = $_POST['stTel'];

		$stResults = mysqli_query($mysqli, "SELECT * FROM staff
			WHERE (`stID` = '$stID')
			OR (`stName` LIKE '$stName')
			OR (`stTel` LIKE '$stTel')")
		or die(mysqli_error($mysqli));    

		$stRowcount = mysqli_num_rows($stResults);
		echo "<h3 class = \"entity\"> staff </h3>";
		if ($stRowcount > 0) {
			echo '<table class=\"table table-striped table-bordered table-hover\">';
			echo "<tr><th>stID</th><th>stName</th><th>stTel</th></tr>";
			while($row = mysqli_fetch_array($stResults)) {
				echo "<tr><td>";
				echo $row['stID'];
				echo "</td><td>";
				echo $row['stName'];
				echo "</td><td>";
				echo $row['stTel'];
				echo "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results<br>";
		}
		$mysqli->close(); 	
	} elseif(isset($_POST['pdSearch'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$pdNo = $_POST['pdNo'];
		$efSerialNo = $_POST['efSerialNo'];
		$pdType = $_POST['pdType'];
		$pdContent = $_POST['pdContent'];
		$pdWeight = $_POST['pdWeight'];
		$pdValue = $_POST['pdValue'];

		$pdResults = mysqli_query($mysqli, "SELECT * FROM product
           WHERE (`pdNo` LIKE '$pdNo')
             OR (`efSerialNo` LIKE '$efSerialNo')
             OR (`pdType` LIKE '$pdType')
             OR (`pdContent` LIKE '$pdContent')
             OR (`pdValue` LIKE '$pdValue')
             OR (`pdWeight` LIKE '$pdWeight')")			
		or die(mysqli_error($mysqli));    

		$pdRowcount = mysqli_num_rows($pdResults);
		echo "<h3 class = \"entity\"> product </h3>";
		if ($pdRowcount > 0) {
			echo '<table class=\"table table-striped table-bordered table-hover\">';
			echo "<tr><th>pdNo</th><th>efSerialNo</th><th>pdType</th><th>pdContent</th><th>pdValue</th><th>pdWeight</th></tr>";
			while($row = mysqli_fetch_array($pdResults)) {
				echo "<tr><td>";
				echo $row['pdNo'];
				echo "</td><td>";
				echo $row['efSerialNo'];
				echo "</td><td>";
				echo $row['pdType'];
				echo "</td><td>";
				echo $row['pdContent'];
				echo "</td><td>";
				echo $row['pdValue'];
				echo "</td><td>";
				echo $row['pdWeight'];												
				echo "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results<br>";
		}
		$mysqli->close(); 

	} elseif(isset($_POST['efSearch'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$efSerialNo = $_POST['efSerialNo'];
		$signedStID = $_POST['signedStID'];
		$efOfficeCode = $_POST['efOfficeCode'];
		$efDateMailed = $_POST['efDateMailed'];
		$efPostage = $_POST['efPostage'];

		$efResults = mysqli_query($mysqli, "SELECT * FROM expressForm
           WHERE (`efSerialNo` LIKE '$efSerialNo')
             OR (`signedStID` LIKE '$signedStID')
             OR (`efOfficeCode` LIKE '$efOfficeCode')
             OR (`efDateMailed` LIKE '$efDateMailed')
             OR (`efPostage` LIKE '$efPostage')")			
		or die(mysqli_error($mysqli));    

		$efRowcount = mysqli_num_rows($efResults);
		echo "<h3 class = \"entity\"> expressForm </h3>";
		if ($efRowcount > 0) {
			echo '<table class=\"table table-striped table-bordered table-hover\">';
			echo "<tr><th>efSerialNo</th><th>signedStID</th><th>efOfficeCode</th><th>efDateMailed</th><th>efPostage</th></tr>";
			while($row = mysqli_fetch_array($efResults)) {
				echo "<tr><td>";
				echo $row['efSerialNo'];
				echo "</td><td>";
				echo $row['signedStID'];
				echo "</td><td>";
				echo $row['efOfficeCode'];
				echo "</td><td>";
				echo $row['efDateMailed'];
				echo "</td><td>";
				echo $row['efPostage'];												
				echo "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "No results<br>";
		}
		$mysqli->close(); 	

	} elseif(isset($_POST['sdInsert'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$sdID = $_POST['sdID'];
		$sdName = $_POST['sdName'];
		$sdTel = $_POST['sdTel'];
		$sdPostalCode = $_POST['sdPostalCode'];

		$sdInsertSQL = "INSERT INTO `sender` (`sdID`, `sdName`, `sdTel`, `sdPostalCode`) 
		VALUES ('$sdID', '$sdName', '$sdTel', '$sdPostalCode')";

	    if ($mysqli->query($sdInsertSQL) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sdInsertSQL . "<br>" . $mysqli->error;
	    }

		$mysqli->close(); 

	} elseif(isset($_POST['rcInsert'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
		
		$rcID = $_POST['rcID'];
		$rcName = $_POST['rcName'];
		$rcTel = $_POST['rcTel'];
		$rcPostalCode = $_POST['rcPostalCode'];		

		$rcInsertSQL = "INSERT INTO `receiver` (`rcID`, `rcName`, `rcTel`, `rcPostalCode`) 
		VALUES ('$rcID', '$rcName', '$rcTel', '$rcPostalCode')";

	    if ($mysqli->query($rcInsertSQL) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $rcInsertSQL . "<br>" . $mysqli->error;
	    }

		$mysqli->close(); 

	} elseif(isset($_POST['stInsert'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
		
		$stID = $_POST['stID'];
		$stName = $_POST['stName'];
		$stTel = $_POST['stTel'];	

		$stInsertSQL = "INSERT INTO `staff` (`stID`, `stName`, `stTel`) 
		VALUES ('$stID', '$stName', '$stTel')";

	    if ($mysqli->query($stInsertSQL) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $stInsertSQL . "<br>" . $mysqli->error;
	    }

		$mysqli->close(); 

	} elseif(isset($_POST['pdInsert'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
	
		$pdNo = $_POST['pdNo'];
		$efSerialNo = $_POST['efSerialNo'];
		$pdType = $_POST['pdType'];
		$pdContent = $_POST['pdContent'];
		$pdWeight = $_POST['pdWeight'];
		$pdValue = $_POST['pdValue'];	

		$pdInsertSQL = "INSERT INTO `product` (`pdNo`, `efSerialNo`, `pdType`, `pdContent`, `pdWeight`, `pdValue`) 
		VALUES ('$pdNo', '$efSerialNo', '$pdType', '$pdContent', '$pdWeight', '$pdValue')";

	    if ($mysqli->query($pdInsertSQL) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $pdInsertSQL . "<br>" . $mysqli->error;
	    }

		$mysqli->close(); 

	} elseif(isset($_POST['efInsert'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));
	
		$efSerialNo = $_POST['efSerialNo'];
		$signedStID = $_POST['signedStID'];
		$efOfficeCode = $_POST['efOfficeCode'];
		$efDateMailed = $_POST['efDateMailed'];
		$efPostage = $_POST['efPostage'];

		$efInsertSQL = "INSERT INTO `expressForm` (`efSerialNo`, `signedStID`, `efOfficeCode`, `efDateMailed`, `efPostage`) 
		VALUES ('$efSerialNo', '$signedStID', '$efOfficeCode', '$efDateMailed', '$efPostage')";

	    if ($mysqli->query($efInsertSQL) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $efInsertSQL . "<br>" . $mysqli->error;
	    }

		$mysqli->close(); 		
	} elseif(isset($_POST['sdDelete'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$sdID = $_POST['sdID'];
		$sdName = $_POST['sdName'];
		$sdTel = $_POST['sdTel'];
		$sdPostalCode = $_POST['sdPostalCode'];

		$sdDeleteSQL = "DELETE FROM `sender` 
		    WHERE (`sender`.`sdID` = '$sdID')
		    OR (`sender`.`sdName` = '$sdName')
		    OR (`sender`.`sdTel` = '$sdTel')
		    OR (`sender`.`sdPostalCode` = '$sdPostalCode')";

	    if ($mysqli->query($sdDeleteSQL) === TRUE) {
	        echo "New record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
		$mysqli->close();

	} elseif(isset($_POST['rcDelete'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$rcID = $_POST['rcID'];
		$rcName = $_POST['rcName'];
		$rcTel = $_POST['rcTel'];
		$rcPostalCode = $_POST['rcPostalCode'];	

		$rcDeleteSQL = "DELETE FROM `receiver` 
		    WHERE (`receiver`.`rcID` = '$rcID')
		    OR (`receiver`.`rcName` = '$rcName')
		    OR (`receiver`.`rcTel` = '$rcTel')
		    OR (`receiver`.`rcPostalCode` = '$rcPostalCode')";

	    if ($mysqli->query($rcDeleteSQL) === TRUE) {
	        echo "New record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
		$mysqli->close();

	} elseif(isset($_POST['stDelete'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$stID = $_POST['stID'];
		$stName = $_POST['stName'];
		$stTel = $_POST['stTel'];

		$stDeleteSQL = "DELETE FROM `staff` 
		    WHERE (`staff`.`stID` = '$stID')
		    OR (`staff`.`stName` = '$stName')
		    OR (`staff`.`stTel` = '$stTel')";

	    if ($mysqli->query($stDeleteSQL) === TRUE) {
	        echo "New record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
		$mysqli->close();

	} elseif(isset($_POST['pdDelete'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$pdNo = $_POST['pdNo'];
		$efSerialNo = $_POST['efSerialNo'];
		$pdType = $_POST['pdType'];
		$pdContent = $_POST['pdContent'];
		$pdWeight = $_POST['pdWeight'];
		$pdValue = $_POST['pdValue'];	

		$pdDeleteSQL = "DELETE FROM `product` 
		    WHERE (`product`.`pdNo` = '$pdNo')
		    OR (`product`.`efSerialNo` = '$efSerialNo')
		    OR (`product`.`pdType` = '$pdType')
		    OR (`product`.`pdContent` = '$pdContent')
		    OR (`product`.`pdWeight` = '$pdWeight')
		    OR (`product`.`pdValue` = '$pdValue')";

	    if ($mysqli->query($pdDeleteSQL) === TRUE) {
	        echo "New record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
		$mysqli->close();	

	} elseif(isset($_POST['efDelete'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$efSerialNo = $_POST['efSerialNo'];
		$signedStID = $_POST['signedStID'];
		$efOfficeCode = $_POST['efOfficeCode'];
		$efDateMailed = $_POST['efDateMailed'];
		$efPostage = $_POST['efPostage'];

		$efDeleteSQL = "DELETE FROM `expressForm` 
		    WHERE (`expressForm`.`efSerialNo` = '$efSerialNo')
		    OR (`expressForm`.`signedStID` = '$signedStID')
		    OR (`expressForm`.`efOfficeCode` = '$efOfficeCode')
		    OR (`expressForm`.`efDateMailed` = '$efDateMailed')
		    OR (`expressForm`.`efPostage` = '$efPostage')";

	    if ($mysqli->query($efDeleteSQL) === TRUE) {
	        echo "New record deleted successfully";
	    } else {
	        echo "Error deleting record: " . $mysqli->error;
	    }
		$mysqli->close();	
	} elseif(isset($_POST['sdUpdate'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$sdID = $_POST['sdID'];
		$sdName = $_POST['sdName'];
		$sdTel = $_POST['sdTel'];
		$sdPostalCode = $_POST['sdPostalCode'];

		if(!empty($sdName)) {
			$sdUpdateSQL = "UPDATE `sender` 
			SET `sdName` = '$sdName'
			WHERE `sender`.`sdID` = '$sdID'";

			if ($mysqli->query($sdUpdateSQL) === TRUE) {
		        echo "New record updated successfully <br>";
			} else {
		        echo "Error updating record: " . $mysqli->error;
			}
		}
		if(!empty($sdTel)) {
			$sdUpdateSQL = "UPDATE `sender` 
			SET `sdTel` = '$sdTel'
			WHERE `sender`.`sdID` = '$sdID'";

			if ($mysqli->query($sdUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($sdPostalCode)) {
			$sdUpdateSQL = "UPDATE `sender` 
			SET `sdPostalCode` = '$sdPostalCode'
			WHERE `sender`.`sdPostalCode` = '$sdID'";

			if ($mysqli->query($sdUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}

		$mysqli->close(); 

	} elseif(isset($_POST['rcUpdate'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$rcID = $_POST['rcID'];
		$rcName = $_POST['rcName'];
		$rcTel = $_POST['rcTel'];
		$rcPostalCode = $_POST['rcPostalCode'];

		if(!empty($rcName)) {
			$rcUpdateSQL = "UPDATE `receiver` 
			SET `rcName` = '$rcName'
			WHERE `receiver`.`rcID` = '$rcID'";

			if ($mysqli->query($rcUpdateSQL) === TRUE) {
		        echo "New record updated successfully <br>";
			} else {
		        echo "Error updating record: " . $mysqli->error;
			}
		}
		if(!empty($rcTel)) {
			$rcUpdateSQL = "UPDATE `receiver` 
			SET `rcTel` = '$rcTel'
			WHERE `receiver`.`rcID` = '$rcID'";

			if ($mysqli->query($rcUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($rcPostalCode)) {
			$rcUpdateSQL = "UPDATE `receiver` 
			SET `rcPostalCode` = '$rcPostalCode'
			WHERE `receiver`.`rcPostalCode` = '$rcID'";

			if ($mysqli->query($rcUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}

		$mysqli->close();

	} elseif(isset($_POST['stUpdate'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$stID = $_POST['stID'];
		$stName = $_POST['stName'];
		$stTel = $_POST['stTel'];

		if(!empty($stName)) {
			$stUpdateSQL = "UPDATE `staff` 
			SET `stName` = '$stName'
			WHERE `staff`.`stID` = '$stID'";

			if ($mysqli->query($stUpdateSQL) === TRUE) {
		        echo "New record updated successfully <br>";
			} else {
		        echo "Error updating record: " . $mysqli->error;
			}
		}
		if(!empty($stTel)) {
			$stUpdateSQL = "UPDATE `staff` 
			SET `stTel` = '$stTel'
			WHERE `staff`.`stID` = '$stID'";

			if ($mysqli->query($stUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($stPostalCode)) {
			$stUpdateSQL = "UPDATE `staff` 
			SET `stPostalCode` = '$stPostalCode'
			WHERE `staff`.`stPostalCode` = '$stID'";

			if ($mysqli->query($stUpdateSQL) === TRUE) {
			        echo "New record updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		$mysqli->close(); 

	} elseif(isset($_POST['pdUpdate'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$pdNo = $_POST['pdNo'];
		$efSerialNo = $_POST['efSerialNo'];
		$pdType = $_POST['pdType'];
		$pdContent = $_POST['pdContent'];
		$pdWeight = $_POST['pdWeight'];
		$pdValue = $_POST['pdValue'];

		if(!empty($efSerialNo)) {
			$pdUpdateSQL = "UPDATE `product` 
			SET `efSerialNo` = '$efSerialNo'
			WHERE `product`.`pdNo` = '$pdNo'";

			if ($mysqli->query($pdUpdateSQL) === TRUE) {
		        echo "New record (efSerialNo) updated successfully <br>";
			} else {
		        echo "Error updating record: " . $mysqli->error;
			}
		}
		if(!empty($pdType)) {
			$pdUpdateSQL = "UPDATE `product` 
			SET `pdType` = '$pdType'
			WHERE `product`.`pdNo` = '$pdNo'";

			if ($mysqli->query($pdUpdateSQL) === TRUE) {
			        echo "New record (pdType) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($pdContent)) {
			$pdUpdateSQL = "UPDATE `product` 
			SET `pdContent` = '$pdContent'
			WHERE `product`.`pdNo` = '$pdNo'";

			if ($mysqli->query($pdUpdateSQL) === TRUE) {
			        echo "New record (pdContent) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($pdWeight)) {
			$pdUpdateSQL = "UPDATE `product` 
			SET `pdWeight` = '$pdWeight'
			WHERE `product`.`pdNo` = '$pdNo'";

			if ($mysqli->query($pdUpdateSQL) === TRUE) {
			        echo "New record (pdWeight) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($pdValue)) {
			$pdUpdateSQL = "UPDATE `product` 
			SET `pdValue` = '$pdValue'
			WHERE `product`.`pdNo` = '$pdNo'";

			if ($mysqli->query($pdUpdateSQL) === TRUE) {
			        echo "New record (pdValue) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		$mysqli->close();
	} elseif(isset($_POST['efUpdate'])) {
		$mysqli = mysqli_connect("localhost", "a4839500", "paul456741", "express")
		or die("Error connecting to database: " . mysqli_error($mysqli));

		$efSerialNo = $_POST['efSerialNo'];
		$signedStID = $_POST['signedStID'];
		$efOfficeCode = $_POST['efOfficeCode'];
		$efDateMailed = $_POST['efDateMailed'];
		$efPostage = $_POST['efPostage'];

		if(!empty($signedStID)) {
			$efUpdateSQL = "UPDATE `expressForm` 
			SET `signedStID` = '$signedStID'
			WHERE `expressForm`.`efSerialNo` = '$efSerialNo'";

			if ($mysqli->query($efUpdateSQL) === TRUE) {
		        echo "New record (signedStID) updated successfully <br>";
			} else {
		        echo "Error updating record: " . $mysqli->error;
			}
		}
		if(!empty($efOfficeCode)) {
			$efUpdateSQL = "UPDATE `expressForm` 
			SET `efOfficeCode` = '$efOfficeCode'
			WHERE `expressForm`.`efSerialNo` = '$efSerialNo'";

			if ($mysqli->query($efUpdateSQL) === TRUE) {
			        echo "New record (efOfficeCode) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($efDateMailed)) {
			$efUpdateSQL = "UPDATE `expressForm` 
			SET `efDateMailed` = '$efDateMailed'
			WHERE `expressForm`.`efSerialNo` = '$efSerialNo'";

			if ($mysqli->query($efUpdateSQL) === TRUE) {
			        echo "New record (efDateMailed) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		if(!empty($efPostage)) {
			$efUpdateSQL = "UPDATE `expressForm` 
			SET `efPostage` = '$efPostage'
			WHERE `expressForm`.`efSerialNo` = '$efSerialNo'";

			if ($mysqli->query($efUpdateSQL) === TRUE) {
			        echo "New record (efPostage) updated successfully <br>";
			} else {
			        echo "Error updating record: " . $mysqli->error;
			}			
		}
		$mysqli->close(); 			 						
	}						
	?>
</body>
</html>



