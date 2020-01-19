<?php
$firstName = $lastName = $phoneNumber = $emailId = $country = $skills = "";
$firstNameError = $lastNameError = $phoneNumberError = $emailIdError = $genderError = $skillsError = "";
$validationFlag = -1;

if(isset($_POST['register'])) {
    $validationFlag=0;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailId = $_POST['emailId'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $skills = $_POST['skills'];

    if($firstName == "") {
        $firstNameError = "Please enter your first name";
        $validationFlag = 1;
    } else {
        if(!preg_match("/^[a-zA-Z]+$/", $firstName)){
            $firstNameError = "Invalid: Name cam contain only alphabets";
            $validationFlag = 1;
        }
    }
    if($lastName == "") {
        $lastNameError = "Please enter your last name";
        $validationFlag = 1;
    } else {
        if (!preg_match("/^[a-zA-Z]+$/", $lastName)) {
            $lastNameError = "Invalid: Name cam contain only alphabets";
            $validationFlag = 1;
        }
    }

    $pattern = "";
    if($phoneNumber == "") {
        $phoneNumberError = "Please enter your phone number";
        $validationFlag = 1;
    } else {
        if(!preg_match("/^\([0-9]{3}\)-[0-9]{3}-[0-9]{4}$/", $phoneNumber)){
            $phoneNumberError = "Invalid: Please enter in this format: (XXX)-XXX-XXXX";
            $validationFlag = 1;
        }
    }
    if($emailId == "") {
        $emailIdError = "Please enter your email Id";
        $validationFlag = 1;
    } else {
        if(!filter_var($emailId, FILTER_VALIDATE_EMAIL)){
            $emailIdError = "Invalid: Please enter a valid email";
            $validationFlag = 1;
        }
    }
    if($gender == "") {
        $genderError = "Please enter your gender";
        $validationFlag = 1;
    }
    if($skills[0] == null) {
        $skillsError = "No skills selected";
        $validationFlag = 1;
    }
}
?>
    <main>
        <div id="contactForm">
            <form name="contactForm" id="contactForm" action="" method="post">
                    <p class="h1">Contact Form</p>
                    <div class="form-group">


                        <label for="firstName"> First Name:</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" value="<?=$firstName?>">
                        <span style="color: red"><?=$firstNameError ?></span>
                    </div>
                    <div class="form-group">
                        <label for="lastName"> Last Name:</label>
                        <input type="text" class="form-control"name="lastName" id="lastName" value="<?=$lastName?>">
                        <span style="color: red"><?=$lastNameError ?></span>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                          <?php if($country =="Canada"){ ?>
                          <option value="Canada" selected>Canada</option>
                          <?php } else { ?>
                          <option value="Canada">Canada</option>
                          <?php } ?>

                          <?php if($country =="USA"){ ?>
                          <option value="USA" selected>USA</option>
                          <?php } else { ?>
                          <option value="USA">USA</option>
                          <?php } ?>

                          <?php if($country =="Australia"){ ?>
                          <option value="Australia" selected>Australia</option>
                          <?php } else { ?>
                          <option value="Australia">Australia</option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="form-group"> 
                        <label for="male" >Male</label>
                        <?php if($gender=="Male"){ ?>
                        <input type="radio" id="male" name="gender" value="Male" checked>
                        <?php } else { ?>
                        <input type="radio" id="male" name="gender" value="Male">
                        <?php } ?>

                        <label for="female">Female</label>
                        <?php if($gender=="Female"){ ?>
                        <input type="radio" id="female" name="gender" value="Female" checked>
                        <?php } else { ?>
                        <input type="radio" id="female" name="gender" value="Female">
                        <?php } ?>

                        <span style="color:red"><?=$genderError?></span> 
                    </div>

                    <div class="form-group">
                        <label>Skills:</label>
                        <div>
                            <label>C#</label>
                            <input type="checkbox" name="skills[]" value="C#" <?php if(in_array( "C#" ,$skills )) {echo "checked='checked'";} ?>>
                            <label>Java</label>
                            <input type="checkbox" name="skills[]" value="Java" <?php if(in_array( "Java" ,$skills )) {echo "checked='checked'";} ?>>
                            <label>Python</label>
                            <input type="checkbox" name="skills[]" value="Python"<?php if(in_array( "Python" ,$skills )) {echo "checked='checked'";} ?>>
                            <label>Php</label>
                            <input type="checkbox" name="skills[]" value="Php" <?php if(in_array( "Php" ,$skills )) {echo "checked='checked'";} ?>>
                            <span style="color:red"><?=$skillsError?></span>
                        </div>
                    </div>
                    <div class="form-group">        
                        <label for="phoneNumber"> Phone Number:</label>
                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?=$phoneNumber?>">
                        <span style="color: red"><?=$phoneNumberError ?></span>
                    </div>
                    <div class="form-group">        
                        <label for="emailId"> Email ID:</label>
                        <input type="text" class="form-control" name="emailId" id="emailId" value="<?=$emailId?>">
                        <span style="color: red"><?=$emailIdError ?></span>
                    </div>
                    <div class="form-group"> 
                        <input type="submit" name="register" class="btn btn-primary form-control" value="Submit">
                    </div>
                    <?php if($validationFlag==0){?>
                    <div id="validationSummary" style="color: green">
                        <?= "Form submitted successfully with the below details" ?>;
                        <div style="color:black;" class="card card-body bg-light mt-4">
                            <h4 style="text-align: center">Contact Details:</h4>
                            <p>First Name: <?= $firstName ?></p>
                            <p>Last Name: <?= $lastName ?></p>
                            <p>Country: <?= $country ?></p>
                            <p>Gender: <?= $gender ?></p>
                            <p>Skills: <?php foreach($skills as $skill)
                                {
                                    echo $skill;
                                    echo " ";
                                } ?>
                            </p>
                            <p>Phone Number: <?= $phoneNumber ?></p>
                            <p>Email ID: <?= $emailId ?></p>
                        </div>
                    </div>
                    <?php } ?>
            </form>
        </div>
    </main>
