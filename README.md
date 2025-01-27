# Hospital Appointment System

## Features
- **Login & Logout System**
- **Login Page**
- **Admin Page with Database Table**
- **CRUD Operations** (Create, Read, Update, Delete)
- **Update & Delete Pages**
- **User-Friendly Interface**
- **Personal & Appointment Management Sections**

---

## Installation

### Step 1: Run the SQL Queries
Create the necessary database and tables by running the following commands:

```sql
CREATE DATABASE hospital;

CREATE TABLE appointment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    surname VARCHAR(255),
    id_number VARCHAR(255),
    city VARCHAR(255),
    department VARCHAR(255),
    date VARCHAR(255)
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO users (id, name, password) VALUES
(1, 'Eren', '123');
```

### Step 2: Manual Setup (Alternative)
1. **Create Database**: Name it `hospital`.
2. **Create `appointment` Table**:
    - Columns:
        - `id` (int, primary key, auto increment)
        - `name` (varchar(255))
        - `surname` (varchar(255))
        - `id_number` (varchar(255))
        - `city` (varchar(255))
        - `department` (varchar(255))
        - `date` (varchar(255))
3. **Create `users` Table**:
    - Columns:
        - `id` (int, primary key, auto increment)
        - `name` (varchar(255))
        - `password` (varchar(255))
4. **Insert Default User**:
    ```sql
    INSERT INTO users (id, name, password) VALUES
    (1, 'Eren', '123');
    ```

### Step 3: Update Database Configuration
Make sure to check and update your PHPMyAdmin username and password in `src/php/dbcon.php`.

---

## Usage
1. Open `index.php` to access the login page.
2. Create a user in PHPMyAdmin if none exists.
3. Log in with your credentials.
4. After login, you will be redirected to `home.php` (Control Panel):
   - Add appointments using the form.
   - View appointments in the table.
   - Click `UPDATE` in any row to edit an appointment, which redirects to `update.php`.
   - Click `DELETE` to remove an appointment, which redirects to `delete.php`.

---

## Technologies Used

### Languages and Frameworks
1. **HTML**
2. **CSS**
   - **Bootstrap 5** for responsive design
3. **JavaScript**
   - Minimal code for interactivity
4. **LottieFiles**
   - For animations
5. **PHP**
6. **SQL**
   - Basic queries for database management

---

## Screenshots

![Login Page](https://github.com/ErenElagz/Hospital-Appointment-System/assets/125195062/46a38305-8863-4ef1-b958-8c1e68643be1)
*Login Page*

![Admin Panel](https://github.com/ErenElagz/Hospital-Appointment-System/assets/125195062/8de6eb55-7ce9-42d4-8dd7-230cdfd44c6c)
*Admin Panel*

![Appointment Table](https://github.com/ErenElagz/Hospital-Appointment-System/assets/125195062/35e8543a-6671-4737-bbd6-021c34d458e5)
*Appointment Management Table*

![Update Page](https://github.com/ErenElagz/Hospital-Appointment-System/assets/125195062/81af1491-6537-4e0c-8fb3-e03d9e48da8d)
*Update Appointment*

---

## License
This project was my end-of-term project and does not include a formal license. Feel free to use and modify it as needed. Good luck! ❤️

---

## Contact
If you have any questions or feedback, feel free to reach out:

**Email**: [elagzeren@gmail.com](mailto:elagzeren@gmail.com)

