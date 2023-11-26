<?php include 'common-header.php';?> <?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?> 

  <div class="mt-5 offset-md-3 card col-md-6 ">
    <div class="card-body">
      <table border="0">
        <tr>
          <td colspan="2">
            <h1 class="header-text text-center">Let's Get Started</h1>
            <p class="sub-text">Add Your Details to Continue</p>
          </td>
        </tr>
        <tr>
          <form action="" method="POST">
            <td class="label-td" colspan="2">
              <label for="name" class="form-label">Name: </label>
            </td>
        </tr>
        <tr>
          <td class="label-td">
            <input type="text" name="fname" class="input-text" placeholder="First Name" required>
          </td>
          <td class="label-td">
            <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="address" class="form-label">Address: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="text" name="address" class="input-text" placeholder="Address" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="nic" class="form-label">Mobile Number: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="text" pattern="\d*" maxlength="10"  name="nic" class="input-text" placeholder="Mobile number" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <label for="dob" class="form-label datepicker">Date of Birth: </label>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2">
            <input type="date" name="dob" class="input-text" required>
          </td>
        </tr>
        <tr>
          <td class="label-td" colspan="2"></td>
        </tr>
        <tr >
          <td style="padding: 15px;">
            <input type="reset" value="Reset" class="mr-5 login-btn btn-primary-soft btn btn-block btn-lg">
          </td>
          <td style="padding: 15px;">
            <input type="submit" value="Next" class="login-btn btn-success btn btn-block btn-lg">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <br>
            <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
            <a href="login.php" class="hover-link1 non-style-link btn btn">Login</a>
            <br>
            <br>
            <br>
          </td>
        </tr>
        </form>
        </tr>
      </table>
    </div>
  </div>

</div>
</body>
<script>
    $('.datepicker').datepicker();
</script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</html>