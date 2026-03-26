<?php

// TODO: Add functions to handle textarea, select, checkbox, radio

/**
 * Set an HTML-safe 'value' attribute of a form field from $_POST data.
 * @param string $fieldName The name of the field to display.
 * @return string The HTML entity-encoded output for the form field's 'value' attribute.
 * 
 */

function fieldValue(string $fieldName): string
{
    // // Get field value from POST data
    // $fieldValue = $_POST[$fieldName] ?? "";

    // //Check if no value (return empty string)
    // if ($fieldValue === "") return "";

    // // Safely encode the value for HTML output
    // $fieldValue = htmlspecialchars($fieldValue);

    // Get the safely-encoded value from POST data
    $fieldValue = getEncodedValue($fieldName);

    // Generate HTML output
    return " value='$fieldValue' ";

}

/**
 * Set an HTML-safe 'value' attribute of a form field from $_POST data.
 * @param string $fieldName The name of the field to display.
 * @return string The HTML entity-encoded output for the form field.
 * 
 */

function getEncodedValue(string $fieldName): string
{
    // Get field value from POST data
    $fieldValue = $_POST[$fieldName] ?? "";

    //Check if no value (return empty string)
    if ($fieldValue === "") return "";

    // Return the encoded value for HTML output
    return htmlspecialchars($fieldValue, ENT_QUOTES, "UTF-8");

}

/**
 * Return the "checked" attribute fi the field value is the POST array.
 * @param string $fieldName The name of the field check.
 * @param string $fieldValue The value of the field to compare against.
 * @return string The "checked" attribute if field value matches.
 * 
 */


function setChecked(string $fieldName, string $fieldValue): string
{
    // Compare the vlaue from the POST array with the supplied value, return "checked" if they match
    return ($_POST[$fieldName] ?? null) === $fieldValue ? "checked" : "";
}

/**
 * Return the "selected" attribute fi the field value is the POST array.
 * @param string $fieldName The name of the field check.
 * @param string $fieldValue The value of the field to compare against.
 * @return string The "selected" attribute if field value matches.
 * 
 */


function setSelected(string $fieldName, string $fieldValue): string
{
    // Compare the vlaue from the POST array with the supplied value, return "selected" if they match
    return ($_POST[$fieldName] ?? null) === $fieldValue ? "selected" : "";
}



?>

