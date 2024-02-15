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

                <table id="tabel">

                    <thead>
                    <tr>
                        <th colspan="5">
                            <h1>examens dit schooljaar</h1>
                        </th>
                    </tr>
                    </thead>
                    <tr>
                        <td>Periode</td>
                        <td>Cursus</td>
                        <td>EC</td>
                        <td>Examen</td>
                        <td>Cijfer</td>
                    </tr>
                    <tr>
                        <td rowspan="6">1</td>
                        <td>CU75001V3</td>
                        <td>2.5EC</td>
                        <td>Portfolio based
                            assessment</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>CU75002V2</td>
                        <td>5</td>
                        <td> written exam</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>CU75003V1</td>
                        <td>5</td>
                        <td>Case study exam</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>CU75068V1</td>
                        <td>12.5</td>
                        <td>Criterium focused
                            assessment</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CU75054V1</td>
                        <td>1.25</td>
                        <td>Portfolio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CU75056V1</td>
                        <td>1.25</td>
                        <td>Portfolio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CU75004v1</td>
                        <td>10EC</td>
                        <td>presentation and Case study exam</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td rowspan="2">3</td>
                        <td>CU75008V1</td>
                        <td>5EC</td>
                        <td>case study exam</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CU75009V3</td>
                        <td>7.5EC</td>
                        <td> Criterium focused
                            assesment</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="3">4</td>
                        <td>CU75011V3</td>
                        <td>10EC</td>
                        <td>Criterium focused
                            assesment</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CU75055V1</td>
                        <td>1.25</td>
                        <td>Portfolio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CU75057V1</td>
                        <td>1.25</td>
                        <td>Portfolio</td>
                        <td></td>
                    </tr>

                </table>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <script>
                    function sumArrayUpTo(arrData, index) {
                        var total = 0;
                        for (var i = 0; i <= index; i++) {
                            if (arrData.length > i) {
                                total += arrData[i];
                            }
                        }
                        return total;
                    }

                    function showBurnDown(elementId, burndownData, scopeChange = []) {

                        var speedCanvas = document.getElementById(elementId);

                        Chart.defaults.global.defaultFontFamily = "Arial";
                        Chart.defaults.global.defaultFontSize = 14;

                        const totalHoursInSprint = burndownData[0];
                        const idealHoursPerDay = totalHoursInSprint / 9;
                        i = 0;

                        var speedData = {
                            labels: ["periode 1", "periode 2", "periode 3", "periode 4"],
                            datasets: [
                                {
                                    label: "Cijfer",
                                    data: burndownData,
                                    fill: false,
                                    borderColor: "#EE6868",
                                    backgroundColor: "#EE6868",
                                    lineTension: 0,
                                },
                                {
                                    label: "Ideal",
                                    borderColor: "#000000",
                                    backgroundColor: "#000000",
                                    lineTension: 0,
                                    borderDash: [5, 5],
                                    fill: false,
                                    data: [
                                        11.25, // 1
                                        22.50, // 2
                                        33.75, // 3
                                        45.00 // 4
                                    ]
                                },
                            ]
                        };

                        var chartOptions = {
                            legend: {
                                display: true,
                                position: 'top',
                                labels: {
                                    boxWidth: 100,
                                    fontColor: 'black'
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 60
                                    }
                                }]
                            }
                        };

                        var lineChart = new Chart(speedCanvas, {
                            type: 'line',
                            data: speedData,
                            options: chartOptions
                        });

                    }
                </script>


                <div style="width:800px;" id="chart"><canvas id="burndown43"></canvas></div>
                <script>
                    showBurnDown(
                        "burndown43",
                        //   1    2    3    4    5    6    7    8    9  10
                        [12.5, 22.5, 0, 0,], // cijfers gehaald
                        [11.25, 22.5, 33.75, 45, 60]  // gemiddeld nodig
                    );
                </script>
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
