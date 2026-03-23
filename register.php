<?php
//Setup for the page
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
    $course = $_POST["course"] ?? "";
    $comments = $_POST["comments"] ?? "";
    $enrolmentMode = $_POST["enrolmentMode"] ?? "";
    $newsletterChecked = isset($_POST["newsletter"]);
    


    // TODO: Normalise/sanitise data
    $firstName = trim($firstName);

    // TODO: Validate fields
    if ($firstName === ""){
        $errors["firstName"] = "Firstname is required";
    } else if (strlen($firstName) < 2 ){
        $errors['firstName'] = 'Firstname must be 2+ characters';

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
