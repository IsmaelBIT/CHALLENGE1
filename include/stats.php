<br><br><br>

<?php
//Hoogste aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlHoogste = "SELECT MAX(aantal_minuten) FROM `te_laat`;";
$hoogste = haalStatistiek($sqlHoogste);
$statistiek_key['hoogste'] = array_keys($hoogste);

//Gemiddeld aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlGemiddeld = "SELECT AVG(aantal_minuten) FROM `te_laat`;";
$gemiddeld = haalStatistiek($sqlGemiddeld);
$statistiek_key['gemiddeld'] = array_keys($gemiddeld);

//Totaal aantal minuten te laat gebruik voor het resultaat de alias 'statistiek' in je query
$sqlTotaal = "SELECT SUM(aantal_minuten) FROM `te_laat`;";
$totaal = haalStatistiek($sqlTotaal);
$statistiek_key['totaal'] = array_keys($totaal);
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
            <td><?php echo $hoogste[$statistiek_key['hoogste'][0]]; ?></td>
        </tr>
        <tr>
            <td>Gemiddeld aantal minuten</td>
            <td><?php echo $gemiddeld[$statistiek_key['gemiddeld'][0]]; ?></td>
        </tr>
        <tr>
            <td>Totaal aantal minuten</td>
            <td><?php echo $totaal[$statistiek_key['totaal'][0]]; ?></td>
        </tr>
    </tbody>
</table>

<br><br><br>