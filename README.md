# PHP Input Echo Sandbox

A beginner-friendly PHP project that demonstrates the fundamentals of form handling, data processing, and the request-response cycle in PHP.

## 📋 Description

This is a simple yet educational project that teaches the basics of PHP form handling. Users enter their name and select their favorite color through an HTML form, and PHP processes and displays this information back to them. Perfect for anyone starting their PHP journey!

## ✨ Features

- **Simple HTML Form** - Clean interface with name input and color selection
- **POST Request Handling** - Learn how PHP receives data from forms via `$_POST`
- **Data Sanitization** - Implements `htmlspecialchars()` to prevent XSS attacks
- **Request-Response Cycle** - Understand how data flows from browser to server and back
- **User-Friendly Output** - Displays personalized message with submitted data
- **Navigation** - Easy "Go back" link to submit another response

## 🛠️ Technologies Used

- **PHP** - Server-side scripting
- **HTML5** - Form structure and markup
- **CSS3** - Basic styling

## 📦 Installation Requirements

### Prerequisites
- PHP 7.0 or higher
- A web browser (Chrome, Firefox, Safari, etc.)
- A text editor (VS Code recommended)

### Installation Steps

1. **Install PHP**
   
   **Windows:**
   - Download from [windows.php.net](https://windows.php.net/download)
   - Or install XAMPP from [apachefriends.org](https://www.apachefriends.org/)
   
   **macOS:**
   ```bash
   brew install php
   ```
   
   **Linux (Ubuntu/Debian):**
   ```bash
   sudo apt update
   sudo apt install php
   ```

2. **Verify PHP Installation**
   ```bash
   php -v
   ```
   You should see your PHP version displayed.

3. **Clone or Download the Project**
   ```bash
   git clone https://github.com/Levy-m/learning-php.git
   cd learning-php
   ```

## 🚀 Usage

### Running the Project

**Option 1: Using PHP Built-in Server (Recommended for Beginners)**

1. Open terminal/command prompt in the project directory
2. Start the PHP development server:
   ```bash
   php -S localhost:8000
   ```
3. Open your browser and navigate to:
   ```
   http://localhost:8000/index.php
   ```

**Option 2: Using XAMPP**

1. Copy the project folder to XAMPP's `htdocs` directory
2. Start Apache in XAMPP Control Panel
3. Navigate to:
   ```
   http://localhost/php-input-echo-sandbox/index.php
   ```

### How to Use

1. Open `index.php` in your browser
2. Enter your name in the text field
3. Select your favorite color from the dropdown
4. Click the "Submit" button
5. View your personalized message
6. Click "Go back" to try again with different inputs

## 📁 Project Structure

```
php-input-echo-sandbox/
├── index.php          # Main form page with HTML input fields
├── process.php        # PHP script that processes form data
└── README.md          # Project documentation (this file)
```

### File Descriptions

- **index.php** - Contains the HTML form where users input their name and select their favorite color
- **process.php** - Receives POST data, sanitizes it, and displays the personalized message

## ⚙️ Configuration Options

### Customizing Colors

To add more color options, edit `index.php`:

```html
<option value="YourColor">YourColor</option>
```

### Changing the Server Port

If port 8000 is already in use, specify a different port:

```bash
php -S localhost:3000
```

Then visit `http://localhost:3000/index.php`

### Styling Customization

Both `index.php` and `process.php` contain inline CSS in their `<style>` tags. Modify these to change the appearance:

- Colors
- Fonts
- Layout spacing
- Button styles

## 🐛 Troubleshooting

### "PHP command not found"
**Problem:** PHP is not installed or not in your system PATH.

**Solution:**
- Verify PHP installation: `php -v`
- On Windows, add PHP to your system PATH
- Reinstall PHP if necessary

### "Cannot access localhost:8000"
**Problem:** Server isn't running or port is in use.

**Solution:**
- Ensure you started the server: `php -S localhost:8000`
- Try a different port: `php -S localhost:3000`
- Check if another application is using the port

### "Please submit the form first!"
**Problem:** Accessing `process.php` directly without submitting the form.

**Solution:**
- Always start from `index.php`
- Fill out and submit the form properly

### Form Displays But Nothing Happens
**Problem:** Form action might be incorrect or PHP isn't processing the file.

**Solution:**
- Check that `process.php` exists in the same directory
- Verify the form's `action` attribute points to `process.php`
- Ensure you're using `.php` extension, not `.html`

### Special Characters Display Incorrectly
**Problem:** Character encoding issues.

**Solution:**
- This project uses `htmlspecialchars()` to handle this
- Ensure your PHP files are saved with UTF-8 encoding

## 🎓 Learning Outcomes

By completing this project, you will understand:

- ✅ How HTML forms send data to PHP
- ✅ What `$_POST` superglobal is and how to use it
- ✅ The request-response cycle in web applications
- ✅ Basic security with `htmlspecialchars()`
- ✅ How PHP generates dynamic HTML output
- ✅ The difference between GET and POST methods

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## 📝 License

This project is licensed under the MIT License - see below for details:

```
MIT License

Copyright (c) 2025

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## 🙏 Acknowledgments

- Built as a learning project for PHP beginners
- Inspired by the need for simple, practical PHP examples

---

**Happy Coding! 🚀**