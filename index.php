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
<?php
include './shared/header.php';
?>
<body class="container">
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
    <h3>5. Persönliche Daten der Schüler*innen, Schüler*innenausweis</h3>
    <ul>
        <li>Alle Schüler*innen sind verpflichtet, einen durch die Schule erstellten Schüler*innenausweis auf dem Schulgelände mit sich zu führen.</li>
        <li>Veränderungen der persönlichen Daten (z. B. Namens- oder Adressänderungen, Wechsel des Ausbildungsbetriebes) sind unverzüglich der Klassenleitung mitzuteilen, die die Daten an das Sekretariat weiterleitet.</li>
        <li>Die Verarbeitung von personenbezogenen Daten durch das Berufskolleg Ostvest erfolgt auf der Grundlage der gesetzlichen Bestimmungen. Informationen zum Datenschutz erhalten Sie auf der Internetseite des Berufskollegs Ostvests.</li>
        <li>Alle Schüler*innen erhalten einen Zugang zur Arbeits- und Kommunikationsplattform IServ und damit eine eigene E-Mail-Adresse. Die Nutzung ist verpflichtend. (§ 8 Abs. 2 und § 120 Abs. 5 SchulG)</li>
    </ul>
    <h3>6. Rauchen, Alkoholkonsum, Drogen</h3>
    <ul>
        <li>Wir wirken auf eine suchtfreie Schule hin. Das Mitbringen von Cannabis und Alkohol ist nicht erwünscht.</li>
        <li>Der Konsum von Alkohol, Drogen und das Rauchen sind auf dem gesamten Schulgelände untersagt. Dies gilt auch für den Gebrauch von Verdampfern z. B. in Form von E-Zigaretten. Ausnahmen vom Alkoholverbot kann die Schulkonferenz beschließen.</li>
        <li>In einem Umfeld von 100 Metern besteht ebenfalls ein Konsumverbot von Cannabis.</li>
        <li>Der Handel mit verbotenen Mitteln ist auf dem Schulgelände generell untersagt und kommt in jedem Fall sofort zur Anzeige.</li>
    </ul>
    <h3>7. Werbung</h3>
    <ul>
        <li>Druckschriften (z. B. Werbe- und Informationszettel) und Plakate dürfen nur ver teilt oder aufgehängt werden, wenn die Schulleitung dies ausdrücklich gestattet.</li>
    </ul>
    <h3>8. Hausrecht, Besucher</h3>
    <ul>
        <li>Die Schulleiterin übt im Namen des Schulträgers das Hausrecht aus. Alle Lehrkräfte sowie die Sekretärinnen und das Haustechnikteam vertreten in ihren Bereichen die Schulleiterin in der Ausübung des Hausrechts.</li>
        <li>Die Schule ist kein öffentlicher Aufenthaltsort. Gäste dürfen nur nach Absprache mit der Schulleitung mitgebracht werden. Aus Gründen der allgemeinen Sicherheit müssen diese sich im Sekretariat oder beim Haustechnikteam anmelden.</li>
    </ul>
    <h3>9. Unfälle, Haftung</h3>
    <ul>
        <li>Unfälle, die auf dem Schulweg oder in der Schule passieren, müssen unverzüglich dem Sekretariat gemeldet werden.</li>
        <li>Für Sachschäden der Beteiligten besteht kein Versicherungsschutz durch den Schulträger.</li>
        <li>Jeder achtet auf seine privaten Wertgegenstände (z. B. Garderobe, Taschen und deren Inhalt). Der Schulträger übernimmt bei Beschädigung oder Verlust keinen Versicherungsschutz.</li>
        <li>Fundsachen sind beim Haustechnikteam oder im Sekretariat abzugeben.</li>
        <li>Wer im Schulgebäude oder auf dem Schulgelände einen Schaden anrichtet, haftet dafür nach den gesetzlichen Bestimmungen.</li>
    </ul>
    <h3>10. Verkehrssicherheit</h3>
    <ul>
        <li>Das Fahren mit Sport- und Freizeitgeräten (Fahrräder, Skateboards, Roller, Inlineskater usw.) auf dem Schulgelände ist verboten.</li>
        <li>Sämtliche Fahrzeuge sind ausschließlich auf den jeweils dafür vorgesehenen Parkflächen abzustellen. Sie sind durch geeignete Maßnahmen zu sichern. Jede*r Einzelne ist für den Schutz seines Eigentums selbst verantwortlich.</li>
        <li>Die Straßenverkehrs-Ordnung (StVO) untersagt es, den Motor unnötig laufen zu lassen.</li>
        <li>Das Versperren von Wegen (insbesondere Fluchtwege und Feuerwehrzufahrten) zieht ordnungsrechtliche Konsequenzen nach sich. Auch auf dem Schulgelände gilt die Straßenverkehrsordnung.</li>
        <li>Passanten und Nachbarn sind nicht zu behindern oder durch Lärm zu belästigen.</li>
    </ul>
    <h3>11. Verhalten bei Alarm</h3>
    <ul>
        <li>Fluchtwege, speziell Treppenhäuser, sind frei zu halten.</li>
        <li>Feuer- und Katastrophenalarm werden durch entsprechende Durchsagen signalisiert, den Anweisungen ist unbedingt Folge zu leisten.</li>
        <li>Im Brandfall ist das Schulgebäude auf dem angegebenen Fluchtweg sofort zu verlassen und die ausgewiesenen Sammelplätze sind aufzusuchen.</li>
        <li>Im Fall einer Lautsprecherdurchsage in der Schule ist den Anweisungen Folge zu leisten.</li>
    </ul>
    <h3>12. Verstöße gegen die Schul- und Hausordnung</h3>
    <ul>
        <li>Jegliche Verstöße gegen die Schul- und Hausordnung werden mit entsprechenden Mitteln des Schulgesetzes (SchulG) geahndet.</li>
    </ul>
    <h3>Auszug aus dem Schulgesetz für das Land NRW (SchulG)</h3>
    <h4>§ 31 Religionsunterricht</h4>
        <ol>
            <li>6) Eine Schülerin oder ein Schüler ist von der Teilnahme am Religionsunterricht auf Grund der Erklärung der Eltern oder bei Religionsmündigkeit des Schülers auf Grund eigener Erklärung befreit. Die Erklärung ist der Schulleiterin schriftlich zu übermitteln. Die Eltern sind über die Befreiung zu informieren. (Die besonderen Bestimmungen am Berufskolleg Ostvest sind zu beachten)</li>
        </ol>
    <h4>§ 43 Teilnahme am Unterricht und an sonstigen Schulveranstaltungen</h4>
    <ol>
        <li>Schülerinnen und Schüler sind verpflichtet, regelmäßig am Unterricht und an den sonstigen verbindlichen Schulveranstaltungen teilzunehmen. Die Meldung zur Teilnahme an einer freiwilligen Unterrichtsveranstaltung verpflichtet zur regelmäßigen Teilnahme mindestens für ein Schulhalbjahr.</li>
        <li>Ist eine Schülerin oder ein Schüler durch Krankheit oder aus anderen nicht vorhersehbaren Gründen verhindert, die Schule zu besuchen, so benachrichtigen die Eltern unverzüglich die Schule und teilen schriftlich den Grund für das Schulversäumnis mit. Bei begründeten Zweifeln, ob Unterricht aus gesundheitlichen Gründen versäumt wird, kann die Schule von den Eltern ein ärztliches Attest verlangen und in besonderen Fällen ein amtsärztliches Gutachten einholen.</li>
        <li>Für nicht schulpflichtige Schülerinnen gelten die Schutzfristen vor und nach der Geburt eines Kindes gemäß den Regelungen des Mutterschutzgesetzes.</li>
        <li>Die Schulleiterin oder der Schulleiter kann Schülerinnen und Schüler auf Antrag der Eltern aus wichtigem Grund bis zur Dauer eines Schuljahres vom Unterricht beurlauben oder von der Teilnahme an einzelnen Unterrichts- oder Schulveranstaltungen befreien. Längerfristige Beurlaubungen und Befreiungen bedürfen der Zustimmung der Schulaufsichtsbehörde. Dauerhafte Beurlaubungen und Befreiungen von schulpflichtigen Schülerinnen und Schülern zur Förderung wissenschaftlicher, sportlicher oder künstlerischer Hochbegabungen setzen voraus, dass für andere geeignete Bildungsmaßnahmen gesorgt wird.</li>
        <li>Alle Schülerinnen und Schüler sind während schulischer Veranstaltungen sowie auf den Wegen von und zu diesen im Rahmen der gesetzlichen Unfallversicherung nach dem SGB VII gegen Unfall versichert.</li>
    </ol>
    <h4>§ 47 Beendigung des Schulverhältnisses</h4>
    <ol>
        <li>Schulverhältnis endet, wenn</li>
            <ol>
                <li>die Schülerin oder der Schüler den Bildungsgang durchlaufen oder die Schulpflicht erfüllt hat und ein Abschluss- oder Abgangszeugnis erteilt wird,</li>
                <li>Eltern die Schülerin oder den Schüler schriftlich abmelden,</li>
                <li>ein weiteres Wiederholen der Klasse oder Jahrgangsstufe nicht mehr zulässig ist (§ 50 Abs. 5 Satz 2),</li>
                <li>die Schülerin oder der Schüler die für den Bildungsgang bestimmte Höchstausbildungsdauer erreicht hat,</li>
                <li>die Schulpflicht gemäß § 40 Abs. 2 ruht,</li>
                <li>die Schülerin oder der Schüler gemäß § 54 Abs. 4 dauernd vom Schulbesuch ausgeschlossen wird,</li>
                <li>die Schülerin oder der Schüler in eine andere Schule überwiesen wird,</li>
                <li>die nicht mehr schulpflichtige Schülerin oder der nicht mehr schulpflichtige Schüler trotz schriftlicher Erinnerung ununterbrochen 20 Unterrichtstage unentschuldigt fehlt,</li>
                <li>die Schülerin oder der Schüler auf Grund einer Ordnungsmaßnahme entlassen oder verwiesen wird.</li>
            </ol>
        <li>Eine schulpflichtige Schülerin oder ein schulpflichtiger Schüler kann nur in Verbindung mit einem nachgewiesenen Schulwechsel aus der besuchten Schule ausscheiden. § 53 Abs. 5 bleibt unberührt.</li>
    </ol>
</body>
<?php
include './shared/footer.php';
?>
</html>
