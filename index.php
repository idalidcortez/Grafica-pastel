<html>
  
  <! –– Código autónomo (completo sin base de datos externa en Mysql ni getData document, hecha con el código de Google Charts como práctica adicional)––>
  <head>
    <h1> Gráfica de Pastel: Idalid </h1> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Pantalla LED',     6],
          ['Mouse USB',      16],
          ['Disco duro 1TB',  14],
          ['Teclado USD', 8],
          ['Monitor LG 21',    6],
          ['Lector 3nStar', 20]
        ]);

        var options = {
          title: 'Productos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
