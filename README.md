# General Knowledge Quiz App

A simple web-based quiz about general school knowledge topics (Geography, Maths, Science). Built with plain HTML, CSS, JavaScript, and PHP - no libraries or frameworks. Designed as a beginner project that is easy to understand and rewrite from memory.

## Project Files

| File          | Purpose                                                            |
| ------------- | ------------------------------------------------------------------ |
| `index.html`  | The quiz page - contains all questions and the submit button       |
| `style.css`   | Styling - colours, fonts, spacing                                  |
| `script.js`   | Counts correct answers and stores the score before form submission |
| `submit.php`  | Receives the score and displays a result message                   |
| `writeup.txt` | Short student write-up explaining the project                      |

## How to Run

You need a PHP-capable local server. The easiest option is PHP's built-in server:

```bash
php -S localhost:8000
```

Then open your browser and go to:

```
http://localhost:8000/index.html
```

Alternatively, place the project folder inside your XAMPP or WAMP `htdocs` directory and start Apache, then visit:

```
http://localhost/Quiz_App/index.html
```

## How It Works

1. The user opens `index.html` and answers 5 multiple-choice questions.
2. On clicking **Submit Quiz**, JavaScript checks each answer and calculates the score.
3. The score is placed into a hidden form field and the form POSTs to `submit.php`.
4. PHP reads the score and displays a personalised result message with a link to try again.

## Questions Covered

1. Capital of France
2. 5 x 5 = ?
3. Mixing red and blue paint gives which colour?
4. Days in a week
5. Largest planet in our solar system
