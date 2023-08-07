
# CHALLENGE 

This challengen is based on https://github.com/improvein/dev-challenge/tree/master/backend-php. So you will find some specifications about it in that URL.

## Documentation / Installation

 You only need to have docker.  I leave you a dump from the DB  with some records if you don't want to insert new ones.
 You just need to execute:  mysql -u bn_myapp  < challenge.sql

## Running CHALLENGE  in Docker

  To run this challenge test you simple need to execute $ docker compose up.
  After that you need to install al depencies running the command `composer install`
  

### Running Tests

* How to run  Integration Tests (via `php bin/phpunit`). Inside the container has been installed the phpunit framework. Yo simple need to get inside the container got to the root direcotory of the project and execute:
  
  php bin/phpunit

KEEP IN MIND that delete API has and ID set as parameter. You must ensure that it exist in your database or it will fail the test. 
