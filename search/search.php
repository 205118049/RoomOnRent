<html>

<head>
    <title>Search</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="header" class>
        <h2>Search</h2>
    </div>
    <?php  
    $db=mysqli_connect("localhost","root","","room");
      // check connection
    if(!$db){
        die("connection failed:".mysqli_connect_error());
    }

    ?>
    <div class="loginbox">
        <form method="post" action="result.php">

            <!-- for show error -->


            <div class="input-group">

                <label>Select City</label>
                <select name="s1" required>
                     <option value="">Select</option>
                    
                     <option value="CENTRAL DELHI">CENTRAL DELHI</option>
                     <option value="EAST DELHI">EAST DELHI </option>
                     <option value="NEW DELHI">NEW DELHI</option>
                     <option value="NORTH DELHI">NORTH DELHI</option>
                    
                    <option value="NORTH EAST DELHI">NORTH EAST DELHI</option>
                     <option value="NORTH WEST DELHI">NORTH WEST DELHI</option>
                     <option value="SHAHDARA">SHAHDARA</option>
                     <option value="SOUOTH EAST DELHI">SOUTH EAST DELHI</option>
                     <option value="SOUTH DELHI">SOUTH DELHI</option>
                     <option value="SOUTH WEST DELHI">SOUTH WEST DELHI</option>
                     <option value="WEST DELHI">WEST DELHI</option>
                      
                 </select>
            </div>
            <div class="input-group">
                <label>Room Type</label> &nbsp;

                <select name="s2" required>
				 <option value="">Select</option>
            <option value="SINGLE">SINGLE</option>
            <option value="SHARED">SHARED</option> 
            
        </select>
            </div>
            <div class="input-group">
                <label>Tenant pref</label> &nbsp;
                <select name="s3" required>
				 <option value="">Select</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option value="FAMILY">Family</option>

                </select>
            </div>
			<div class="input-group">
                <label>Prices</label> &nbsp;
                <select name="s4" required>
				 <option value="">Select</option>
                <option value="5000">upto 5,000rs</option>
                <option value="10000">upto 10,000rs</option>
                <option value="20000">upto 20,000rs</option>
                </select>
            </div>
            <div class="input-group">
                <button name="submit">
                     SEARCH
                </button>

                <a href="../startfromhere/indexhome.php"><button type="button" >
                     HOME
                </button></a>

            </div>


        </form>

    </div>

</body>

</html>
