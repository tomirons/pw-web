## Perfect World Web

**Note:** This project is no longer supported, however I will still look at pull requests if you'd like to attempt a fix.

### Requirements
1. Composer & Git - [Complete steps 1 & 2 on this tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04)
2. PHP 5.5.9 or higher
3. PHP GD extension, not sure if you have it? Run `apt-get install php5-gd; service apache2 restart`

### Setup

Download the latest release and upload the files.

First you need to rename `.env.example` to `.env`

Then set the permissions to 777 for the following directories/files:

- storage/app/
- storage/framework/
- storage/logs/
- bootstrap/cache/
- .env

Next, edit the `.env` file and change the database credentials.

**Note:** Make sure your inside the `pw-web` directory when you run the commands.

Run the following command to install all the required packages:
````
composer install
````

**Note:** If you have **ANY** of the following columns in the `users` table, **REMOVE** them!
- money
- role
- language
- remember_token
- created_at
- updated_at

**Note:** If you have **ANY** of the following tables in your database, **REMOVE** them!
- migrations
- password_resets
- pweb_apps
- pweb_articles
- pweb_payments
- pweb_ranking_factions
- pweb_ranking_players
- pweb_ranking_territories
- pweb_services
- pweb_settings
- pweb_shop_items
- pweb_transfer
- pweb_vote_logs
- pweb_voucher_logs
- pweb_vouchers

The next step is to create all the database tables and default records, run the following command:
````
php artisan migrate --seed
````

Finally, run this last command to generate an application key:
````
php artisan key:generate
````

**Note:** If you receive a 500 error after installation, redo the permissions again.

If you receive any other errors please create an [issue](https://github.com/huludini/pw-web/issues).

**Note:** This project is no longer supported, however I will still look at pull requests if you'd like to attempt a fix.
