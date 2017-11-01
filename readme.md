# DESCRIPTION

## AUTHOR: [Robbert Luit](https://www.github.com/roblui)

## Check this project live @ [link](https://development.robbertluit.be)

> This project was made for Web Development during 1 semester @ college

> We had to make a competition for a known brand. The frontend of the competition is simple, but behind the scenes there is lots to do.

> Git clone the repo to find out more. Please make a mention of me, if you'd make any use of this code. :) thanks! Robbert

# DEPLOYMENT

## REQUIREMENTS

> PHP VERSIE: 7+, check php versie met commando:

> > php -v

> Composer globaal geinstalleerd,check composer globaal met commando:

> > composer

### VIA CMD/TERMINAL

### STAP 1

> Kloon de map

> > git clone <https://github.com/RobLui/web_development.git>

### STAP 2

> Ga naar de web_development directory

> > cd web_development

### STAP 3

> Installeer de vendors

> > composer install

### STAP 4

> Setup database

> > Database gegevens instellen in .env & database aanmaken in phpmyadmin

### STAP 5

> Database entities updaten via migrations met commando:

> > php artisan migrate

### STAP 6

> 1. Crëer een admin (via /register) & log daarna in

> 2. Maak een wedstrijd aan in /dashboard -> wedstrijd

> 3. Maak een vraag aan /dashboard -> vragen

> 4. Maak 4 periodes /dashboard -> instellingen (periodes)

> 5. Voeg Managers toe /dashboard -> instellingen (excel ontvangers)
