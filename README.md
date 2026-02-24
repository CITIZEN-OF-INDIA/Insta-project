# Instagram Login UI Clone (Animated)

A fully styled and interactive Instagram-inspired login page built using HTML, CSS, JavaScript, PHP, and MySQL.

This project focuses on responsive UI design, smooth transitions, simple client-side interactivity, and basic backend form handling.

## Features

- Responsive Instagram-style login UI
- Clean mobile-first layout with desktop card mode
- Smooth button hover transitions and input focus states
- Dynamic login button color change based on input activity
- SVG-based Instagram/Facebook/Meta icons
- PHP form handling with MySQL insert using PDO
- Redirect flow after form submission

## Tech Stack

- `HTML5` for page structure
- `CSS3` for layout, theme variables, responsive design, and visual transitions
- `JavaScript (Vanilla)` for form interactivity (live login button state)
- `PHP` for backend form processing
- `MySQL` for storing submitted form data
- `PDO` for secure DB connection and prepared statement execution
- `Google Fonts (Roboto)` for typography

## Project Structure

- `index.html` - Main animated login UI and form
- `save.php` - Backend handler that validates and stores submitted data

## How to Download

### Option 1: Download ZIP

1. Open the repository in your browser.
2. Click `Code`.
3. Click `Download ZIP`.
4. Extract into your local web root, for example:
   - `C:\xampp\htdocs\php_projects`

### Option 2: Clone with Git

```bash
git clone <your-repo-url>
```

Then place/open it under:

```text
C:\xampp\htdocs\php_projects
```

## How to Run Locally (XAMPP)

1. Start `Apache` and `MySQL` from XAMPP Control Panel.
2. Put project files inside:
   - `C:\xampp\htdocs\php_projects`
3. Open phpMyAdmin and create database:
   - `testdb`
4. Create table:

```sql
CREATE TABLE `test` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
);
```

5. Verify DB credentials in `save.php`:
   - Host: `localhost`
   - DB: `testdb`
   - User: `root`
   - Password: `` (blank by default in many local XAMPP setups)
6. Open in browser:

```text
http://localhost/php_projects/index.html
```

## How It Works

1. User enters username/email and password in `index.html`.
2. JavaScript listens to input and updates login button color for visual feedback.
3. On submit, form sends POST request to `save.php`.
4. PHP trims/validates inputs.
5. If valid, credentials are inserted into MySQL using a prepared statement.
6. User is redirected to Instagram URL after handling.

## Notes

- This project currently stores passwords in plain text. For any real application, always hash passwords using `password_hash()` and verify with `password_verify()`.
- Add CSRF protection, server-side validation hardening, and rate limiting for production-grade systems.
- Keep this project local and educational only.

## Disclaimer

This project is for learning and fun purpose only.
