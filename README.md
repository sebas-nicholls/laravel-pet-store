# INTRODUCTION
This repository holds a Pet Store API example developed using PHP laravel framework

# Setup
Run locally:

```
docker run --rm -v $(pwd):/app composer install
docker-compose up -d
```
Docker-compose runs the containers relevant to the application and maps the `80` port of the webserver container through the host `8080` port

# NOTE
You have to have a mysql instance running. Edit `.env` file to include:

```
DB_HOST=YOURDATABASEHOST
DB_PORT=YOURDATABASEPORT
DB_USERNAME=YOURDATABASEUSERNAME
DB_PASSWORD=YOURDATABASEPASSWORD
```

# Contributing
This is a private repository for a laboratory. Contribute via pull requests to the `master` branch.

