# Bil372_Odev2_1

Contributors
-
- Alper Kaan Yıldız
- Talha Ünal
- Yahya Can Tuğrul

# Demo Video
https://drive.google.com/file/d/1PjXax1H2_EilMfkM6nG5wBfIQB0KKvpB/view?usp=sharing

# User Manual
-Look User Manual.pdf file.

# Statistics
-Look stat -> index.html.

# How to install
- Install MySQL Server
- Install MongoDB Server.
- Install PHP 7.4
- Install Laravel8
- Clone this repository
- cd into src folder
- run "composer install"
- run "npm install"
- edit .env file
```
set MySQL connection information DB_DATABASE to your database name.
set DB_USERNAME to your MySQL username.
set DB_PASSWORD to your MySQL password.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=grup1
DB_USERNAME=root
DB_PASSWORD=123456
```
```
set MongoDB connection information.
DB_CONNECTION_SECOND=mongodb
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=27017
DB_DATABASE_SECOND=admin
DB_USERNAME_SECOND=
DB_PASSWORD_SECOND=
set MongoDB connection information DB_DATABASE_SECOND to your database name.
set DB_USERNAME_SECOND to your MongoDB username.
set DB_PASSWORD_SECOND to your MongoDB password.
```
- run "php artisan migrate:fresh --seed"
- run "php artisan serve"
Now the app is ready. You can go to the url specified on the terminal.
