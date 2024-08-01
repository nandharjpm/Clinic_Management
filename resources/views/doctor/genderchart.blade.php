<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Distribution Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <div class="container">
        <h2>Gender Distribution of Patients</h2>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>

    <script>
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var patients = @json($patients);

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Gender');
            data.addColumn('number', 'Count');

            var genderCounts = {};
            patients.forEach(function (patient) {
                var gender = patient.patient_gender;
                if (genderCounts[gender]) {
                    genderCounts[gender]++;
                } else {
                    genderCounts[gender] = 1;
                }
            });

            for (var gender in genderCounts) {
                data.addRow([gender, genderCounts[gender]]);
            }

            var options = {
                title: 'Gender Distribution of Patients',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>
