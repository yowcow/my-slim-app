.PHONY: composer-install up

all: composer-install

composer-install:
	composer install

up:
	php -S localhost:8080 -t public
