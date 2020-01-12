function index() {
    let formHandle = document.forms["contactForm"];
    console.log(formHandle);
    formHandle.onsubmit =validateForm;

    function validateForm(){
        let firstName = formHandle.firstName.value;
        let lastName = formHandle.lastName.value;
        let phoneNumber = formHandle.phoneNumber.value;
        let emailId = formHandle.emailId.value;
        let validationFlag=0;
        document.getElementById("validationSummary").innerHTML ="";
        
        if(firstName == "")
        {
            document.getElementById("validationSummary").innerHTML += "*Please enter First Name<br>";
            validationFlag=1;
        }
        else 
        {
            if(/\d/.test(firstName))
            {
                document.getElementById("validationSummary").innerHTML += "*Invalid Name: First Name should not have any digits<br>";
                validationFlag=1;
            } 
        }
        
        if(lastName == "")
        {
            document.getElementById("validationSummary").innerHTML += "*Please enter Last Name<br>";
            validationFlag=1;
        }
        else
        {
            if(/\d/.test(lastName))
            {
                document.getElementById("validationSummary").innerHTML += "*Invalid Name: Last Name should not have any digits<br>";
                validationFlag=1;
            }
        }
        
        
        if(phoneNumber == "")
        {
            document.getElementById("validationSummary").innerHTML += "*Please enter your Phone Number<br>";
            validationFlag=1;
        }
        else
        {
            if(!/^\d{10}$/.test(phoneNumber))   
            {
                document.getElementById("validationSummary").innerHTML += "*Invalid Phone Number: Please enter a 10 digit number<br>";
                validationFlag=1;
            }
        }  
        
        if(emailId == "")
        {
            document.getElementById("validationSummary").innerHTML += "*Please enter your Email Id<br>";
            validationFlag=1;
        }
        else
        {
            if(!/[@]/.test(emailId))   
            {
                document.getElementById("validationSummary").innerHTML += "*Invalid Email Id";
                validationFlag=1;
            }
        }


        if(validationFlag == 1)
            {
                return false;
            }
    }
}