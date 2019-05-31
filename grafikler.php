<!DOCTYPE HTML>
<html>
    <head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <title>Grafik inceleme - ChartJS</title>
        <script src="Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    datasets: [{
                            label: 'ürünler'
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>

<?php
$veritabanı= mysqli_connect("localhost", "root", "", "restoran");
$tur_ad= mysqli_query($veritabanı, "SELECT tur_ad FROM tur");
$toplam = mysqli_query($veritabanı, "SELECT toplam_satis FROM tur");
?>
<html>
    <head>
        <title>Grafik inceleme - ChartJS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="Chart.bundle.js"></script>
 
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($tur_ad)) { echo '"' . $b['tur_ad'] . '",';}?>],
                    datasets: [{
                            label: 'Türlere Göre Toplam Satış',
                            data: [<?php while ($p = mysqli_fetch_array($toplam)) { echo '"' . $p['toplam_satis'] . '",';}?>],
                        
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>