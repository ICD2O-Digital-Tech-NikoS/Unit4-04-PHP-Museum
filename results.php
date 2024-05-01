<?php
  // get user input and declare it as a variable for their age
  $user_age = $_POST["age"];
  $day = $_POST["day"];
  $unchanged = "-- Day of the Week --";

  // Check if user age falls in specific ranges for discounts or free entry
  // Check if user input is empty
  if ($user_age === "" || $day === $unchanged) {
    echo "Please fill out both questions.";
  }
  // check if able to get in for free
  else if ($user_age < 5 || $user_age > 95) {
    echo "You can get in for FREE.";
  }
  // check if user is elegible for student price
  else if ($user_age >= 12 && $user_age <= 21) {
    echo "You are elegible for a discount.";
  }
  // check if day is a discount day
  else if ($day == "Tuesday" || $day == "Thursday") {
    echo "You are elegible for a discount.";
  }
  else {
    echo "You are not elegible for a discount and must pay full price.";
  }
?>