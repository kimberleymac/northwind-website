<?php
//Setup for the page

// Common includes for main PHP pages (controllers)
require_once "includes/common.php";


//Config
$title = "About our company";

// Start output buffering (trap the output instead of displaying it)
ob_start();

//Check if form has been submitted

if(isset($_POST['submitRegister'])){

    //Form has been submitted - process data

    // Collection of all errors
    $errors = [];

    //Testing
    //$errors['lastName'] = "This field is required";
    //$errors = ['error message'];

    // Get form data ($_POST superglobal array)
    // if the thing on the left is null use the thing on the right nullish coalescent
    $firstName = $_POST["firstName"] ?? "";
    $lastName = $_POST["lastName"] ?? "";
    $email = $_POST["email"] ?? "";
    $password1 = $_POST["password1"] ?? "";
    $password2 = $_POST["password2"] ?? "";
    $course = $_POST["course"] ?? "";
    $enrolmentMode = $_POST["enrolmentMode"] ?? "";$newsletterChecked = isset($_POST["newsletter"]);
    $comments = $_POST["comments"] ?? "";
    


    // TODO: Normalise/sanitise data
    $firstName = trim($firstName);

    // TODO: Validate fields....

    // Validate first name
    if ($firstName === ""){
        $errors["firstName"] = "First name is required";
    } else if (strlen($firstName) < 2 || strlen($lastName) > 50  ){
        $errors['firstName'] = 'First name must be between 2-50 characters';

    }

    // Validate last name
    if ($lastName === ""){
        $errors["lastName"] = "Last name is required";
    } else if (strlen($lastName) < 2 || strlen($lastName) > 50 ){
        $errors['lastName'] = 'Last name must be between 2-50 characters';

    }

    //Validate email
    if ($email === ""){
        $errors["email"] = "Email is required";
    } 
    // Email pattern match
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Invalid email address';

    }


    // Validate passwords
    if (strlen($password1) < 10){
        $errors["password1"] = "Password must be 10+ characters";
    } else if ($password2 !== $password1) {
        $errors["password2"] = "Passwords don't match";

    }

    // Check for errors (invalid data)
    if (count($errors)>0){

        // Invalid - re-display form with errors
        // echo "INVALID";
        include_once "templates/_registerPage.html.php";
        
    } else {
        // Valid - display confirmation (save to DB, send email, etc..)
        // echo "Valid - all good";
        include_once "templates/_registerConfirmation.html.php";
            
    }

} else {

    //Just display the code

    include_once "templates/_registerPage.html.php";
}

//



// Stop output buffering (store output in $content variable)
$content = ob_get_clean();

//Test
//$content = 'howdy partner';

// Include the main layout template (with custom $content)
//include __DIR__ . "templates/_layout.html.php";
include_once "templates/_layout.html.php";

// adding some comment in here
