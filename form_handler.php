
<?php

// define variables and set to empty values
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = "";

//form is sibmitted with POST get_class_methods
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
      $name_error = "name is required";
   } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z]*$/",$name)) {
        $name_error = "Only letters and white space allowed";
      }
   }

   if (empty($_POST["email"])) {
      $name_error = "email is required";
   } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
   }

   if (empty($_POST["phone"])) {
      $phone_error = "phone is required";
   } else {
      $phone = test_input($_POST["phone"]);
      // check if phone is well formatted
      if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i")) {
        $phone_error = "Invalid phone number";
      }
   }

   if (empty($_POST["message"])) {
      $message = "";
   } else {
       $message = test_input($_POST["message"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>
