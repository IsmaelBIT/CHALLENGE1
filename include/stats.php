<br><br><br>

<?php
//Hoogste aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlHoogste = "SELECT...";
$hoogste = haalStatistiek($sqlHoogste);

//Gemiddeld aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlGemiddeld = "SELECT...";
$gemiddeld = haalStatistiek($sqlGemiddeld);

//Totaal aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlTotaal = "SELECT...";
$totaal = haalStatistiek($sqlTotaal);
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th rowspan="2">Statistieken</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Hoogste aantal minuten te laat</td>
            <td><?php //echo $hoogste; ?></td>
        </tr>
        <tr>
            <td>Gemiddeld aantal minuten</td>
            <td><?php //echo $gemiddeld; ?></td>
        </tr>
        <tr>
            <td>Totaal aantal minuten</td>
            <td><?php //echo $totaal; ?></td>
        </tr>
    </tbody>
</table>

<br><br><br>