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
 <br />
  <div class="container box">
   <br />
   <h2 align="center">Medical Diagonosis</h2><br />
   <?php echo $message; ?>
   <form method="post" id="register_form" action="result.php">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_intro">Introduction</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_terms">Terms of Services</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_health_details" style="border:1px solid #ccc">Health Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="intro">
      <div class="panel panel-default">
       <div class="panel-heading">Introduction</div>
       <div class="panel-body">
            <h5>Hello!</h5>
            <p>You’re about to use a short (3 min), safe and anonymous health checkup. Your answers will be carefully analyzed and you’ll learn about possible causes of your symptoms.</p>
        <br />
        <div align="center">
         <button type="button" name="btn_intro" id="btn_intro" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>

     <div class="tab-pane fade" id="terms">
      <div class="panel panel-default">
       <div class="panel-heading">Terms of Services</div>
       <div class="panel-body">
         <p>Before using the checkup, please read Terms of Service. Remember that:</p>
         <ul>
           <li>Checkup is not a diagnosis. Checkup is for informational purposes and is not a qualified medical opinion.</li>
           <li>Do not use in emergencies. In case of health emergency, call your local emergency number immediately.</li>
           <li>Your data is safe. Information that you provide is anonymous and not shared with anyone.</li>
        <div class="form-group">
          <label class="checkbox-inline">
            <input type="checkbox" name="checkbox_terms" id="checkbox_terms" value="checkbox_terms"/>
               <p>I read and accept <a href="#" class="Terms and Service">Terms of Service</a> and <a href="#" class="Privacy Policy">Privacy Policy.</a></p>
            <span id="error_terms_check" class="text-danger"></span>
          </label>
        </div>   
        <br />
        <div align="center">
         <button type="button" name="previous_btn_terms" id="previous_btn_terms" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_terms" id="btn_terms" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>

     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Personal Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Last Name</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Checkupfor</label>
         <label class="radio-inline">
          <input type="radio" name="checkupfor" value="myself" checked /> Myself
         </label>
         <label class="radio-inline">
          <input type="radio" name="checkupfor" value="someone else" /> Someone else
         </label>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked /> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female" /> Female
         </label>
        </div> 
        <div class="form-group">
         <label>Ege</label>
         <label class="text-inline">
         <input type="text" name="ege" id="ege" class="form-control" />
         <span id="error_ege" class="text-danger"></span>
         </label>
        </div>

        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>


     <div class="tab-pane fade" id="health_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill health Details</div>
       <div class="panel-body">
        
       <div class="form-group">
         <h4>Please check all the statements below that apply to you.</h4>
         <br />
         <label>obese or not?</label>
         <label class="radio-inline">
          <input type="radio" name="obese" value="Yes"  /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="obese" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="obese" value="Don't know" /> Don't know
         </label>

         <br />
         <label>Do you smoke or not?</label>
         <label class="radio-inline">
          <input type="radio" name="smoke" value="Yes" /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="smoke" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="smoke" value="Don't know" /> Don't know
         </label>

         <br />
         <label>Have you recently suffered an injury?</label>
         <label class="radio-inline">
          <input type="radio" name="injury" value="Yes" /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="injury" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="injury" value="Don't know" /> Don't know
         </label>

         <br />
         <label>Have you high cholesterol?</label>
         <label class="radio-inline">
          <input type="radio" name="cholesterol" value="Yes" /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="cholesterol" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="cholesterol" value="Don't know" /> Don't know
         </label>

         <br />
         <label>Have you hypertension?</label>
         <label class="radio-inline">
          <input type="radio" name="hypertension" value="Yes" /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="hypertension" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="hypertension" value="Don't know" /> Don't know
         </label>

         <br />
         <label>Have you diabetes?</label>
         <label class="radio-inline">
          <input type="radio" name="diabetes" value="Yes" /> Yes
         </label>
         <label class="radio-inline">
          <input type="radio" name="diabetes" value="No" checked/> No
         </label>
         <label class="radio-inline">
          <input type="radio" name="diabetes" value="Don't know" /> Don't know
         </label>

        </div> 

        <br />
        <div align="center">
         <button type="button" name="previous_btn_health_details" id="previous_btn_health_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_health_details" id="btn_health_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>


     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Contact Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <textarea name="mobile_no" id="mobile_no" class="form-control" ></textarea>
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_intro').click(function(){
  
   $('#list_intro').removeClass('active active_tab1');
   $('#list_intro').removeAttr('href data-toggle');
   $('#intro').removeClass('active');
   $('#list_intro').addClass('inactive_tab1');
   $('#list_terms').removeClass('inactive_tab1');
   $('#list_terms').addClass('active_tab1 active');
   $('#list_terms').attr('href', '#terms');
   $('#list_terms').attr('data-toggle', 'tab');
   $('#terms').addClass('active in');
  
 });

 $('#previous_btn_terms').click(function(){
  $('#list_terms').removeClass('active active_tab1');
  $('#list_terms').removeAttr('href data-toggle');
  $('#terms').removeClass('active in');
  $('#list_terms').addClass('inactive_tab1');
  $('#list_intro').removeClass('inactive_tab1');
  $('#list_intro').addClass('active_tab1 active');
  $('#list_intro').attr('href', '#intro');
  $('#list_intro').attr('data-toggle', 'tab');
  $('#intro').addClass('active in');
 });

 $('#btn_terms').click(function(){

  var error_terms_check=''
  if($("#checkbox_terms").is(':checked'))
   {
    error_terms_check = '';
    $('#error_terms_check').text(error_terms_check);
    $('#checkbox_terms').removeClass('has-error');

    $('#list_terms').removeClass('active active_tab1');
    $('#list_terms').removeAttr('href data-toggle');
    $('#terms').removeClass('active');
    $('#list_terms').addClass('inactive_tab1');
    $('#list_personal_details').removeClass('inactive_tab1');
    $('#list_personal_details').addClass('active_tab1 active');
    $('#list_personal_details').attr('href', '#personal_details');
    $('#list_personal_details').attr('data-toggle', 'tab');
    $('#personal_details').addClass('active in');
   }
   else
   {
    error_terms_check = 'please agree to proceed';
    $('#error_terms_check').text(error_terms_check);
    $('#checkbox_terms').addClass('has-error');
   }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_terms').removeClass('inactive_tab1');
  $('#list_terms').addClass('active_tab1 active');
  $('#list_terms').attr('href', '#terms');
  $('#list_terms').attr('data-toggle', 'tab');
  $('#terms').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  var error_ege = '';
  
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }

  if($.trim($('#ege').val()).length == 0)
  {
   error_ege = 'ege is required';
   $('#error_ege').text(error_ege);
   $('#ege').addClass('has-error');
  }
  else
  {
   error_ege = '';
   $('#error_ege').text(error_ege);
   $('#ege').removeClass('has-error');
  }

  if(error_first_name != '' || error_last_name != '' || error_ege != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_health_details').removeClass('inactive_tab1');
   $('#list_health_details').addClass('active_tab1 active');
   $('#list_health_details').attr('href', '#health_details');
   $('#list_health_details').attr('data-toggle', 'tab');
   $('#health_details').addClass('active in');
  }
 });

 $('#previous_btn_health_details').click(function(){
  $('#list_health_details').removeClass('active active_tab1');
  $('#list_health_details').removeAttr('href data-toggle');
  $('#health_details').removeClass('active in');
  $('#list_health_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });

 $('#btn_health_details').click(function(){
  $('#list_health_details').removeClass('active active_tab1');
  $('#list_health_details').removeAttr('href data-toggle');
  $('#health_details').removeClass('active');
  $('#list_health_details').addClass('inactive_tab1');
  $('#list_contact_details').removeClass('inactive_tab1');
  $('#list_contact_details').addClass('active_tab1 active');
  $('#list_contact_details').attr('href', '#contact_details');
  $('#list_contact_details').attr('data-toggle', 'tab');
  $('#contact_details').addClass('active in');
  });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_health_details').removeClass('inactive_tab1');
  $('#list_health_details').addClass('active_tab1 active');
  $('#list_health_details').attr('href', '#health_details');
  $('#list_health_details').attr('data-toggle', 'tab');
  $('#health_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'progress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>
