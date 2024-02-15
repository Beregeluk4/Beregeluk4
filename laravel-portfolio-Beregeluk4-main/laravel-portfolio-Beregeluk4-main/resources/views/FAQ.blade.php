<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<x-ui.navbar>
    <x:slot:brand>
        <x-ui.navbar-item route="home">
            <i class="fa-solid fa-list-check"></i>&nbsp;TaskITEasy
        </x-ui.navbar-item>
    </x:slot:brand>

    <x-ui.navbar-item route="home">Home<i class="fa fa-home" aria-hidden="true"></i></x-ui.navbar-item>
    <x-ui.navbar-item route="profile">Profile<i class="fa fa-user" aria-hidden="true"></i></x-ui.navbar-item>
    <x-ui.navbar-item route="dashboard">Dashboard<i class="fa fa-bullseye" aria-hidden="true"></i></x-ui.navbar-item>
    <x-ui.navbar-item route="FAQ">FAQ<i class="fa fa-comments" aria-hidden="true"></i></x-ui.navbar-item>
    <x-ui.navbar-item route="blog">Blog<i class="fa fa-comments" aria-hidden="true"></i></x-ui.navbar-item>
</x-ui.navbar>

{{-- Content --}}
<section class="hero  is-medium  is-bold is-primary">
    <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
    ></div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">

            <div class="column is-8-desktop is-12-tablet">

                <div class="content">
                    <h1>populaire vragen</h1>
                    <h2>Hoe kan je een document scannen en doorsturen naar je laptop in de HZ?</h2>
                    <p>
                        Hierbij loop je naar 1 van de printers binnen de HZ. Hierbij meld je jezelf aan met je pasje of
                        door je mail-adress en wachtwoord te gebruiken. Nadat je dit gedaan hebt leg je wat je wilt gaan
                        scannen op de feeder of glazen plaat. Daarna druk je op scannen en op start. Nadat dit gedaan is
                        wordt het document verstuurd naar je mail-adress. Vergeet nadat je dit gedaan hebt jezelf niet af
                        te melden.
                    </p>
                    <h2>Hoe kan je een document printen vanaf je laptop binnen de HZ</h2>
                    <p>
                        Je kan binnen de hz gebruik maken van de printers die te vinden zijn in de hokjes waar ook de koffie
                        en thee apparaten staan. Voor deze printers te gebruiken heb je een actief HZ account nodig. Indien
                        je dit hebt ga je naar de volgende website: https://hz.mynetpay.nl/. Indien je wilt printen moet je
                        geld op je account hebben staan. Dit kan je doen door op de site zelf geld te zetten of door het op
                        je pasje te zetten wat in het HZ gebouw kan of op de website van HZ zelf. Indien er genoeg geld op
                        je account staat ga je naar Mobility print en selecteer je het besturingssysteem dat van toepassing
                        is. Daarna upload je het bestand en print je dit bestand af op een printer binnen de HZ.
                    </p>
                    <h2>Hoe kan ik iets kopen (bijvoorbeeld wanneer je je opgeefd voor de it introductie evenement) op de hz web shop?</h2>
                    <p>
                        Hierbij ga je naar de HZ website en in je persoonlijk menu vindt je de webshop. Hier klik je dan
                        op en dan wordt je doorgestuurd naar de site van de webshop. Hierbij vind je dan de kopjes HZ,
                        HZ cult en HZ sport. Hierbij kan je onder deze kopjes de verschillende activiteiten en kledingen
                        zien. Deze kun je dan kopen door in je winkelwagen te zetten en af te rekenen.
                    </p>
                    <h2>Hoe kan je een ruimte reserveren in het gebouw?</h2>
                    <p>
                        Hierbij ga je naar de HZ website waarbij je in je persoonlijk menu de Selfservice Portal moet
                        zoeken en het ook handig is dat je deze toevoegd aan je persoonlijk menu. Nadat je dit gevonden
                        hebt klik je erop en wordt je doorverwezen naar de site. Hier zie je dan een aantal vakjes waarbij
                        er 1 is met de text maak een reservering. Hier druk je dan op en dan druk je op reserveer een ruimte.
                        Dan klik je op de pagina (rechtsboven) op een blauwe knop genaamd reserveer een ruimte. Daarna kun
                        je aangeven welke ruimte je wilt reserveren en volg je alle aangegeven stappen op. Hierna heb je een
                        ruimte gereserveerd en kan je er gebruik van maken.
                    </p>
                    <h2>Wat zijn de instructies als je met de auto wilt parkeren bij de hz parking?</h2>
                    <p>
                        Gratis dichtbij parkeren Gratis parkeren is mogelijk op het parkeerterrein van de Poelendaelesingel
                        12 in Middelburg. Dit is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk
                        om direct bij het HZ-pand te parkeren. Er is wel een invalideplaats beschikbaar direct naast het
                        HZ-pand aan Het Groene Woud 1-3. Parkeerterrein Poelendaelesingel Bij de slagbomen van het parkeerterrein
                        Poelendaelesingel is een bel aanwezig. Na het passeren van de slagboom volg je de borden naar de
                        HZ-parkeerplaatsen, gemarkeerd met een wit bordje met het HZ-logo. Met HZ-pas of aanbellen Studenten
                        en medewerkers kunnen enkel op vertoon van een HZ-pas het terrein betreden, gasten kunnen aanbellen
                        bij de slagboom. Looproute naar de HZ-locatie Vanaf de parkeerplaats aan de Poelendaelesingel kun
                        je via de voetgangerstunnel de HZ bereiken.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <footer><i class= "fa fa-copyright"></i> 2024 - Renzo Debeer</footer>
        </div>
    </div>
</footer>

</body>
</html>
