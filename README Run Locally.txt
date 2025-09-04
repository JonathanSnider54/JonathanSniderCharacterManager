

*This project was made using MySQL, so if necessary, remove the comment (semicolon) from
this item in your php.mi file (which can be located where your php verson folder is:
extension=pdo_mysql

*create a database named "characters_database" inside MySQL

*modify these items in the .env file in the project to match as necessary for one of your
MySQL connections:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=characters_database
DB_USERNAME=root
DB_PASSWORD=YourPassword

*check that the mySQL service is started if necessary (search for services, scroll down to
MySQL, and if its status isn't 'running', right click and click 'Start')

*inside the CharacterManager project folder, open a command prompt and run the following commands to seed and then start the project:

php artisan migrate:fresh --seed

herd open
