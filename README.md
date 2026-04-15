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

## Requirements

The only requirement is **PHP** installed on the machine. No database, Node.js, or package manager is needed.

**Check if PHP is already installed:**
```bash
php -v
```

If you see a version number, you are ready to go.

**If PHP is not installed:**

- **Windows** - Download from [php.net/downloads](https://windows.php.net/download/) (VS17 x64 Thread Safe zip), extract it, and add the folder to your system PATH.
- **XAMPP (easiest option)** - Download from [apachefriends.org](https://www.apachefriends.org/) and install it. This bundles PHP and Apache together with no manual configuration needed.

## How to Run

**Option 1 - PHP built-in server:**
```bash
php -S localhost:8000
```
Then open your browser and go to:
```
http://localhost:8000/index.html
```

**Option 2 - XAMPP:**

Place the `Quiz_App` folder inside `C:/xampp/htdocs/`, start Apache from the XAMPP control panel, then visit:
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
