# RetrieveLastCommand_Controlpanel
This project is a simple web application to control the movement of a robot. The interface allows the user to send movement commands such as "Forward", "Backward", "Left", "Right", and "Stop" to a robot, which are then stored in a database. Additionally, it retrieves and displays the last stored command after a new command is inserted.

## Table of Contents

- [Project Description](#project-description)
- [Technologies Used](#technologies-used)
- [Code Explanation](#code-explanation)
  - [HTML (index.html)](#html-indexhtml)
  - [CSS (styles.css)](#css-stylescss)
  - [JavaScript (script.js)](#javascript-scriptjs)
  - [PHP (store_command.php)](#php-store_commandphp)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Features](#features)

## Project Description

This project provides a web interface to control a robot by sending directional commands (Forward, Backward, Left, Right, Stop). These commands are stored in a MySQL database. The interface is designed to be simple and user-friendly, providing real-time feedback on command submission and displaying the last stored command.

## Technologies Used

- PHP: Server-side scripting language for backend processing.
- MySQL: Database management system to store robot commands.
- HTML: Markup language for creating the web interface.
- CSS: Style sheet language for styling the web interface.
- JavaScript: Programming language for handling asynchronous operations and improving user experience.

## Code Explanation

### HTML (index.html)

The main structure of the web application, containing the form for sending commands and the interface layout.

### CSS (styles.css)

Styles the web interface, including button design, layout, and visual effects such as shadows and transitions.

### JavaScript (script.js)

Handles asynchronous command sending to the server using the Fetch API, updating the interface with the response message.

### PHP (store_command.php)

Handles the database connection and logic for inserting movement commands into the database, ensuring data integrity and providing feedback on the command status. Additionally, it retrieves and displays the last stored command after a new command is inserted.


## Installation

1. Clone this repository or download the ZIP file.
2. Extract the ZIP file (if downloaded) and place the project directory in the htdocs directory of your XAMPP installation (or equivalent directory in your web server).

### Database Setup

1. Start XAMPP and ensure Apache and MySQL are running.
2. Open your web browser and go to http://localhost/phpmyadmin.
3. Create a new database called robotmovement.
4. Create a table called direction with the following structure:

  
   CREATE TABLE direction (
       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       robotDirection VARCHAR(50) NOT NULL
   );
   
## Usage

1. Start your web server and navigate to http://localhost/your-project-directory/index.html.
2. You will see a control interface with buttons for different movements.
3. Click on any button to send a command. The command will be stored in the database, and a message will display the result along with the last command stored.
4. To retrieve and display the last stored command, navigate to http://localhost/your-project-directory/store_command.php in your web browser.

## File Structure

robot-movement-controller/
│
├── REDME.md

├── index.html

├── styles.css

├── script.js

├── store_command.php


## Features

- Simple and intuitive web interface for controlling robot movements.
- Commands are stored in a MySQL database for further processing or logging.
- Real-time feedback on command submission.
- Displays the last stored command after each new command is inserted.
