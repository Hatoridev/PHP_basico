# PHP

Repository with small examples of introduction to the PHP programming language for web development.

## How to Run

### Termux (Android):
1. **Open the Termux app**.
2. **Update and install necessary packages** using the following commands:
   ```bash
   apt update && apt upgrade
   pkg install php
   pkg install git
   git clone https://github.com/Hatoridev/PHP_basico.git
   cd PHP
   ```

3. **Navigate to the desired directory**:
   ```bash
   cd example01  # or example02, example03, etc.
   ```

4. **Run a PHP script**:
   - To run a PHP script directly:
     ```bash
     php script.php
     ```
   - Or, start the built-in PHP web server:
     ```bash
     php -S localhost:8000
     ```

5. **If the server is already running**:
   - Kill the PHP process using the `pkill` command:
     ```bash
     pkill php
     ```

6. **Open the page in your browser**:
   - For specific files (e.g., `file.php`):
     ```
     http://localhost:8000/file.php
     ```
   - For `index.php` files (no need to specify the file):
     ```
     http://localhost:8000
     ```

### Windows:
1. **Install Git**:
   Download and install [Git for Windows](https://gitforwindows.org/).

2. **Clone the repository and navigate to the directory**:
   ```bash
   git clone https://github.com/Hatoridev/PHP_basico.git
   cd PHP
   ```

3. **Run the PHP server**:
   - Start the built-in PHP server:
     ```bash
     php -S localhost:8000
     ```

4. **If the server is already running**:
   - Kill the PHP process using the Task Manager or `pkill` command in a terminal.

5. **Open the page in your browser**:
   - For specific files (e.g., `file.php`):
     ```
     http://localhost:8000/file.php
     ```
   - For `index.php` files (no need to specify the file):
     ```
     http://localhost:8000
     ```

### Debian/Linux:
1. **Install required packages**:
   ```bash
   sudo apt update && sudo apt upgrade
   sudo apt install php
   sudo apt install git
   git clone https://github.com/Hatoridev/PHP_basico.git
   cd PHP
   ```

2. **Navigate to the desired directory**:
   ```bash
   cd example01  # or example02, example03, etc.
   ```

3. **Run the PHP script**:
   - To run a PHP script directly:
     ```bash
     php script.php
     ```
   - Or, start the built-in PHP web server:
     ```bash
     php -S localhost:8000
     ```

4. **If the server is already running**:
   - Kill the PHP process using the `pkill` command:
     ```bash
     pkill php
     ```

5. **Open the page in your browser**:
   - For specific files (e.g., `file.php`):
     ```
     http://localhost:8000/file.php
     ```
   - For `index.php` files (no need to specify the file):
     ```
     http://localhost:8000
     ```

## Languages

<div align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="60" alt="PHP logo" />
</div>
