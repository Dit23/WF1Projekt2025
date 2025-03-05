<?php
include './shared/global.php';
global $pdo;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digitaler Schulplaner Konzept</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include './shared/head.php';
    ?>
</head>
<div class="header">
<?php
include './shared/header.php';
?>
</div>
<body class="container" id="index-container">
<div class="table-of-contents">
    <ul id="table-of-contents-ul">
        <li>test1</li>
        <li>a</li>
    </ul>
</div>
<div class="inhalt">
    <div class="card">
        <div class="card-header">
            <h1>Willkommen!</h1>
        </div>
        <div class="card-body">
            <p>Willkommen auf der Startseite des digitalen Schulplaners.</p>
        </div>
    </div>
    <h2>5.2 Schul- und Hausordnung</h2>
    <p>Das Berufskolleg Ostvest versteht sich als Ort des gemeinsamen Lernens. Erfolgreiches Zusammenleben und -arbeiten in unserer Schule sind abhängig vom Wohlbefinden aller Mitglieder der Schulgemeinschaft. Daher sind alle Schüler*innen, Lehrkräfte sowie Eltern und Ausbildende nachdrücklich aufgerufen, bei der demokratischen Gestaltung unseres Schullebens zusammenzuwirken und Verantwortung zu übernehmen. Diese Schul- und Hausordnung schafft die Voraussetzungen für die gemeinsame Arbeit am Berufskolleg Ostvest. Hierbei sind folgende Grundsätze wichtig:</p>
    <ul>
        <li>gegenseitige Achtung der Würde der*des Anderen, Rücksichtnahme und Hilfsbereitschaft,</li>
        <li>Schutz aller am Schulleben beteiligter Personen und ihres persönlichen Eigentums,</li>
        <li>Unterstützung des schulischen Bildungs- und Erziehungsauftrages,</li>
        <li>schonende Behandlung von Einrichtungen, Unterrichtsmitteln und sonstigen schulischen Anlagen,</li>
        <li>Rücksichtnahme gegenüber der unmittelbaren Nachbarschaft der Schule.</li>
    </ul>
    <h3>1. Verhalten in der Schule</h3>
    <p>In der Schule sowie im späteren Berufsalltag sind respektvolle Umgangsformen sowie das Einhalten folgender Verhaltensregeln selbstverständlich:</p>
    <ul>
        <li>Alle am Schulleben Beteiligten gehen freundlich und höflich miteinander um.</li>
        <li>Zum Unterrichtsbeginn sind alle pünktlich in den Unterrichtsräumen. Alle schulischen Gegenstände der guten Ausstattung sind schonend zu behandeln, damit die Einrichtung für nachfolgende Klassen erhalten bleibt. Die raumverantwortlichen Lehrkräfte melden Beschädigungen über das Sekretariat an die Schulleitung und das Haustechnikteam. Bei IT-Problemen nutzen alle Lehrkräfte das Ticketsystem.</li>
        <li>In besonders ausgestatteten Räumen (Computer- und Präsentationsräume, Werkstätten, Sporthalle u. a.) ist eine erhöhte Sorgfaltspflicht im Umgang mit den Geräten und Einrichtungsgegenständen erforderlich. Die Benutzerordnungen einzelner Räume sind zu beachten. Den Anweisungen der Lehrkräfte ist unbedingt Folge zu leisten. Der Schulträger behält sich vor, bei mutwilligen Verletzungen der Sorgfaltspflicht ggf. Schadenersatzansprüche zu stellen.</li>
        <li>Alle am Schulleben Beteiligten sind für die Sauberkeit im Schulgebäude und auf dem Schulgelände sowie in den angrenzenden Wohngebieten mitverantwortlich. Sie helfen, die Sauberkeit zu erhalten und nutzen für den Müll ausschließlich die entsprechenden Abfallbehälter.</li>
        <li>Die Teilnahme am Reinigungsdienst gehört zu den Pflichten der Schüler*innen. Die bedarfsgerechte Reinigung erfolgt klassenweise einmal pro Tag und wird von Mitarbeitenden des Haustechnikteams beaufsichtigt.</li>
        <li>Die Klassenräume sind nach jeder Unterrichtsstunde sauber zu verlassen. Bei Bedarf sind die Räume zu fegen und eine einheitliche Sitzordnung ist herzustellen. Nur so kann eine Reinigung der Klassenräume durch das Reinigungsteam der Schule gewährleistet werden.</li>
        <li>Ausdrücklich verboten ist das Aufzeichnen von Ton- oder Bildsequenzen aus dem Schulleben, auch wenn scheinbar die Persönlichkeitsrechte Dritter nicht verletzt werden. Dies umfasst ebenso die Aufzeichnung von Videokonferenzen und Online-Unterrichtsformen. Verstöße können schulische Ordnungsmaßnahmen und darüber hinaus zivilrechtliche Konsequenzen zur Folge haben.</li>
        <li>Auf dem Schulgelände wird Aufsicht geführt. Den Anweisungen der aufsichtführenden Lehrkräfte ist Folge zu leisten.</li>
        <li>Während der Pausen und Freistunden dürfen die Lernenden das Schulgelände verlassen. Allerdings unterliegen sie damit nicht mehr der Aufsichtspflicht der Schule und somit besteht in der Regel kein Versicherungsschutz mehr.</li>
        <li>Aus Rücksicht auf die Nachbarschaft und Gäste, ist der Eingangsbereich zum Haupteingang freizuhalten.</li>
        <li>Die Eingänge zu den Gebäuden sind ab 07:00 Uhr geöffnet. Die erste Unterrichtsstunde beginnt um 07:30 Uhr.</li>
        <li>Das Schulbüro ist für Schüler*innen nur in den Pausenzeiten geöffnet.</li>
    </ul>
    <h3>2. Sicherheit in der Schule</h3>
    <ul>
        <li>Es ist untersagt, Waffen, waffenähnliche und andere gefährliche Gegenstände (Abwehrsprays, Feuerwerkskörper, Knallkörper, …) auf dem Schulgelände bei sich zu führen. Gegenstände, die den Unterrichtsablauf beeinträchtigen oder gefährden können sowie Tiere dürfen nicht mit in die Schule gebracht werden.</li>
        <li>Das Mitführen und Verbreiten von Materialien mit pornographischem und gewaltverherrlichendem Inhalt in jeglicher Form ist untersagt.</li>
        <li>Jede Lehrkraft hat das Recht, die mitgeführten (Schul-)Taschen oder auch sonstige mitgeführte Gegenstände bei begründetem Verdacht auf mitgeführte Gegenstände, die nach dieser Schulordnung nicht gestattet sind, zu durchsuchen. Jede Lehrkraft ist berechtigt, diese Gegenstände dauerhaft sicherzustellen.</li>
        <li>Das Schutzkonzept gegen sexualisierte Gewalt ist in allen Punkten verbindlich.</li>
        <li>Ein Verstoß gegen die oben genannten Regeln sowie jede Form von Gewalt, Bedrohung oder Mobbing wird umgehend geahndet und kann strafrechtliche Konsequenzen nach sich ziehen.</li>
    </ul>
    <h3>3. Regelungen für den Unterricht</h3>
    <ul>
        <li>Während der Pausen müssen die Unterrichtsräume verlassen und abgeschlossen werden. Zum Aufenthalt stehen den Schüler*innen das Bistro und der Aufenthaltsraum im Erdgeschoss von Gebäude 3, der Schulhof und die Flure in allen Etagen der Gebäude zur Verfügung.</li>
        <li>Warme Speisen, Mittagsgerichte oder Salate dürfen nur im Schüler*innenaufenthaltsraum oder auf dem Schulhof verzehrt werden.</li>
        <li>Essen während des Unterrichts ist untersagt. In Absprache mit der Lehrkraft können von dieser Regel Ausnahmen gestattet werden.</li>
        <li>Für Fachräume gelten ggf. besondere Regelungen, die in den entsprechenden Räumen aushängen.</li>
        <li>Änderungen des regulären Stundenplans sind der Vertretungsplan-App WebUntis zu entnehmen.</li>
        <li>Ist eine Klasse 10 Minuten nach Unterrichtsbeginn noch ohne Lehrkraft, gibt der/die Klassensprecher*in dies im Sekretariat an.</li>
        <li>Bei Distanz-Unterricht mit Videokonferenz gilt wie im regulären Unterricht Anwesenheitspflicht, Kamera und Mikro sollten gemäß Anweisung der Lehrkraft an- oder ausgeschaltet sein (§ 8 Abs. 2 und § 120 Abs. 5 SchulG).</li>
        <li>Der Einsatz privater Endgeräte der Schüler*innen (Tablets, Mobiltelefone, o. ä.) obliegt der jeweiligen Fachlehrkraft. Die zeitweise Wegnahme der Geräte ist der Lehrkraft gestattet.</li>
        <li>Klassen-, Bildungsgang- und Abteilungskonferenzen können weitergehende Maßnahmen für ihre Schüler*innen festlegen.</li>
    </ul>
    <h3>4. Entschuldigungen, Unterrichtsbefreiung, Beurlaubung</h3>
    <ul>
        <li>Beim Fernbleiben vom Unterricht ist das Sekretariat unverzüglich zu informieren.</li>
        <li>Wenn ein*e Schüler*in aus triftigen Gründen während eines Unterrichtstages den Unterricht verlassen muss, hat sie oder er sich bei einer Lehrkraft abzumelden.</li>
        <li>Wird in der Fehlzeit eine angekündigte schriftliche Leistungsüberprüfung oder eine Klausur durchgeführt, so ist das Nachschreiben durch Vorgaben der Bildungsgänge geregelt.</li>
        <li>Beurlaubungen, auch aus betrieblichen Gründen, müssen i. d. R. spätestens eine Woche vorher bei der Klassenleitung beantragt werden.</li>
        <li>Für die Befreiung vom Sportunterricht (z. B. bei Krankheiten) ist die Sportlehrkraft zuständig. Die Klassenleitung wird informiert.</li>
        <li>Für die Befreiung vom Religionsunterricht gelten besondere Bestimmungen.</li>
    </ul>
</div>
</body>
<style>
    #index-container {
        display: grid;
        grid-template-columns: 20% auto;
        grid-template-rows: auto auto auto;
    }

    .header {
        grid-row: 1 / 2;
        grid-column: 1 / 3;
    }

    .footer {
        grid-row: 3 / 4;
        grid-column: 1 / 3;
    }

    .table-of-contents {
        grid-row: 2 / 3;
        grid-column: 1 / 2;
        padding: 10px;
        border-right: 1px solid #ccc;
    }

    .table-of-contents ul {
        position: sticky;
        top: 0;
    }

    .inhalt {
        grid-row: 2 / 3;
        grid-column: 2 / 3;
        padding: 10px;
    }

    .table-of-contents ul {
        color: #007bff;
    }
</style>
<div class="footer">
<?php
include './shared/footer.php';
?>
</div>
</html>