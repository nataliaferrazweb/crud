<h1>CRUD</h1>


This repository contains a system for studies purpose only. Under construction.

## Software requirements

<ul>
    <li>PHP version 7.3 or newer</li>
    <li>MariaDB 10.4.21 or newer</li>
    <li>Composer 2.1.10</li>
</ul>


## Instalation

This project uses composer as a package manager, so in order to run the project for the first time you need to follow
these next steps:

<ul>
    <li>Run composer install, this will install dependencies</li>
    <li>Copy the .env.sample file into .env and modify its contents to match your current settings.</li>
    <li>Run composer start and you should be able to check the project running on http://localhost:8080</li>
</ul>

In sql folder there are the tables.sql file to create the database used in this project. Import the file to create the
database.


## License

[MIT](https://choosealicense.com/licenses/mit/)