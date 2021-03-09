# Php-mysql docker compose file
## Prerequisites:
- Docker
- Docker-compose
## Usage:
Edit the .env file with the required environment variables. 
```sh
docker-compose up
```
By executing the above command the following steps are going to be executed:
- A mysql container will run using the environment variables from the .env file. The database is also going to be populated using the init.sql file. 
- An Apache httpd in conjunction with PHP container is going to be build. The build is required to add the mysqli dependency witch is needed to perform a connection to the database within php.

Visit http://localhost:8080 to view the database. 
