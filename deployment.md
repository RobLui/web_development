# Deployment document

## REQUIREMENTS

> PHP VERSIE: 7+, check php versie met commando:

> > php -v

> Composer globaal geinstalleerd,check composer globaal met commando:

> > composer

## VIA CMD/TERMINAL

## STAP 1

> Kloon de map

> > git clone <https://github.com/RobLui/web_development.git>

## STAP 2

> Ga naar de web_development directory

> > cd web_development

## STAP 3

> Installeer de vendors

> > composer install

## STAP 4

> Setup database

> > Database gegevens instellen in .env & database aanmaken in phpmyadmin

# STAP 5

> Database entities updaten via migrations met commando:

> > php artisan migrate
