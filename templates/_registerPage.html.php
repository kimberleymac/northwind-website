<?php
//Reference and Includes

//require_once __DIR__ . "/../includes/formHelpers.php";

require_once INCLUDES_DIR . "formHelpers.php";

?>

<h2> Register</h2>

<p>Fill out the registration form to receive great things.</p>

<?php 
//
include "templates/_errorSummary.html.php"; 
?>

<!-- Could use a dynamic option like /echo basename([SERVER_THING] in action) -->
<form action="register.php" method="post">
    <fieldset>
        <legend>Personal information</legend>

        <div class="form-row">
            <label for="">First name:</label>
            <input type="text" id="firstName" name="firstName" required <?= fieldValue("firstName")?>>
        </div>
        <div class="form-row">
            <label for="">Last name:</label>
            <input type="text" id="lastName" name="lastName" required <?= fieldValue("lastName")?>>
            <!-- Would be a good idea to generate a function so that you wouldn't need to copy and paste the code -->
            <?php if(isset($errors["lastName"])): ?>
                <span class="error-message"><?= $errors["lastName"] ?></span>
                <?php endif ?>
        </div>
        <div class="form-row">
            <label for="">Email: </label>
            <input type="email" id="email" name="email" placeholder="name@email.com.au" required <?= fieldValue("email")?>>
        </div>
        <div class="form-row">
            <label for="">Password: </label>
            <input type="password" id="password1" name="password1" required>
        </div>
        <div class="form-row">
            <label for="">Re-type password: </label>
            <input type="password" id="password2" name="password2" required>
        </div>
        <div class="form-row">
            <label for="course">Course: </label>
            <select name="course" name="course" id="course">
                <option value="c4-web">Cert 4 Web Design</option>
                <option value="c4-web">Cert 4 Programming</option>
                <option value="c4-web">Diploma Web Development</option>
                <option value="c4-web">Diploma Web Advanced Programming</option>
            </select>
        </div>

        <div class="form-row">
            <p>Enrolment mode:</p>
            <label>
                <input type="radio" name="enrolmentMode" id="enrolmentMode" value="fulltime">
                Full-time
            </label>
            <label>
                <input type="radio" name="enrolmentMode" id='enrolmentMode' value="partime">
                Part-time
            </label>
        </div>

        <div class="form-row">
            <label>
                <input type="checkbox" name="newsletter" value="yes" checked>
                Sign up to our newsletter
            </label>
        </div>

        <div class="form-row">
            <label for="comments"> Any comments?</label>
            <textarea name="comments" id="comments"></textarea>
        </div>

        <div class="form-row">
            <label>
                <input type="checkbox" name="termsAndConditions" value="yes" required>
                Agree to terms &amp; conditions
            </label>
        </div>

        <div class="form-row">
            <!-- examples of how you can use buttons using names that can then be used server-side based on action value
            <button type="submit" name="action" value="remove"></button>
                <button type="submit" name="action" value="register"></button> -->
            <button type="submit" name="submitRegister">Register</button>
            <!-- if (isset($_POST['submitRegister])) 
                 i.e. was this submit button clicked-->
        </div>

    </fieldset>
</form>