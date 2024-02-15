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
                    <h1>Mijn blog</h1>
                    <h2>SWOT analyse</h2>
                    <p>
                        Mijn sterke punten zijn: dat ik doorzettingsvormogen heb. Verder ben ik behulpzaam en wil ik zoveel
                        mogelijk andere helpen voor zover het mogelijk is. Daarnaast ben ik ook ambitieus waarbij ik 100%
                        voor iets wil gaan als het mij interesseert. Mijn valkuilen zijn: dat als het onderwerp me niet
                        intereseert ik sneller opgeef. Ik doe bij een groepproject meestal alles zelf omdat ik dan zeker
                        ben dat het goed gedaan word. Waardoor ik dan veel stress heb omdat ik alles ook perfect wil doen
                        en er eigenlijk te weinig tijd voor heb. Mijn kansen zijn: Om nieuwe dingen te leren aangezien ik
                        nog niet super veel weet. Daarnaast kan ik dus wel eventueel goed contact maken met andere studenten
                        die al wat meer ervaring hebben en zo dus om hulp kan vragen. Bij deze opleiding zal je ook veel met
                        andere mensen en met bedrijven moeten samenwerken waardoor je ook je connecties wat kunt vergoten binnen
                        het werkveld. Mijn risico`s zijn: Dat ik meestal alles alleen wil doen omdat ik dan zeker ben dat
                        het goed gedaan wordt en ook omdat meestal de rest van het groepje niet zoveel meewerkt. Hierdoor
                        leg ik teveel stress op mezelf waardoor ik het waarschijnlijk ook moeilijker heb en ga nadenken of
                        de opleiding niet te zwaar is. Daarnaast wil ik voor iedereen goed doen. Waardoor ik andere ga helpen
                        ook als ik zelf niet zoveel tijd meer heb om mijn opdrachten te maken.
                    </p>
                    <h2>Programeer ervaring</h2>
                    <p>
                        Ik heb nog geen programeer ervaringen en heb daarom online een paar cursussen gedaan om wat bekend
                        te raken met de basis die we nodig hebben voor de opleiding. Daarbij heb ik een paar uur bezig
                        geweest om de cursussen te maken en ben ik een beetje te weten gekomen wat het nu precies inhoud.
                        Verder zijn we ondertussen al zo'n maand bezig met school en heb ik geleerd hoe je een website kan
                        maken en wat er allemaal bij komt kijken. Verder heb ik geleerd wat het verleden van de computer
                        is en hoe het dus veranderd is met de jaren. Daarnaast heb ik nog geleerd hoe ik basis dingen kan
                        programmeren met java script.
                    </p>
                    <h2>Feedback van docent</h2>
                    <p>
                        Nadat ik 2 weken lang bezig ben geweest met mijn website te maken hebben we een evaluatie moment
                        gehouden waarbij we gingen kijken naar de website van andere studenten en docenten en andere
                        studenten bij mij gingen kijken om te zien wat er nog beter kon aan mijn website. Hierbij heb ik
                        voornamelijk dezelfde feedback gekregen. De feedback die ik het meeste heb gekregen is dat door de
                        achtergrond mijn tekst minder goed zichtbaar was. Dit had ik van te voren ook al door maar wist
                        nog niet hoe ik dit kon aanpassen dus heb als advies van een docent gekregen om een textarea aan
                        te maken en die doorschijnend te maken. Daarnaast had ik nog de tip gekregen om mijn uiterlijk van
                        de website in css te zetten en niet in html. Als laatste had ik nog meegekregen dat ik mijn website
                        moet kunnen draaien via xampp.
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
