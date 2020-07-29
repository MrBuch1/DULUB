@extends('layouts.app')
@component('components.navbar')@endcomponent

<div id="piechart" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Empresa', 'Vendas'],
      ['Cosan', 24.45],
      ['Petrobras', 22.33],
      ['Shell',  11.04],
      ['Dunax', 9.41],
      ['Iconic', 8.77],
      ['Outras', 24.00]
    ]);

    var options = {
      pieSliceText: 'value',
      title: 'Pocentagem de Vendas no Nordeste'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>