# SheTech Training - Backend

## Overview

This repository is part of my software development training at **SheTech Hub Incubator**. The focus of this training is on backend development using **PHP** and **MySQL**. The project includes a backend system built with PHP for server-side logic and MySQL for database management.

### About Me

- **Name**: Mussa Aron
- **Email**: mussaaron20@gmail.com
- **Phone**: 0745450431
- **Location**: Kinondoni, Dar es Salaam, Tanzania

---

## Project Details

### Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Local Server**: XAMPP (for local development and testing)

### Database

The database used in this project is named **`shetech_first_db`**. The exported SQL file is included in the `database` folder for easy setup.

---

## Getting Started

Follow these steps to set up the project locally.

### Prerequisites

Before you begin, ensure you have the following installed on your machine:

1. **XAMPP**: Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. **Git** (optional): If you want to clone the repository, install Git from [https://git-scm.com/](https://git-scm.com/).

---

## Installation

### Step 1: Clone the Repository (Optional)

If you are using Git, clone the repository to your local machine:

```bash
git clone https://github.com/mouxoozoxmozoron/shetech-training--backend


If you are not using Git, download the project as a ZIP file and extract it to your desired location.
Step 2: Set Up XAMPP

    Install XAMPP:

        Download and install XAMPP from the official website.

        Follow the installation wizard to complete the setup.

    Start XAMPP:

        Open the XAMPP Control Panel.

        Start the Apache and MySQL services.

Step 3: Set Up the Database

    Open phpMyAdmin:

        In your browser, go to:
        Copy

        http://localhost/phpmyadmin

    Create a New Database:

        Click on New in the left sidebar.

        Enter the database name as shetech_first_db and click Create.

    Import the SQL File:

        Select the newly created database (shetech_first_db) from the left sidebar.

        Click on the Import tab.

        Click Choose File and select the SQL file located in the database folder of this project.

        Click Go to import the database.

Step 4: Configure the Project

    Move the Project to XAMPP:

        Copy the project folder (shetech-training--backend) and paste it into the htdocs directory of your XAMPP installation. The default path is:
        Copy

        C:\xampp\htdocs

    Update Database Configuration (if needed):

        Open the config.php file (or the file where database credentials are stored).

        Ensure the database connection details match your local setup. For example:
        php
        Copy

        $host = 'localhost';
        $dbname = 'shetech_first_db';
        $username = 'root'; // Default XAMPP MySQL username
        $password = ''; // Default XAMPP MySQL password (empty)

Step 5: Run the Project

    Start the Server:

        Ensure Apache and MySQL are running in the XAMPP Control Panel.

    Open the Project in Your Browser:

        Navigate to:
        Copy

        http://localhost/shetech-training--backend

    Test the Application:

        If everything is set up correctly, you should see the application running.

Folder Structure
Copy

shetech-training--backend/
│
├── database/
│   └── shetech_first_db.sql       # Exported MySQL database
│
├── index.php                      # Main entry point
├── README.md                      # Project documentation
└── ...                            # Other PHP files and assets

Contributing

This project is part of my training, and contributions are not expected. However, if you have suggestions or feedback, feel free to reach out to me at mussaaron20@gmail.com.
License

This project is for educational purposes and does not require a license. Feel free to use the code as a reference for your own learning.
Acknowledgments

    SheTech Hub Incubator for providing this training opportunity.

    My mentors and peers for their guidance and support.

Thank you for checking out my project! 😊
```
