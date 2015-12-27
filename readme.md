## Perfect World Web

# Requirements
1. Composer & Git - [Complete steps 1 & 2 on this tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04)
2. PHP 5.5.9 or higher

# Setup

Once you've go the requirements done, next is the setup.

First you need to rename `.env.example` to `.env`

Then set the permissions to 775 for the following directories/files:

1. storage/app/
2. storage/framework/
3. storage/logs/
4. bootstrap/cache/
5. .env

Once that is done you need to edit the .env file and change the database credentials.

Then run the following command to install all the required packages:
````
composer run
````
Make sure your inside the `pw-web` directory.

The next step is to create all the database tables and default records, run the following command:
````
php artisan migrate --seed
````

Finally, run this last command to generate an application key:
````
php artisan key:generate
````