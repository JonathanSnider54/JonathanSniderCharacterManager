*Screenshots of functionality can be found in the folder named "screenshots"

*This project was made using Visual Studio, which based on research midway through this appears to be one of the lesser options for working with PHP unless one has the right plugi-ins, it would appear. No intellisense for this made it kind of a pain, but I managed.

*What I'm seeing while using php/laravel is that there's much less boilerplate compared to Java (but then that seems to happen with a lot of languages/processes that try to improve on the things java does like kotlin). I found it odd that I didn't have to write much for my Model class and that php seems to do a lot of injecting, so making instances of objects isn't necessary.

*Routing was kind of interesting to figure out, especially using Routing::resources. Having all those endpoints ready to go out of the box was a bit hard to understand but I think I figured it out, and it seems very convenient for processes that occur all the time (listing, deleting, creating, etc).

*Bootstrap also seems quite powerful if a lesson in and of itself. You can make some very nice looking layouts but they seem reliant on a variety of class names that are a bit of a hassle to wade through.

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
