## Kabe

Kabe is an open source system for users to voluntary share location information and infection status to help reduce the spread of the corona virus.

## Running Locally
* install docker desktop
* copy `.docker.env.example` file to `.docker.env`
* run `docker-compose up -d` in this directory
* app will be running on port `8888`
* to set up local DB
  * copy and paste `.env.example` to `.env`
  * fill in local DB credentials in `.env` if different from default
  * exec into php container `docker exec -it app sh`
  * cache config `php artisan config:cache`
  * run database seed `php artisan migrate:install`
  * check migrations status `php artisan migrate:status`
  * run migrations `php artisan migrate`
  * rollback migration `php artisan migrate:rollback --step=1`
* FYI, I find tha sometimes I need to exec into the container (as above) to run any composer are artisan commands successfully
* to install dependencies after pull run `composer install`
* to update dependencies run `composer install`
* to set up JWT secret run `php artisan jwt:secret`

## Contributing

Create a pull request for open issues or write Chris Raastad (on any channel) to be added to the organization.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Thank You
* Garage 48 for organizing [Hack the Crisis](http://www.garage48.org/events/hack-the-crisis), the first virtual hackathon.
