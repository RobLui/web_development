# Server Deployment - <http://research.robbertluit.be/development>

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

# STAP 6

> voeg volgende lijn toe bij crontabs (crontab -e in CMD/TERMINAL)
= * * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1

# STAP 7 (na opzet)

> 1. Crëer een admin (via /register) & log daarna in

> 2. Maak een wedstrijd aan in /dashboard -> wedstrijd

> 3. Maak een vraag aan /dashboard -> vragen

> 4. Maak 4 periodes /dashboard -> instellingen (periodes)

> 5. Voeg Managers toe /dashboard -> instellingen (excel ontvangers)

> 6. All done.

# Overview functionaliteiten:

> NIET INGELOGD

> > /

> > > call to action knop & afbeelding te winnen object

> > /competition

> > > korte uitleg & vorige winnaars

> > /competition/registration

> > > gegevens & antwoord

> > Extra feature bij /competition/questions

> > > knop die je laat zien of je kans maakt om te winnen of niet! :)

> INGELOGD (ADMIN FUNCTIONALITEIT)

> > /dashboard

> > > overzicht verschillende admin mogelijkheden

> > /competition/edit

> > > aanmaken/aanpassen wedstrijd

> > /competition/questions

> > > overzicht vraag + knop voor te editten

> > /competition/participants

> > > Overzicht alle deelnemers

> > > Mogelijkheid tot mail versturen naar email managers

> > > download excel file van alle deelnemers

> > > diskwalificeren van deelnemer, kans ontnemen om te winnen, verwijderen deelnemer

> > /instellingen

> > > Email managers instellen (die deelnemerslijst ontvangen)

> > > periodes aanmaken & aanpassen

> > > Na dat er een winnaar is gekozen komt deze hier te zien bij de periode
