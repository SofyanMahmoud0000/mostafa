FROM php:7.4-cli
LABEL USER.NAME="Sofyan"
LABEL USER.EMAIL="sofyan1020@gmail.com"
WORKDIR /app

RUN apt-get update && apt-get install git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip -y

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

CMD ["bash", "./entrypoint.sh"]
