# php-di-interview-excersise
Cohesion digital dependency injection interview exercise.


I don't have any experience with PHP other than a small project I did about 8 years ago, so please forgive me if it doesn't comply the the PHP Standards Recomendations.

I have assumed that the point of this exercise to to demonstrate good SOLID priciples and not to implements a full DI container that would be fit for production. I have assumed that Servlet my have more to do in future and the printing a message is just one role that Servlet will undertake and I have segregated and role by creating and using MessageProvider interface. Although simple, I believe the use of interface implemention and factory method pattern constitutes a very simple DI implemention.

Requirements:
It is expected that you have PHP7 and Composer (https://getcomposer.org/) installed locally.

Instructions:
1. Clone this project and navigate to its root directory.
2. Open and CLI and run the following commands
3. Run: "composer install"
4. Run: ".\vendor\bin\phpunit"

Possible Future Enhancements:
All though this was a very simple example a future enhancement of this would be to develop a full DI container based on a XML configuration.
