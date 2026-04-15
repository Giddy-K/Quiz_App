var score = 0; /* Create a variable called score and set it to zero */

document.getElementById("quizForm").addEventListener("submit", function(event) { /* Listen for when the form is submitted */

  score = 0; /* Reset the score to zero before counting, in case the user tries again */

  if (document.getElementById("q1b").checked) { /* Check if option B (Paris) is selected for question 1 */
    score = score + 1; /* Add 1 to the score because the answer is correct */
  } /* End of question 1 check */

  if (document.getElementById("q2c").checked) { /* Check if option C (25) is selected for question 2 */
    score = score + 1; /* Add 1 to the score because the answer is correct */
  } /* End of question 2 check */

  if (document.getElementById("q3b").checked) { /* Check if option B (Purple) is selected for question 3 */
    score = score + 1; /* Add 1 to the score because the answer is correct */
  } /* End of question 3 check */

  if (document.getElementById("q4c").checked) { /* Check if option C (7) is selected for question 4 */
    score = score + 1; /* Add 1 to the score because the answer is correct */
  } /* End of question 4 check */

  if (document.getElementById("q5c").checked) { /* Check if option C (Jupiter) is selected for question 5 */
    score = score + 1; /* Add 1 to the score because the answer is correct */
  } /* End of question 5 check */

  document.getElementById("score").value = score; /* Put the final score into the hidden form field so PHP can receive it */

}); /* End of the submit event listener */
