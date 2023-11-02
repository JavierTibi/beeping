# Beeping


## Prerequisites

Before you start, make sure you have the following prerequisites installed on your system:

- [PHP](https://www.php.net/) (Version 7.4 or later)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) (Version 8.x)
- [MySQL](https://www.mysql.com/) or any other compatible database system
- [Docker](https://www.docker.com/)

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/JavierTibi/beeping
    ```

2. Navigate to the project folder:

    ```bash
    cd beeping
    ```

3. Install project dependencies using Composer:

    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and name it `.env`. Update the configuration settings in the `.env` file to match your local environment. Be sure to set the database connection details.

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database to create the necessary tables:

    ```bash
    php artisan migrate
    ```

7. Seed the database to add sample data (if you have created seeders):

    ```bash
    php artisan db:seed
    ```

## Running the Application

Use docker.sh script to start the project:

```bash
sh docker.sh up
 ```

Access the docker container and start the queue

```bash
sh docker.sh ssh
php artisan queue:work
 ```

Run the command to get the total orders
```bash
php artisan orders:total
 ```

Open a web browser and access the site 
```bash
http://localhost:8095
 ```
