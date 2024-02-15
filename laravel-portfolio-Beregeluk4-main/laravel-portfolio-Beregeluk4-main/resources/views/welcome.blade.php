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
                <x-ui.navbar-item route="home">TaskITEasy <i class="fa-solid fa-list-check"></i>&nbsp;
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
                            <h1>Mijn motivatie</h1>
                            <h2>Vooropleiding</h2>
                            <p>
                                Toen ik mijn middelbare opleiding had afgerond was ik aan het twijfelen om een opleiding
                                te volgen binnen de ICT of binnen de sport. Hierbij heb ik toen van mijn mentor te horen
                                gekregen dat hij dacht dat iets binnen sportbeter bij mij zou passen aangezien ik niet zo
                                goed stil kan zitten. Hierdoor heb ik ervoor gekozen om naar het cios te gaan. Tijdens de
                                opleiding ben ik blij dit ik voor die keuze heb gekozen maar was het niet echt helemaal
                                wat ik later wilde doen. Daardoor ben ik in mijn laatste jaar gaan nadenken en kijken wat
                                er nu wel bij mij zou passen en ben dan uiteindelijk op de opleiding ICT gekomen.
                            </p>
                            <h2>Hoe ben ik erop gekomen?</h2>
                            <p>
                                Ik ben op het idee gekomen door wat research te doen en door mijn familie. Dit komt
                                doordat mijn tante en vader al binnen de ICT werken en mijn neef met de opleiding bezig
                                is aan de AP in Antwerpen. Hierdoor heb ik al informatie kunnen vragen over wat het nu
                                allemaal inhoud en wat ze nu allemaal moeten doen. Daarnaast ben ik dan ook naar opendagen
                                gegaan bij de AP in Antwerpen en naar de HZ in Middelburg. Nadat ik deze opendagen had
                                gevolgd was ik wel zeker dat ik deze opleiding wilde doen.
                            </p>
                            <h2>Toekomst</h2>
                            <p>
                                Ik wist welke opleiding ik wilde doen. Ben ik gaan nadenken in welke richting ik binnen
                                de ICT zou willen gaan. Hierbij lijkt het mij leuk om de opleidingen te combineren door
                                ICT met sport te gaan combineren. Hierbij zou ik dan bijvoorbeeld met een bedrijf willen
                                samenwerken die gadgets ontwerpen voor voetbalclubs. Hierbij wil ik dus gaan leren hoe je
                                kan programeren met een computer om bijvoorbeeld een sporthorloge de gegevens te laten
                                opnemen en automatisch te koppelen met je telefoon. Hierbij wil ik dat sporters zichzelf
                                kunnen verbeteren en door de spullen die ik help te maken of zelf maak kunnen verbeteren
                                op een optimale manier.
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
