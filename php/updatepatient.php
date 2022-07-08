

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Bootstrap 3 Contact form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
  
<style>
#success_message{ display: none;}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="container">

    <form class="well form-horizontal" action="updatepatsql.php" method="post"  id="addform">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->
<?php
	// database connection 
	include("dbconn.php");
	
	// display your profile immediately after login
	$sql = "SELECT * FROM patient WHERE patientIC = ".$_GET['sno1'];
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	$row = mysqli_num_rows($query);
	if($row != 0)
	{
		$r = mysqli_fetch_assoc($query); ?>
<div class="form-group">
  <label class="col-md-4 control-label">Patient IC</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="patientIC" value="<?php echo $r['patientIC']?>" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Patient Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="patientName" value="<?php echo $r['patientName']?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Patient Age</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="patientAge" value="<?php echo $r['patientAge']?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Patient Gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="patientGender" class="form-control selectpicker" >
      <option value="<?php echo $r['patientGender']?>" ><?php echo $r['patientGender']?></option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
</div>
</div>
<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="patientPhoneNumber" value="<?php echo $r['patientPhoneNumber']?>" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      


<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="patientAddress" value="<?php echo $r['patientAddress']?>" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Button -->

  
  <div class="col-md-4">
  <input type='submit' name='submit' value='Update Profile' /> </div>
</div>
    </form>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
      <script id="rendered-js" >
$(document).ready(function () {
  $('#contact_form').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh' },

    fields: {
      first_name: {
        validators: {
          stringLength: {
            min: 2 },

          notEmpty: {
            message: 'Please supply your first name' } } },



      last_name: {
        validators: {
          stringLength: {
            min: 2 },

          notEmpty: {
            message: 'Please supply your last name' } } },



      email: {
        validators: {
          notEmpty: {
            message: 'Please supply your email address' },

          emailAddress: {
            message: 'Please supply a valid email address' } } },



      phone: {
        validators: {
          notEmpty: {
            message: 'Please supply your phone number' },

          phone: {
            country: 'US',
            message: 'Please supply a vaild phone number with area code' } } },



      address: {
        validators: {
          stringLength: {
            min: 8 },

          notEmpty: {
            message: 'Please supply your street address' } } },



      city: {
        validators: {
          stringLength: {
            min: 4 },

          notEmpty: {
            message: 'Please supply your city' } } },



      state: {
        validators: {
          notEmpty: {
            message: 'Please select your state' } } },



      zip: {
        validators: {
          notEmpty: {
            message: 'Please supply your zip code' },

          zipCode: {
            country: 'US',
            message: 'Please supply a vaild zip code' } } },



      comment: {
        validators: {
          stringLength: {
            min: 10,
            max: 200,
            message: 'Please enter at least 10 characters and no more than 200' },

          notEmpty: {
            message: 'Please supply a description of your project' } } } } }).





  on('success.form.bv', function (e) {
    $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
    $('#contact_form').data('bootstrapValidator').resetForm();

    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data('bootstrapValidator');

    // Use Ajax to submit form data
    $.post($form.attr('action'), $form.serialize(), function (result) {
      console.log(result);
    }, 'json');
  });
});
//# sourceURL=pen.js
    </script>

  
<?php }?>

</body>

</html>
 
