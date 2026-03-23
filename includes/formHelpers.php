<?php

function fieldValue(string $fieldName): string
{
    // Get field value from POST data
    $fieldValue = $_POST[$fieldName] ?? "";

    //Check if no value (return empty string)
    if ($fieldValue === "") return "";

    // Safely encode the value for HTML output
    $fieldValue = htmlspecialchars($fieldValue);

    // Generate HTML output
    return " value='$fieldValue' ";

}

?>