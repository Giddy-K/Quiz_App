<?php /* Start of PHP code */
  $score = $_POST["score"]; /* Get the score value that was sent from the HTML form */
  $total = 5; /* Set the total number of questions in the quiz */

  echo "<!DOCTYPE html>"; /* Print the HTML document type declaration */
  echo "<html lang='en'>"; /* Print the opening HTML tag */
  echo "<head>"; /* Print the opening head tag */
  echo "<meta charset='UTF-8'>"; /* Print the character encoding tag */
  echo "<title>Quiz Result</title>"; /* Print the page title tag */
  echo "<link rel='stylesheet' href='style.css'>"; /* Link the same CSS file so the result page looks the same */
  echo "</head>"; /* Print the closing head tag */
  echo "<body>"; /* Print the opening body tag */

  echo "<h1>Quiz Result</h1>"; /* Print the main heading on the result page */
  echo "<p>You scored " . $score . " out of " . $total . ".</p>"; /* Print the user's score */

  if ($score == 5) { /* Check if the student answered all questions correctly */
    echo "<p>Excellent! You got everything right!</p>"; /* Print a message for a perfect score */
  } /* End of perfect score check */

  if ($score >= 3 && $score < 5) { /* Check if the student answered at least 3 questions correctly */
    echo "<p>Good job! Keep studying to improve.</p>"; /* Print an encouraging message for a passing score */
  } /* End of passing score check */

  if ($score < 3) { /* Check if the student scored below 3 */
    echo "<p>Keep practising. You will do better next time!</p>"; /* Print a motivating message for a low score */
  } /* End of low score check */

  echo "<br>"; /* Print a line break for spacing */
  echo "<a href='index.html'>Try Again</a>"; /* Print a link so the user can go back and retake the quiz */

  echo "</body>"; /* Print the closing body tag */
  echo "</html>"; /* Print the closing HTML tag */
?> <!-- End of PHP code -->
