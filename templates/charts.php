<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .container-chart {
            width: 550px;
            margin: auto;
        }

        #chart-container {
            width: 100%;
            height: auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    <title>Document</title>
</head>

<body>
    <h1>Hello</h1>
    <div class="container-chart">
        <div id="chart-container">
            <canvas id="bar-chart"></canvas>
        </div>
    </div>

    <script>
        $(function() {
            //get the bar chart canvas
            var cData = JSON.parse(`<?php echo $data; ?>`);
            console.log(cData);
            var ctx = $("#bar-chart");

            //bar chart data
            var data = {
                labels: cData.label,
                datasets: [{
                    label: cData.label,
                    data: cData.data,
                    backgroundColor: [
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                        "#1D7A46",
                        "#CDA776",
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                    ],
                    borderColor: [
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                    ],
                    borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
                }]
            };

            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Monthly Registered Users Count",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };

            //create bar Chart class object
            var chart1 = new Chart(ctx, {
                type: "pie",
                data: data,
                options: options
            });

        });
    </script>
</body>

</html>