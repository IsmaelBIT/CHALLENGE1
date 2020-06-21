# Challenge - Te Laat Registratie App

- [Challenge - Te Laat Registratie App](#challenge---te-laat-registratie-app)
  - [Modules](#modules)
  - [Inleiding](#inleiding)
  - [Userstories](#userstories)
  - [Leerdoelen](#leerdoelen)
  - [Voorbereiding](#voorbereiding)
  - [Fases](#fases)
    - [1. Plannen](#1-plannen)
      - [Opdracht:](#opdracht)
    - [2. Ontwerpen](#2-ontwerpen)
      - [Opdracht:](#opdracht-1)
    - [3. Realiseren](#3-realiseren)
      - [Opdracht:](#opdracht-2)
    - [4. Testen](#4-testen)
    - [5. Verbeteren](#5-verbeteren)
      - [Opdracht:](#opdracht-3)
    - [6. Presenteren](#6-presenteren)
  - [Eindresultaat](#eindresultaat)
  - [Bronnen](#bronnen)

## Modules

Deze Challenge omvat lesstof zoals die is behandeld in de onderstaande modules:
   - PHP-BASIC
   - PHP-ADVANCED
   - MYSQL-BASIC
   - DATABASE-DESIGN

## Inleiding

De opdrachtgever, een ROC ergens in nederland, heeft in samenwerking met een externe ontwikkelaar een Te Laat registratie applicatie ontwikkeld. De ingehuurde ontwikkelaar heeft ver buiten de gestelde deadline een eerste versie van de app afgeleverd waarbij sommige functionaliteit nog niet eens werkt. De opdrachtgever heeft vanwege het niet houden aan de planning en *vooral* het niet tijdig communiceren daarover de beslissing genomen het project over te dragen aan een andere ontwikkelaar. Jij, als zelfstandige ontwikkelaar, hebt na een eerste overleg de opdracht gekregen om dit project tot een goede einde te brengen!

## Userstories

1. Als gebruiker wil ik een overzicht zien van alle studenten die te laat zijn gekomen zodat ik ze daarop kan aanspreken.
2. Als gebruiker wil ik dat als een student te laat komt ik dit in kan voeren in de applicatie.
3. Als gebruiker wil ik in het overzicht van te late studenten kunnen zien welke studenten meer dan 30 minuten te laat waren zodat ik dit kan melden bij hun SLB'er.
4. Als gebruiker wil ik meldingen van studenten die te laat zijn kunnen verwijderen uit de applicatie zodat studenten die met een geldige reden te laat waren niet meegenomen worden in de statistieken.
5. Als gebruiker wil ik inzicht hebben in hoeveel minuten onze studenten maximaal, in totaal en gemiddeld te laat komen zodat ik inzicht heb in de mate van te laat komen onder onze studenten.

## Leerdoelen

1. [ ] Ik kan een planning maken op basis van aangeleverde userstories.
2. [ ] Ik kan een ERD maken op basis van een bestaande niet genormaliseerde database.
3. [ ] Ik kan in PHP een multidimensionale array uitlezen en tonen op het scherm
4. [ ] Ik kan in PHP een zelfgeschreven database query uitvoeren
5. [ ] Ik kan een HTML formulier maken en de inhoud daarvan via een PHP script in de database opslaan.

## Voorbereiding

Voor je aan de slag kunt met dit project is het belangrijk dat je een lokale omgeving hebt draaien waarin je je code kan testen.
1. Clone de repository in een submap van je `htdocs` map van Xampp.
2. Maak in PhpMyAdmin een nieuwe database aan genaamd `challenge-telaatapp` en importeer het `db-export.sql` bestand uit de map `db-export`. 
3. Start Apache en MySQL vanuit je Xampp controlepaneel
4. Ga in je browser naar localhost/\<geclonede repository map> om te bevestigen dat alles werkt. Mocht je foutmeldingen krijgen controleer dan of je de database wel juist hebt genoemt.

## Fases

### 1. Plannen

Om te beginnen wil de opdrachtgever graag weten wanneer het project is afgerond. Om dit inzichtelijk te maken vraagt hij van jou een grove planning. Deze kun je pas maken als je een overzicht hebt van welke taken er allemaal moeten worden uitgevoerd. Je doet dit aan de hand van de wensen vanuit de opdrachtgever (die voor je vertaald zijn naar userstories) en een eerste onderzoek naar de bestaande code en het commentaar dat daarin staat.  

#### Opdracht:
1. In de map documentatie van deze repository staat een word bestand genaamd `planning.docx`. Vul deze verder aan zodat er een sluitende planning ontstaat. Begin met het bestuderen van de userstories, de code en het werkende voorbeeld op [Stampwerk.nl](http://stampwerk.nl). Bedenk bij elke userstory welke taken daarbij zouden kunnen horen en voeg die toe aan de takenlijst in het document. *Het document bevat voorbeeld tekst, deze moet je verwijderen.*

>Kijk op [Stampwerk.nl](http://stampwerk.nl) voor een voorbeeld van hoe de uiteindelijke applicatie eruit moet zien en hoe deze moet werken. 

   **verwacht eindresultaat:** een .PDF export van het ingevulde planningsdocument. (gecommit en gepushed naar de Challenge repository zoals je dat ook doet voor code).

### 2. Ontwerpen

De opdrachtgever heeft het gevoel dat de database zoals die nu gebruikt wordt voor de applicatie niet helemaal efficient is ingericht. De vorige ontwikkelaar heeft dit zonder verdere documentatie opgezet dus de vraag vanuit de opdrachtgever is of jij wilt kijken naar de bestaande database en een ERD wilt maken. Deze hoeft niet helemaal direct te worden geimplementeerd want de prioriteit ligt nu volgens de opdrachtgever bij het afkrijgen van een volledig werkende applicatie. 

#### Opdracht:
1. Maak een genormaliseerde ERD van de bestaande database. (Verschillende gegevens uit de database kunnen in het huidige ontwerp dubbel worden opgeslagen in de database. Zorg ervoor dat in je nieuwe ontwerp deze onnodige opslag vermeden wordt).

**Verwacht eindresultaat:** Een export in .PDF formaat van een in Lucidcharts gemaakte ERD. Noem het export bestand `database_erd_v1.pdf` en plaats deze in de `documentatie` map.

### 3. Realiseren 

In deze fase ga je op basis van de userstories aan de slag met het stap voor stap implementeren van jou oplossingen in de code van de applicatie. Onderstaande informatie

#### Opdracht:
1. Begin bij de eerste userstory en de taken die je daarbij hebt opgeschreven in `planning.docx`
2. Bij de eerste userstory, waar je een overzicht moet genereren van een tabel uit de database, staat een variatie van de onderstaande code:
   ```php
   foreach ($students as $student) {
      //door jou in te vullen code
   } 
   ```
   Hierin is `$students` een multidimensionale array die je terug krijgt uit de database. Je hebt dit nog niet gehad in de voorgaande modules en dit is daarom al voor je ingevuld. Wat je moet weten om hiermee te kunnen werken is:
   1. `$students` en `$student` zijn beiden arrays.
   2. `$students` is een numerieke array, gevuld met `$student` arrays.
   3. `$student` is associatieve array waarvan de keys overeenkomen met de namen van de kolommen in de database tabel en waarvan de waardes overeenkomen met de gegevens zoals die in een enkele rij staan in de database tabel.
   4. Dus `$students` komt overeen met een tabel uit de database en `$student` komt overeen met een enkele rij uit die tabel.
   5. Zie onderstaande code met commentaar. 

   ```php
   var_dump($student[0]); 
   // toont de informatie uit de eerste rij van de database tabel

   foreach ($students as $student) {

      echo $student['naam_student']; 
      // toont de inhoud van de naam_student kolom in de database 
      // (dus alle namen van de student worden achter elkaar getoont).
   } 
   ```
   > **TIP:** Om een goed beeld te krijgen van de opbouw van de `$students` multidimensionale array, doe een var_dump() van de `$students` array en vergelijk de inhoud daarvan met de database tabel.
3. Als je de code voor een userstory werkend (of deels werkend) hebt maak dan een commit (met een goed beschrijvende commit message) en push je code naar Github.

### 4. Testen

In deze fase ga je stap voor stap de userstories af en test je of de door jouw afgemaakte applicatie voldoet aan de gestelde eisen. In de map documentatie van deze repository staat een bestand genaamd `testen.docx`. Doorloop de userstories, kijk of jouw code werkt zoals omschreven staat in de userstory en noteer de door jou gevonden bevindingen in het document. *Het document bevat voorbeeld tekst, deze moet je verwijderen.*

**Verwacht eindresultaat:** een .PDF export van het testen.docx document. (gecommit en gepushed naar de Challenge repository zoals je dat ook doet voor code).

### 5. Verbeteren

Nu je een voor jou eerste werkende versie hebt en die ook getest hebt zijn er wellicht punten die nog moeten worden opgepakt. 

#### Opdracht:
1. Voer eventuele verbeteringen door in de code. 

### 6. Presenteren

Bereidt een Powerpoint presentatie voor waarin je de applicatie presenteert, zorg er voor dat de onderstaande punten minimaal aan bod komen:
   1. Beschrijf jou werk proces tijdens deze Challenge (denk hierbij aan dingen als: hoe ben je begonnen, waar liep je allemaal tegenaan, hoe heb je eventuele problemen opgelost, wat ging er goed, wat kan er beter en hoe zou je dat volgende anders doen)
   2. Presenteer de werkende applicatie zoals je dat zou doen bij de oplevering aan de opdrachtgever
   3. Zorg ervoor dat er in je presentatie ruimte is voor vragen vanuit het publiek

Voeg het Powerpoint bestand (met als naam presentatie.pptx) van je presentatie toe aan de `documentatie` map en vraag een Challenge gesprek aan binnen Eagle.

## Eindresultaat

Als eindresultaat heb je een repository met werkende code + onderstaande bestanden in documentatie map:
1. planning.pdf
2. database_erd_v2.pdf
3. testen.pdf
4. presentatie.pptx

## Bronnen

Zie voor een specifiek onderwerp de bronnen zoals die staan in de README.md van de module waarin dat onderwerp aan bod is gekomen.