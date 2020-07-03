<!-- Maak een html formulier om een nieuwe te laat melding te versturen naar insert.php -->
<?php
include('include/header.php');
?>

<form method="POST" action="insert.php">
    <label>Student naam:</label><br>
        <input type="text" id="student-naam" name="student_name"><br><br>
    <label>Student klas</label><br>
        <select id="student-class-select" name="student_class">
            <option>9A</option>
            <option>9B</option>
            <option>9C</option>
            <option>9D</option>
        </select><br><br>
    <label>Aantal minuten te laat</label><br>
        <select id="student-minutes-late" name="student_minutes-to-late">
            <?php
            for ($i = 0; $i <= 60; $i += 5)
            {
                ?>
            <option><?=$i?></option>
                <?php
            }
            ?>
        </select><br><br>
    <label>Reden:</label><br>
        <input type="text" id="student_reason" name="reason"><br><br>
    <input type="submit" value="Submit">
</form>

