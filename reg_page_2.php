<?php 
session_start();
$ph_number = $_SESSION['name'];


 function check($ph_number){

        $db = mysqli_connect('localhost', 'root', '', 'sericulture') or die("Cannot Connect To Database");
        $user_check_query = "SELECT * FROM producer WHERE mobile='$ph_number'";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        echo '<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    <script src="state.js"></script>

    <style>

#loading-img{
display:none;
}

.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
.uc{
	text-transform: uppercase;
}

.right{
	float:right;
}

</style>
</head>
<body>

<div class="container">
<div class="row">

<div class="col-md-15">
<h1><font color="green">Application For Registration /Renewal As A Silkworm Seed Cocoon Producer</font></h1>
<hr>
</div></div>
<div class="col-md-6">
<form name="contact-form" action="backup_p22.php" method="post" id="contact-form">

<div class="form-group">
	<div  >
<label for="FirstName">First Name</label>
<input type="text" class="form-control" name="first_name" maxlength="20"  value='.$user["fname"].' required>
<span class="text-danger">(Ex - Amruthboy)</label>
</div>
<br>

<div class="form-group">
    <div >
<label for="LastName">Last Name </label>
<input type="text" class="form-control" name="last_name" maxlength="20" value='.$user["lname"].' required>
<span class="text-danger">(Ex - Sanjaywadmath)</label>
</div><br>

<div class="form-group">
        <div >

<label for="fName">Name Father/ Mother/ Husband</label>
<input type="text" class="form-control" name="middle_name"  value='.$user["mname"].' required>
<span class="text-danger">(Ex-Amruth)</label>
</div></div>
<div class="form-group">
<label for="pnumber">Mobile Number</label>
<input type="varchar" class="form-control" name="pno" value='.$user["mobile"].' >
</div>


    </div>
    <div class="form-group">
    <label for="land">Land Line</label>
    <input type="number" class="form-control" name="land_line" value='.$user["land_line"].' >
    <span class="text-danger">(Ex-0802423800)</label>
    </div>


    <div class="form-group">
    <label for="door"><h3>Address :</h3></label>
    <label for="door">Door Number</label>
    <input type="varchar" class="form-control" name="addr_doorno" value='.$user["door_no"].' required>
    <span class="text-danger">(Ex-plot no 3 / Room no 201 / flat no 309)</label>
    </div>

    <div class="form-group">
    <label for="ar">Area</label>
    <input type="varchar" class="form-control" name="addr_area" value='.$user["area"].'required>
    <span class="text-danger">(Ex-Marthhalli / kengeri )</label>
</div>

<div class="form-group">
<label for="tq">Taluk</label>
<input type="varchar" class="form-control" name="addr_taluk" value='.$user["taluk"].' required>
<span class="text-danger">(Ex-Athani / Kumcha)</label>
</div>



    <div class="form-group">
        <div class="resp_code frms">
            <label for="state">Select State<br>
            <div id="selection">
            <select id="listBox"  name ="state_value" onchange="selct_district(this.value)"></select><label for="dis"><br>Select District
            <select id="secondlist" name="district_value" ></select>
        </div>
            <div id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;">
                <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"
            </div>
        </div>
    </div>

    </label>
    <br>
<a href="mdetails.html"><button type="nxt" class="btn btn-primary" name="Next" value="nxt" id="next_form">Next</button></a>
</form></align="right">
 </center>
 <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<div class="response_msg"></div>
</div>
</div>
</div>
</body>
</html>
';
    }



check($ph_number);

?>
