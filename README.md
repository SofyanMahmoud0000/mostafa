Matchera
=============
![gif](https://github.com/sofyanmahmoud0000/matchera/blob/master/backend/public/ReadmeImages/firstGif.gif)

![gif](https://github.com/sofyanmahmoud0000/matchera/blob/master/backend/public/ReadmeImages/secondGif.gif)
In this repo, I have create an API for a system make it easy to user to reserve a seat for a match.
The system has many types of users, each one of them has its own functions, like the following

* Adminstrator
    * Approve new users as an authority.
    * Remove an existing user.

* Managers
    * Create a new match event
    * Edit the details of an existing match.
    * Add a new stadium.
    * View match details
    * View vacant/reserved seats for each match.

* Customers (Fans):
    * Edit their data.
    * View matches details
    * Reserve vacant seat(s) in future matches.
    * Cancel a reservation

* Guest
    * Register a new account.
    * Sign in as an existing account
    * View matches details

## Database schema

![Database schema](https://github.com/sofyanmahmoud0000/matchera/blob/master/backend/public/ReadmeImages/schema.png)

## Prerequisites
* [Git](https://github.com/) - Git 
* [Docker](https://www.docker.com/) - Docker 

## Running
1. Clone the project
    ```bash
    git clone https://github.com/SofyanMahmoud0000/matchera
    ```
2. Navigate to the app directory
    ```bash
    cd matchera
    ```
3. Run the container
    ```bash
    sudo docker compose up
    ```

4. Hit the url `http://localhost:3001` to navigate the website, and the url `http://localhost:8000/docs` to navigate the api documentation

5. If you want to set some fake data and admin data, you can run this command
   ```bash
    sudo docker compose exec backend php artisan db:seed
   ```

## Build with 
* [PHP](https://www.php.net/) - The language used for backend
* [Laravel](https://laravel.com/) - The framework used for backend
* [JaveScript](https://www.javascript.com/) - The language used for frontend
* [ReactJs](https://react.dev/) - The library used for frontend
* [MySQL](https://dev.mysql.com/doc/refman/8.0/en/what-is-mysql.html) - The database management system
* [Docker](https://www.docker.com/) - The platform used build and deploy the project 

## Development and support 
If you have any questions on how to use this project, or have ideas for future development, 
please send me an e-mail to sofyan1020@gmail.com or rrrokhtar@gmail.com.


## Authors
* [Sofyan Mahmoud](https://github.com/sofyanmahmoud0000) - Software development engineer
* [Mohamed Mokhatr](https://github.com/rrrokhtar) - Software development engineer
