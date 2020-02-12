#Instrucccions
#build container 

docker build -t my-php-api .

#run docker container unix
docker run -d -v "$PWD":/var/www/html -p 80:80 --name my-php-apache-api my-php-api

#run docker container windows power shell
docker run -d -v ${PWD}:/var/www/html -p 80:80 --name my-php-apache-api my-php-api