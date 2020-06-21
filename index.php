<?php
include('include/header.php');
require('include/functions.php');
?>

<body>
    <main style="width: 900px; margin: 20px auto;">
        <?php
        // alle gegevens uit de table worden opgehaald en in de array $students gestopt
        $students = haalAllesOp();
        ?>
        <h4>Overzicht studenten die te laat waren</h4>
        <table class="table table-striped">
            <tr>
                <th nowrap>Naam student</th>
                <th>Klas</th>
                <th nowrap>Minuten te laat</th>
                <th>Reden te laat</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            foreach ($students as $student) { ?>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <?php
                    // <td> Als een student meer dan 30 minuten te laat komt moet de cel de class 'ergtelaat' krijgen. Anders is de class 'telaat'

                    ?>
                   
                    </td>
                    <td>
                        
                    </td>
                    <td>Verwijderknop</td>
                </tr>
            <?php
            } // einde foreach 
            ?>
        </table>
        <br>
        <a href="nieuw.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a>


        <!-- Hieronder komt de statistieken tabel van stats.php -->
        

    </main>

</body>

</html>