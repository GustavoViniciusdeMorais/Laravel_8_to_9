# Laravel 8 to 9 App Example

At the docker-compose file, put just the MYSQL_ROOT_PASSWORD flag, there is no need to
put the flat MYSQL_USER, it will just cause errors and will make the mysql container
restart all the time.

Put all the laravel folders and scripts in the main directory where the dockers files are.
With this setup the nginx container will run automatically without errors and will display
the laravel results at browser.

```
docker container stop $(docker container ls -aq)
docker image rm --force $(docker image ls -aq)
docker inspect [CONTAINER ID] | grep IP
docker logs php_mysql_1
php artisan migrate # php container
php artisan key:generate
```