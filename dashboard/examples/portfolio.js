
var coins = [];
var amounts = [];
var btc = "<?php echo json_encode($btc); ?>";
var eth = "<?php echo $eth ?>";
var ltc = "<?php echo $ltc ?>";
var bch = "<?php echo $bch ?>";
var xrp = "<?php echo $xrp ?>";
var iot = "<?php echo $iot ?>";
var ada = "<?php echo $ada ?>";

$(document).ready(function(){
    
    <!--Load the AJAX API-->

      google.charts.load('current', {'packages':['corechart']});

    loadData();
    google.charts.setOnLoadCallback(drawChart);
})

function loadData(){
    coins.push("BTC");
    coins.push("ETH");
    coins.push("LTC");
    coins.push("BCH");
    coins.push("XRP");
    coins.push("ADA");
    coins.push("IOT");
    amounts.push(40);
    amounts.push(30);
    amounts.push(30);
    amounts.push(10);
    amounts.push(20);
    amounts.push(100);
}

function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Coin');
    data.addColumn('number', 'Amount');
    for(var i = 0; i<coins.length; i++){
        data.addRows([
          [coins[i], amounts[i]],
        ]);   
    }
    // Set chart options
    var options = {
                  colors: ['#FF3691', '#23B8E3', '#96FFFA', '#97059A', '#DC94CD', '#FFC4E8', '#7BCFED'],
                  pieHole: 0.65,
                   backgroundColor: 'transparent',
                  legend: {position:'bottom',textStyle:{fontSize:14}},
    pieSliceText: 'none',
    chartArea: {width:'100%',height:'65%',top:20}};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
}
