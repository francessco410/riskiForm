<div class="wrapper">
<img id="logo" src="upload/web_img/logo.jpg" alt=""/>       
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
          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY"  pattern=".{10}" minlength="10" type="text">
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
        <div class="g-recaptcha" data-sitekey="6Lf2cywUAAAAAHVilgdeRjs8Hs73NjhSXU2cgZXu"></div>
        <button value="Submit" type="submit" class="btn btn-primary" name="riski-form-submit">Submit</button>
  </form>
</div>