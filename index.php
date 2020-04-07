<?php


$date = '2020-01-01';
$end = '2020-01-' . date('t', strtotime($date)); //get end date of month

?>

<!DOCTYPE html>
<html>
<head>
	<title>Charts</title>
<link rel="stylesheet" type="text/css" href="sty.css">

</head>
<body>


<!-- <table>
    <tr>
    <?php while(strtotime($date) <= strtotime($end)) {
        $day_num = date('d', strtotime($date));
        $day_name = date('l', strtotime($date));
        $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        echo "<td>$day_num <br/> $day_name</td>";
    }
    ?>
    </tr>
</table>
 -->
<figure class="highcharts-figure">
    <div id="container" style="height: 600px; width: 1000px"></div>
    <p class="highcharts-description">
        A basic column chart compares rainfall values between four cities.
        Tokyo has the overall highest amount of rainfall, followed by New York.
        The chart is making use of the axis crosshair feature, to highlight
        months as they are hovered over.
    </p>
</figure>
<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script> -->

<script type="text/javascript" src="highcharts.js"></script>
<script type="text/javascript" src="exporting.js"></script>
<script type="text/javascript" src="export-data.js"></script>
<script type="text/javascript" src="accessibility.js"></script>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line',
       
       
    },
    title: {
        text: 'Issues'
    },
    
    xAxis: {
        categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12','13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24','25','26','27','28','29','30','31'],
      

    },
    yAxis: {
        title: {
            text: 'Volumes(1000)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'No Error',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6,7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6,7.0, 6.9, 9.5, 14.5, 18.4, 21.5,21.6]
    }, {
        name: 'Error',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8,3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8,3.9, 4.2, 5.7, 8.5, 11.9, 15.2,15.3]
    }, {
        name: 'Office 2016 licensing',
        data:  [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8,3.9, 4.2, 5.7, 8.5, 11.9, 15.2,15.3,11.4,12.0,22.0,11,25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name:'Others',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8,3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 8.5, 11.9, 15.2,15.3,11.4,12.0,22.0,11,25.2, 26.5]
    }]
});
</script>
</body>
</html>