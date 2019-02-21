# INTRODUCTION
This repository holds a Pet Store API example developed using PHP laravel project

# Setup
Run locally:

```
docker run --rm -v $(pwd):/app composer install
docker-compose up -d
```

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

