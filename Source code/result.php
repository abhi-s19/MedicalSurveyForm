<?php

$connect = new PDO("mysql:host=localhost;dbname=medical_diagonosis", "root", "");
$message = '';
if(isset($_POST["first_name"]))
{
 sleep(5);
 $query = "
 INSERT INTO medical_report 
 (first_name, last_name, checkupfor, gender, ege, obese, smoke, injury, cholesterol, hypertension, diabetes, address, mobile_no) VALUES 
 (:first_name, :last_name, :checkupfor, :gender, :ege, :obese, :smoke, :injury, :cholesterol, :hypertension, :diabetes, :address, :mobile_no)
 ";
 
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':checkupfor'  => $_POST["checkupfor"],
  ':gender'   => $_POST["gender"],
  ':ege'   => $_POST["ege"],
  ':obese'   => $_POST["obese"],
  ':smoke'   => $_POST["smoke"],
  ':injury'   => $_POST["injury"],
  ':cholesterol'   => $_POST["cholesterol"],
  ':hypertension'   => $_POST["hypertension"],
  ':diabetes'   => $_POST["diabetes"],
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>

<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Medical Diagonosis</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.umd.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
    </head>
    <body>
    <?php echo $message; ?>
    </br>
    <div class="container box", id="result">
        <h2 align="center">Medical Diagonosis Result</h2><br />
        <form method="post" id="register_form">
        
        <div class="tab-content" style="margin-top:16px;">
        <div class="tab-pane active">
        <div class="panel panel-default">
        <div class="panel-heading"><h5>Result</h5>
        <a class="btn btn-success" href="index.php">Click here for another submission</a> 
        </div>
        
        <div class="panel-body">
                
                <ul>
                    <li name="first_name">Patient's first name : <?php echo $_POST['first_name'];?></li>
                    <li name="last_name">Patient's last name : <?php echo $_POST['last_name'];?></li>
                    <li name="checkupfor">Check up for : <?php echo $_POST['checkupfor'];?></li>
                    <li name="gender">Gender : <?php echo $_POST['gender'];?></li>
                    <li name="ege">Ege : <?php echo $_POST['ege'];?></li>
                    <li name="obese">Obese status : <?php echo $_POST['obese'];?></li>
                    <li name="smoke">Smoking status : <?php echo $_POST['smoke'];?></li>
                    <li name="injury">Injury status: <?php echo $_POST['injury'];?></li>
                    <li name="cholesterol">Cholesterol status : <?php echo $_POST['cholesterol'];?></li>
                    <li name="hypertension">Hypertension status : <?php echo $_POST['hypertension'];?></li>
                    <li name="diabetes">Diabetes status : <?php echo $_POST['diabetes'];?></li>
                    <li name="address">Address : <?php echo $_POST['address'];?></li>
                    <li name="mobile_no">Phone number : <?php echo $_POST['mobile_no'];?></li>
                </ul>

            </div>
            <br />
        </div>
        </div>
        </div>
            
        </form>
    </div>

    </body>
</html>
