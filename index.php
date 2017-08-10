<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once dirname(__FILE__).'/Controllers/formController.php';
    if(isset($_POST['riski-form-submit'])){
        $validation = formController::valid();
    }
?>

<html>
   <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="validator.js" type="text/javascript"></script>
        <script src="validator.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <img id="logo" src="upload/web_img/logo.jpg" alt=""/>
        
        <div class="wrapper">

            <h1 id="title">room reservation form</h1>
            <h2 id="subtitle">Please fill in the form below to book room with us, before that read carefuly <a href="http://www.erasmus.embraganca.info/procedureEN.php">this article</a>. Be advised, reservation is confirmed ONLY after we reply your reservation request.</h2>
            <form enctype="multipart/form-data" data-toggle="validator" role="form" id="riskiForm" method="post">
                <div class="form-group">
                  <label for="inputName" class="control-label" >First name</label>
                  <input name="name" type="text" class="form-control" id="inputName" placeholder="First name" maxlength="45" pattern="^[a-zA-Z\s\-]+$" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last name</label>
                  <input name="surname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" maxlength="45" pattern="^[a-zA-Z\s\-]+$" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputPassword1" maxlength="45" placeholder="Email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <fieldset class="form-group">
                  <legend>Sex</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="sex" id="optionsRadios1" value="M" checked  required>
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="sex" id="optionsRadios2" value="F">
                      Female
                    </label>
                  </div>
                </fieldset>
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input name="country" type="text" class="form-control" id="exampleInputEmail1" pattern="^[a-zA-Z\s\-]+$" maxlength="45" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Study Course</label>
                  <input name="course" type="text" class="form-control" id="exampleInputEmail1" maxlength="45" required >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Home University</label>
                  <input name="home_univeristy" type="text" class="form-control" id="exampleInputEmail1" maxlength="45" required>
                </div>
                <div class="form-group ">
                <div class="form-group">
                  <label for="exampleInputEmail1">When do you plan to arrive in Braganca?</label>
                   <i class="fa fa-calendar"></i>
                  <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" minlength="10" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">How many months would you stay in Braganca?</label>
                  <input name="months" type="text" class="form-control" id="exampleInputEmail1" maxlength="2" pattern="^[0-9]+$" required >
                </div>
                <fieldset class="form-group">
                  <legend>Type of room you want to reserve </legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="room_type" id="optionsRadios1" value="1" checked>
                      Single
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="room_type" id="optionsRadios2" value="2">
                      Double
                    </label>
                  </div>
                </fieldset>
                <fieldset class="form-group">
                  <legend>Would you like to reserve utility kit?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="kit" id="optionsRadios1" value="1" checked>
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="kit" id="optionsRadios2" value="0">
                      No
                    </label>
                  </div>
                </fieldset>
                <fieldset class="form-group">
                  <legend>Are you a smoker?</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="smoker" id="optionsRadios1" value="1" checked>
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="smoker" id="optionsRadios2" value="0">
                      No
                    </label>
                  </div>
                </fieldset>
                <div class="form-group">
                  <label for="form-check-label label-primary">Your ID</label>
                  <input name="id-photo" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
                  <small id="fileHelp" class="form-text text-muted">Upload a copy of your passport or National ID if you are European </small>
                </div> 

                <div class="form-group">
                  <label for="exampleTextarea">Comment</label>
                  <textarea name="comment" class="form-control" id="exampleTextarea" maxlength="255" rows="3"></textarea>
                </div>

                <button value="Submit" type="submit" class="btn btn-primary" name="riski-form-submit">Submit</button>
          </form>
        </div>
    </body>
</html>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>