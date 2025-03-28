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
    </ul>
</div>
<div class="inhalt" id="inhalt">
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
        <ul>
            <li>(6) Eine Schülerin oder ein Schüler ist von der Teilnahme am Religionsunterricht auf Grund der Erklärung der Eltern oder bei Religionsmündigkeit des Schülers auf Grund eigener Erklärung befreit. Die Erklärung ist der Schulleiterin schriftlich zu übermitteln. Die Eltern sind über die Befreiung zu informieren. (Die besonderen Bestimmungen am Berufskolleg Ostvest sind zu beachten)</li>
        </ul>
    <h4>§ 43 Teilnahme am Unterricht und an sonstigen Schulveranstaltungen</h4>
    <ul>
        <li>(1) Schülerinnen und Schüler sind verpflichtet, regelmäßig am Unterricht und an den sonstigen verbindlichen Schulveranstaltungen teilzunehmen. Die Meldung zur Teilnahme an einer freiwilligen Unterrichtsveranstaltung verpflichtet zur regelmäßigen Teilnahme mindestens für ein Schulhalbjahr.</li>
        <li>(2) Ist eine Schülerin oder ein Schüler durch Krankheit oder aus anderen nicht vorhersehbaren Gründen verhindert, die Schule zu besuchen, so benachrichtigen die Eltern unverzüglich die Schule und teilen schriftlich den Grund für das Schulversäumnis mit. Bei begründeten Zweifeln, ob Unterricht aus gesundheitlichen Gründen versäumt wird, kann die Schule von den Eltern ein ärztliches Attest verlangen und in besonderen Fällen ein amtsärztliches Gutachten einholen.</li>
        <li>(3) Für nicht schulpflichtige Schülerinnen gelten die Schutzfristen vor und nach der Geburt eines Kindes gemäß den Regelungen des Mutterschutzgesetzes.</li>
        <li>(4) Die Schulleiterin oder der Schulleiter kann Schülerinnen und Schüler auf Antrag der Eltern aus wichtigem Grund bis zur Dauer eines Schuljahres vom Unterricht beurlauben oder von der Teilnahme an einzelnen Unterrichts- oder Schulveranstaltungen befreien. Längerfristige Beurlaubungen und Befreiungen bedürfen der Zustimmung der Schulaufsichtsbehörde. Dauerhafte Beurlaubungen und Befreiungen von schulpflichtigen Schülerinnen und Schülern zur Förderung wissenschaftlicher, sportlicher oder künstlerischer Hochbegabungen setzen voraus, dass für andere geeignete Bildungsmaßnahmen gesorgt wird.</li>
        <li>(5) Alle Schülerinnen und Schüler sind während schulischer Veranstaltungen sowie auf den Wegen von und zu diesen im Rahmen der gesetzlichen Unfallversicherung nach dem SGB VII gegen Unfall versichert.</li>
    </ul>
    <h4>§ 47 Beendigung des Schulverhältnisses</h4>
    <ul>
        <li>(1) Schulverhältnis endet, wenn
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
        </li>
        <li>(2) Eine schulpflichtige Schülerin oder ein schulpflichtiger Schüler kann nur in Verbindung mit einem nachgewiesenen Schulwechsel aus der besuchten Schule ausscheiden. § 53 Abs. 5 bleibt unberührt.</li>
    </ul>
    <h4>§ 53 Erzieherische Einwirkungen, Ordnungsmaßnahmen</h4>
    <ul>
        <li>(1) Erzieherische Einwirkungen und Ordnungsmaßnahmen dienen der geordneten Unterrichts- und Erziehungsarbeit der Schule sowie dem Schutz von Personen und Sachen. Sie können angewendet werden, wenn eine Schülerin oder ein Schüler Pflichten verletzt. Der Grundsatz der Verhältnismäßigkeit ist zu beachten. Ordnungsmaßnahmen sind nur zulässig, wenn erzieherische Einwirkungen nicht ausreichen. Einwirkungen gegen mehrere Schülerinnen und Schüler sind nur zulässig, wenn das Fehlverhalten jeder oder jedem Einzelnen zuzurechnen ist.</li>
        <li>Ordnungsmaßnahmen sind
            <ol>
                <li>der schriftliche Verweis,</li>
                <li>die Überweisung in eine parallele Klasse oder Lerngruppe,</li>
                <li>der vorübergehende Ausschluss vom Unterricht von einem Tag bis zu zwei Wochen und von sonstigen Schulveranstaltungen,</li>
                <li>die Androhung der Entlassung von der Schule,</li>
                <li>die Entlassung von der Schule,</li>
                <li>die Androhung der Verweisung von allen öffentlichen Schulen des Landes durch die obere Schulaufsichtsbehörde,</li>
                <li>die Verweisung von allen öffentlichen Schulen des Landes durch die obere Schulaufsichtsbehörde.</li>
            </ol>
            Rechtsbehelfe (Widerspruch und Anfechtungsklage) gegen Ordnungsmaßnahmen nach Satz 1 Nr. 2 und 3 haben keine aufschiebende Wirkung. § 80 Abs. 4, 5, 7 und 8 der Verwaltungsgerichtsordnung bleibt unberührt.
        </li>
        <li>(4) Maßnahmen nach Absatz 3 Nr. 4 und 5 sind nur zulässig, wenn die Schülerin oder der Schüler durch schweres oder wiederholtes Fehlverhalten die Erfüllung der Aufgaben der Schule oder die Rechte anderer ernstlich gefährdet oder verletzt hat. Bei Schulpflichtigen bedarf die Entlassung von der Schule der Bestätigung durch die Schulaufsichtsbehörde, die die Schülerin oder den Schüler einer anderen Schule zuweisen kann. Die Entlassung einer Schülerin oder eines Schülers, die oder der nicht mehr schulpflichtig ist, kann ohne vorherige Androhung erfolgen, wenn die Schülerin oder der Schüler innerhalb eines Zeitraumes von 30 Tagen insgesamt 20 Unterrichtsstunden unentschuldigt versäumt hat.</li>
        <li>(5) Maßnahmen nach Absatz 3 Nr. 6 und 7 sind nur zulässig, wenn die Anwesenheit der Schülerin oder des Schülers aus Gründen der Sicherheit nicht verantwortet werden kann. Diese Entscheidung bedarf der Bestätigung durch das Ministerium. Soweit die Schülerin oder der Schüler die Schulpflicht noch nicht erfüllt hat, ist für geeignete Bildungsmaßnahmen zu sorgen.</li>
        <li>(9) Ordnungsmaßnahmen werden den Eltern schriftlich bekannt gegeben und begründet.</li>
        </ul>
    </ul>
    <h2>5.3 Nutzungsordnung Schulnetz / Rechnerräume</h2>
    <h3>Allgemeines</h3>
        <p>Am Berufskolleg Ostvest gilt die folgende Nutzungsordnung für den Umgang mit Rechnern und die Nutzung des Schulnetzes.</p>
    <h3>Passwörter</h3>
        <p>Die Nutzung der schuleigenen Rechner oder ein Zugang zum Netz über private Geräte ist nur nach Anmeldung über eine individuelle Nutzerkennung möglich. Dazu wird jede*r Schüler*in eine Nutzerkennung zugewiesen, der dann ein selbstgewähltes Passwort zugeordnet wird. Private Geräte erhalten einen Zugang nur über das schuleigene Funknetz (WLAN) und müssen im Schulnetz identifiziert werden können. Das Maskieren von MAC-Adressen ist ausdrücklich untersagt. Ein Anspruch auf einen Zugang für private Geräte besteht nur für Laptopklassen und ist dann auf je einen Laptop beschränkt. Nach Beendigung der Nutzung hat sich der*die Schüler*in am PC abzumelden. Schüler*innen sind für Handlungen unter ihrer Nutzerkennung verantwortlich. Deshalb muss das Passwort vertraulich gehalten werden. Das Arbeiten unter einem fremden Passwort ist verboten. Wer ein fremdes Passwort erfährt, ist verpflichtet, diesen Umstand der Schule mitzuteilen.</p>
    <h3>Verbotene Nutzungen</h3>
        <p>Die gesetzlichen Bestimmungen insbesondere des Strafrechts, Urheberrechts und des Jugendschutzrechts sind zu beachten. Es ist verboten, pornographische, gewaltverherrlichende, rassistische oder persönlichkeitsverletzende Inhalte aufzurufen oder zu versenden. Werden solche Inhalte versehentlich aufgerufen, ist die Anwendung zu schließen und der Aufsichtsperson Mitteilung zu machen.</p>
    <h3>Datenschutz und Datensicherheit</h3>
        <p>Schüler*innen erhalten begrenzt die Möglichkeit, im Schulnetz Dateien langfristig zu speichern. Die Dateien müssen so hinterlegt werden, dass die Schule Zugriff auf den Inhalt der Dateien hat. Auf eine Sicherung der Dateien von Seiten der Schule besteht kein Anspruch. Die Schule ist in Wahrnehmung ihrer Aufsichtspflicht berechtigt, Informationen über den Datenverkehr zu speichern und zu kontrollieren. Entsprechede Daten werden in der Regel nach einem Monat, spätestens zu Beginn eines jeden neuen Schuljahres gelöscht. Dies gilt nicht, wenn der Verdacht eines schwerwiegenden Missbrauches der schulischen Computer vorliegt.</p>
    <h3>Eingriffe in die Hard- und Softwareinstallation</h3>
        <p>Veränderungen der Installation und Konfiguration der Basisbetriebssysteme sowie Manipulationen an der Hardwareausstattung sind grundsätzlich untersagt. Fremdgeräte dürfen nicht an das drahtgebundene Netzwerk und nur mit Erlaubnis an schuleigene Computer angeschlossen werden. Unnötiges Datenaufkommen durch Laden und Versenden von großen Dateien (z. B. Filme oder Softwarepakete) aus dem Internet ist grundsätzlich zu vermeiden und nur mit Erlaubnis der zuständigen Lehrkraft zulässig.</p>
    <h3>Schutz der Geräte</h3>
        <p>Unautorisierte Veränderungen an Hard- und Software sind ausdrücklich untersagt. Störungen oder Schäden sind sofort der für die Computernutzung verantwortlichen Person zu melden. Wer schuldhaft Schäden verursacht, haftet für etwaige Reparaturen und Ersatzgeräte. Die Tastaturen sind durch Schmutz und Flüssigkeiten besonders gefährdet. Deshalb ist während der Nutzung der Schulcomputer Essen und Trinken verboten.</p>
    <h3>Nutzung von Informationen aus dem Internet</h3>
        <p>Der Internetzugang darf nur für schulische Zwecke genutzt werden. Als schulisch ist auch ein elektronischer Informationsaustausch anzusehen, der unter Berücksichtigung seines Inhalts und des Adressatenkreises mit der schulischen Arbeit im Zusammenhang steht. Das Herunterladen von Anwendungen ist nur mit Einwilligung der Schule zulässig. Die Schule ist nicht für den Inhalt der über ihren Zugang abrufbaren Angebote Dritter im Internet verantwortlich. Im Namen der Schule dürfen weder Vertragsverhältnisse eingegangen noch ohne Erlaubnis kostenpflichtige Dienste im Internet benutzt werden. Bei der Weiterverarbeitung von Daten aus dem Internet sind insbesondere Urheber- und Nutzungsrechte zu beachten.</p>
    <h3>Persönliche Daten der Schüler*innen, Schüler*innenausweis</h3>
    <ul>
        <li>Alle Schüler*innen sind verpflichtet, einen durch die Schule erstellten Schüler*innenausweis auf dem Schulgelände mit sich zu führen.</li>
        <li>Veränderungen der persönlichen Daten (z. B. Namens- oder Adressänderungen, Wechsel des Ausbildungsbetriebes) sind unverzüglich der Klassenleitung mitzuteilen, die die Daten an das Sekretariat weiterleitet.</li>
        <li>Die Verarbeitung von personenbezogenen Daten durch das Berufskolleg Ost vest erfolgt auf der Grundlage der gesetzlichen Bestimmungen. Informationen zum Datenschutz erhalten Sie auf der Internetseite des Berufskollegs Ostvests.</li>
        <li>Alle Schüler*innen erhalten einen Zugang zur Arbeits- und Kommunikationsplattform IServ und damit eine eigene E-Mail-Adresse. Die Nutzung ist verpflichtend. (§ 8 Abs. 2 und § 120 Abs. 5 SchulG)</li>
    </ul>
    <h3>Versenden von Informationen in das Internet</h3>
        <p>Werden Informationen unter dem Absendernamen der Schule in das Internet versandt, geschieht das unter Beachtung der allgemein anerkannten Umgangsformen. Die Veröffentlichung von Internetseiten der Schulebedarf der Genehmigung durch die Schulleitung. Für fremde Inhalte ist insbesondere das Urheberrecht zu beachten. So dürfen zum Beispiel digitalisierte Texte, Bilder und andere Materialien nur mit Erlaubnis der Urheber in eigenen Internetseiten verwandt werden. Der Urheber ist zu nennen, wenn dieser es wünscht. Das Recht am eigenen Bild ist zu beachten. Die Veröffentlichung von Fotos und Schülermaterialien im Internet ist nur mit der Genehmigung der Schüler*innen bzw. ihrer Erziehungsberechtigten gestattet.</p>
    <h3>Schlussvorschriften</h3>
        <p>Diese Benutzerordnung ist Bestandteil der jeweils gültigen Hausordnung. Eine Nutzung der IT-Infrastruktur der Schule ist erst nach Kenntnisnahme und schriftlich dokumentierter Anerkennung dieser Nutzungsordnung möglich. Jeweils zu Schuljahresbeginn findet eine Nutzerbelehrung statt, die im Klassenbuch protokolliert wird. Nutzer, die unbefugt Software von den Arbeitsstationen oder aus dem Netz kopieren oder verbotene Inhalte nutzen, machen sich strafbar und können zivil- oder strafrechtlich verfolgt werden. Zuwiderhandlungen gegen diese Nutzungsordnung können neben dem Entzug der Nutzungsberechtigung schulordnungsrechtliche Maßnahmen zur Folge haben.</p>
    <h2>5.4 Nutzungsordnung zu digitalen Lernplattformen</h2>
    <h3>Präambel</h3>
        <p>Die Schule stellt ihren Schüler*innen und Lehrkräften (im Folgenden: Nutzer) als Kommunikations- und Austauschplattform IServ und Moodle zur Verfügung. Diese dient ausschließlich der schulischen Kommunikation und ermöglicht allen Nutzern, schulbezogene Daten zu speichern und auszutauschen. Alle Nutzer verpflichten sich, die Rechte anderer Personen zu achten.</p>
    <h3>Nutzungsmöglichkeiten</h3>
        <p>Die Schule entscheidet darüber, welche Module von IServ und Moodle für den innerschulischen Gebrauch freigeschaltet werden und welcher Nutzerkreis zu diesen Zugang erhält.</p>
    <h3>Allgemeine Verhaltensregeln</h3>
        <p>Jeder Nutzer erhält ein Nutzerkonto. Das Nutzerkonto muss durch ein nicht zu erratendes Passwort von mindestens acht Zeichen Länge (Groß-/Kleinbuchstaben, Zahlen und Sonderzeichen) gesichert werden. Es ist untersagt, das Passwort anderen Nutzern mitzuteilen. Erfährt ein Nutzer, dass ein Dritter unberechtigt Kenntnis von seinem Passwort hat, so muss er sein Passwort unverzüglich ändern. Sollte ein Nutzer sein Passwort vergessen haben, ist er verpflichtet, das durch einen Administrator neu vergebene Passwort beim nächsten Einloggen sofort zu ändern. Nur der Nutzer selbst darf ein neues Passwort für sich persönlich bei einem Administrator beantragen. Alle Nutzer sind verpflichtet, eingesetzte Filter und Sperren zu respektieren und diese nicht zu umgehen. Die Sicherung eigener in Iserv und Moodle gespeicherter Dateien gegen Verlust obliegt der Verantwortung der Nutzer, da eine Rücksicherung mit unverhältnismäßigem Aufwand verbunden wäre. Das Senden, Aufrufen und Speichern jugendgefährdender und anderer strafrechtlich relevanter Inhalte ist auf dem Schulserver ebenso verboten wie die Speicherung von URLs (Webseiten) oder Links auf jugendgefährdende Websites oder Websites mit strafrechtlich relevanten Inhalten. Die Schule übernimmt keine Verantwortung für die Inhalte und die Art gespeicherter Daten. Weil umfangreiche Up- und Downloads die Arbeitsgeschwindigkeit des Servers beeinträchtigen, sind diese nicht erlaubt. Die Installation oder Nutzung fremder Software darf und kann nur von den Administratoren durchgeführt werden. Ausnahmen sind vorab mit den Administratoren abzusprechen.</p>
    <h3>Administratoren</h3>
        <p>Die Administratoren haben weitergehende Rechte, verwenden diese aber grundsätzlich nicht dazu, sich Zugang zu persönlichen Konten bzw. persönlichen Daten zu verschaffen.</p>
    <h3>Protokolle</h3>
        <p>Das System erstellt Log-Dateien (Protokolle), die in schwerwiegenden Fällen (z. B. bei Regelverstößen, Betrugs- und Täuschungsversuchen oder Rechtsverstößen) ausgewertet werden können.</p>
    <h3>Hausaufgaben</h3>
        <p>Hausaufgaben können über IServ und Moodle gestellt werden, werden aber im Unterricht angekündigt. Die Lehrkräfte achten dabei auf einen angemessenen Bearbeitungszeitraum. Ist kein normaler Unterricht möglich, erfolgt die Kommunikation ausschließlich über die Lernplattformen.</p>
    <h3>Adressbuch</h3>
        <p>Die im gemeinsamen Adressbuch eingegebenen Daten sind für alle Nutzer sichtbar. Es wird deshalb geraten, so wenig personenbezogene Daten wie möglich von sich preiszugeben.</p>
    <h3>E-Mail</h3>
        <p>Soweit die Schule den Nutzern einen persönlichen E-Mail-Account zur Verfügung stellt, darf dieser nur für die schulische Kommunikation (interner Gebrauch) verwendet werden. Die Schule ist damit kein Anbieter von Telekommunikation im Sinne von § 3 Nr. 6 Telekommunikationsgesetz. Ein Rechtsanspruch der Nutzer auf den Schutz der Kommunikationsdaten im Netz besteht gegenüber der Schule somit grundsätzlich nicht. Die Schule ist berechtigt, im Falle von konkreten Verdachtsmomenten von missbräuchlicher oder strafrechtlich relevanter Nutzung des E-Mail-Dienstes die Inhalte von E-Mails zur Kenntnis zu nehmen. Die betroffenen Nutzer werden hierüber unverzüglich informiert. Der massenhafte Versand von E-Mails, sowie E-Mails, die dazu gedacht sind, andere Nutzer über Absender oder Glaubhaftigkeit der übermittelten Nachricht zu täuschen, ist verboten.</p>
    <h3>Forum</h3>
        <p>Soweit die Schule eine Forum-Funktion zur Verfügung stellt, gelten dieselben Vorgaben wie bei der E-Mail-Nutzung. Neben schul-öffentlichen Foren stehen auch Foren mit eingeschränkten Nutzerkreis zur Verfügung, wie z. B. Gruppenforen. Darüber hinaus sind die Moderatoren der Foren berechtigt, unangemessene Beiträge zu löschen oder zu bearbeiten. Moderatoren dürfen nur in dem ihnen anvertrauten Foren moderieren.</p>
    <h3>Kalender</h3>
        <p>Kalendereinträge für Gruppen werden nach bestem Wissen eingetragen und nicht manipuliert.</p>
    <h3>Messenger</h3>
        <p>Soweit die Schule die Messenger-Funktion zur Verfügung stellt, gelten dieselben Vorgaben wie bei der E-Mail-Nutzung.</p>
    <h3>Videokonferenzen</h3>
        <p>Eine Aufzeichnung von Videokonferenzen ist nicht gestattet.</p>
    <h3>Verstöße</h3>
        <p>Im Fall von Verstößen gegen die Nutzungsordnung kann das Konto temporär oder permanent gesperrt werden. Damit ist die Nutzung schulischer Computer sowie die Nutzung von IServ und Moodle auf schulischen und privaten Geräten nicht mehr möglich.Unabhängig davon besteht die Möglichkeit, Nutzern den Zugang zu einzelnen Komponenten oder Modulen zu verweigern, sodass beispielsweise das Anmelden am Schul-WLAN nicht mehr möglich ist, aber auf Schul-Computern und Zuhause IServ und Moodle weiterhin genutzt werden kann. Die Ahndung von Verstößen liegt im Ermessen der Administratoren.</p>
    <h2>5.5 Ergänzung zur Datenschutzerklärung nach Art. 12 DS-GVO</h2>
        <p>Auf dieser Seite informieren wir Sie über die zur Nutzung von BigBlueButton erforderliche Verarbeitung von personenbezogenen Daten.</p>
    <h3>Wer ist verantwortlich für die Verarbeitung meiner Daten, bzw. der Daten meines Kindes (im Folgenden: die Daten)?</h3>
        <p>Verantwortlich ist die Schule: Juliane Brüggemann (Schulleiterin)</p>
    <h3>An wen kann ich mich wenden, wenn ich Fragen zum Datenschutz habe?</h3>
        <p>Fragen zum Datenschutz können Sie an den schulischen Ansprechpartner für Datenschutz stellen: Dirk Schlechter</p>
    <h3>Zu welchem Zweck sollen die Daten verarbeitet werden?</h3>
        <p>Die Verarbeitung ist erforderlich zur Nutzung von BigBlueButton, einer Videokonferenz-Plattform, zur Durchführung von Online-Unterrichtseinheiten in der Lerngruppe und individueller Betreuung und Beratung in Kleingruppen oder Einzeltreffen zwischen Schüler*in und Lehrkraft.</p>
    <h3>Auf welcher Rechtsgrundlage erfolgt die Verarbeitung?</h3>
        <p>Die Verarbeitung erfolgt auf der Grundlage Ihrer Einwilligung.</p>
    <h3>Welche personenbezogenen Daten werden bei Teilnahme an einer Videokonferenz verarbeitet?</h3>
        <p>Bei der Teilnahme an einer Videokonferenz ohne eigenes Nutzerkonto werden neben Bild- und Tondaten, zusätzliche Daten zur Konferenz verarbeitet:Name des Raumes, IP Nummer des Teilnehmers und Informationen zum genutzten Endgerät. Je nach Nutzung der Funktionen in einer Videokonferenz fallen Inhalte von Chats, gesetzter Status, Eingaben bei Umfragen, Beiträge zum geteilten Whiteboard, durch Upload geteilte Dateien und Inhalte von Bildschirmfreigaben an. Eine Speicherung von Videokonferenzen und Inhalten durch die Schule erfolgt nicht.</p>
    <h3>Wer hat Zugriff auf die personenbezogenen Daten?</h3>
        <p>Alle Teilnehmer einer Videokonferenz haben Zugriff im Sinne von Sehen, Hören und Lesen auf Inhalte der Videokonferenz, Chats, geteilte Dateien, Bildschirmfreigaben und Beiträge auf Whiteboards. Der Anbieter hat Zugriff auf die verarbeiteten Daten im Rahmen der Auftragsverarbeitung und auf Weisung der Schulleitung.</p>
    <h3>An wen werden die Daten übermittelt?</h3>
        <p>Unsere BigBlueButton Instanz wird von IServ (IServ.eu) für uns betrieben. IServ verarbeitet die personenbezogenen Daten ausschließlich in unserem Auftrag. Demnach darf er sie nur entsprechend unserer Weisungen und für unsere Zwecke und nicht für eigene Zwecke nutzen, also weder für Werbung und auch nicht, um sie an Dritte weitergeben. Im Sinne des Datenschutzrechts findet somit keine Übermittlung statt.</p>
    <h3>Wie lange werden die Daten gespeichert?</h3>
        <p>Die Schule speichert keine personenbezogenen Daten im Zusammenhang mit der Nutzung von BigBlueButton. Videokonferenzen und Chats werden nicht aufgezeichnet und weder durch Schule noch den Anbieter gespeichert. Die Inhalte von Chats, geteilte Dateien und Whiteboards werden in der Plattform gelöscht, sobald ein Konferenzraum geschlossen wird.</p>
    <h2>5.6 Do‘s and Don‘ts in Notfällen am Berufskolleg Ostvest</h2>
    <h3>Do's</h3>
    <ul>
        <li>Hilfe holen!</li>
        <li>Melden Sie sich bei der Aufsicht oder im Sekretariat.</li>
        <li>Beruhigen!</li>
        <li>Beruhigen Sie die verletzte/ erkrankte Person.</li>
        <li>Selbst ruhig bleiben!</li>
        <li>Stabile Seitenlage! … wenn die Person bewusstlos ist.</li>
    </ul>
    <h3>Don'ts</h3>
    <ul>
        <li>Den Krankenwagen rufen! Das übernimmt das Sekretariat.</li>
        <li>Medikamente verabreichen!</li>
        <li>Den Rettungskräften im Weg stehen!</li>
    </ul>
    <h2>5.7 Nutzung des Sportangebotes auf dem Schulgelände</h2>
        <p>Allen Schüler*innen stehen in den Pausen oder in Freistunden Sportgeräte (Bälle, Boule-Kugeln etc.) zur Verfügung. Wie diese ausgeliehen werden können, wird über Aushänge bzw. über den Schüler*innen- Newsletter (über IServ) bekannt gegeben.</p>
    <h2>6.1 Erziehungs- und Ordnungsmaßnahmen</h2>
        <p>JA, AUCH SIE SIND GEMEINT! Auch gute Vorsätze geraten im Schulalltag schnell in Vergessenheit. So kommt es immer wieder zu Fehlverhalten, das wir im Interesse Ihrer Mitschüler*innen sowie eines geordneten Schulbetriebs sanktionieren müssen. Folgende Maßnahmen kommen in Betracht:</p>
    <h3>Erzieherisches Einwirken (§ 53 SchulG)</h3>
        <p>Zu den erzieherischen Einwirkungen gehören u. a.:</p>
    <ul>
        <li>das erzieherische Gespräch</li>
        <li>die Ermahnung oder die schriftliche Missbilligung des Fehlverhaltens</li>
        <li>der Ausschluss von der laufenden Unterrichtsstunde</li>
        <li>die Nacharbeit unter Aufsicht</li>
        <li>die zeitweise Wegnahme von Gegenständen (z. B. Smartphones)</li>
    </ul>
        <p>Sollten die erzieherischen Einwirkungen keinen Erfolg haben, so kommen sogenannte Ordnungsmaßnahmen in Betracht. Diese sind:</p>
    <ul>
        <li>der schriftliche Verweis</li>
        <li>die Überweisung in eine parallele Klasse oder Lerngruppe</li>
        <li>der vorübergehende Ausschluss vom Unterricht von einem Tag bis zu zwei Wochen und von sonstigen Schulveranstaltungen</li>
        <li>die Androhung der Entlassung von der Schule</li>
        <li>die Entlassung von der Schule</li>
    </ul>
        <p>Unser Tipp: Lassen Sie es erst gar nicht so weit kommen! Ein frühzeitiges Gespräch mit Ihren Lehrkräften bzw. der Klassenleitung oder aber auch mit den Schulsozialarbeiter*innen kann im Vorfeld viele Unannehmlichkeiten aus dem Weg räumen!</p>
    <h2>6.2 Sprechtag</h2>
        <p>Am Dienstag, 17.09.2024 wird es eine Sitzung der Klassenpflegschaft geben. Am Montag, 17.02.2025 findet nachmittags der allgemeine Sprechtag statt.</p>
        <p>Schriftliche Einladungen zu den Veranstaltungen folgen. Natürlich können jederzeit individuelle Termine für Beratungsgespräche mit den Lehrkräften der Klasse vereinbart werden.</p>
    <h2>7.1 Schulversäumnisse/Beurlaubung</h2>
        <p>Nach § 43 Schulgesetz Abs. 1 „Teilnahme am Unterricht und an sonstigen Schulveranstaltungen“ sind Schüler*innen verpflichtet, regelmäßig am Unterricht und an den sonstigen verbindlichen Schulveranstaltungen teilzunehmen. Die Meldung zur Teilnahme an einer freiwilligen Unterrichtsveranstaltung verpflichtet zur regelmäßigen Teilnahme mindestens für ein Schulhalbjahr. […]</p>
    <h3>1. Regelung von Fehlzeiten</h3>
        <p>Sollten Sie aus Krankheitsgründen nicht am Unterricht teilnehmen können, so beachten Sie bitte Folgendes: Rufen Sie am selben Tag in der Schule an (02363 3780) und bitten Sie um Benachrichtigung der Klassenlehrkraft (Grund, Dauer). Schreiben Sie eine Entschuldigung (siehe S. 172). Wenn Sie minderjährig sind, muss ein*e Erziehungsberechtigte*r mit unterschreiben. Fügen Sie dem Entschuldigungsschreiben gegebenenfalls die Kopie der ärztlichen Unterrichtsunfähigkeitsbescheinigung bei. (Hinweis: Von Vollzeitschüler*innen kann keine Arbeitsunfähigkeitsbescheinigung vorgelegt werden.) Händigen Sie die Entschuldigung am ersten Unterrichtstag nach der Krank heit dem*der Klassenlehrkraft aus. Sollte diese*r nicht anwesend sein, so geben Sie die Entschuldigung einer Lehrkraft, die an diesem Tag in der Klasse planmäßig Unterricht führt. Achten Sie darauf, dass diese den Entschuldigungsnachweis mit dem Datum der Abgabe und ihrem Kürzel unterschreibt. Erfolgt diese Abgabe der Entschuldigung nicht pünktlich, so gilt der Tag als unentschuldigt. Die Leistungen an diesem Tag werden dann mit „ungenügend“ bewertet. „Verspätete Entschuldigungen“ müssen nicht berücksichtigt werden. Versäumte Arbeiten werden dann mit „ungenügend“ bewertet, die unentschuldigten Stunden erscheinen als solche im Zeugnis. Jede*r Schüler*in muss sich darüber informieren, was im Unterricht behandelt wurde. Dazu können die Mitschüler*innen und/oder die entsprechenden Lehrkräfte befragt werden. Die Aussage „Ich habe in dieser Stunde gefehlt.“ gilt nicht!</p>
        <p>Jede*r Schüler*in muss sich sofort nach der Krankheit bei der entsprechenden Lehrkraft über den Termin für das Nachschreiben der Klausur erkundigen bzw. darauf einstellen, dass sie*er umgehend (in der nächsten Stunde) oder an offiziellen Nachschreibterminen nachschreiben muss.</p>
        <p>Verlassen Sie den Unterricht vorzeitig, so haben Sie sich grundsätzlich zuvor bei Ihrer Lehrkraft abzumelden, bei der Sie die nachfolgende Stunde Unterricht hätten. Abhängig vom Krankheitsbild behalten wir uns vor, einen Erziehungsberechtigten oder den Rettungsdienst zu informieren. Wünschen Sie eine Beurlaubung vom Unterricht, so reichen Sie Ihre Bitte rechtzeitig zur Genehmigung bei Ihrer Klassenlehrkraft ein.</p>
        <p>Hinweis: Versäumter Unterrichtsstoff ist von Ihnen eigenverantwortlich nachzuholen.</p>
        <p>Grundsätzlich müssen alle privaten Termine außerhalb der Schulzeiten gelegt werden. Ausnahmen wie Bewerbungsgespräche, Einstellungstests, Führerscheinprüfungenprüfungen usw. sind im Voraus bei der Klassenlehrkraft zu melden. Es gilt die gesetzliche Feiertagsregelung unseres Bundeslandes NRW. Anträge auf Schulbefreiung für muslimische Feiertage (z. B. Zuckerfest) müssen von den betroffenen Schüler*innen im Voraus gestellt werden. Bei längerem Schulversäumnis ist eine Zwischenmitteilung vorzulegen. Bei andauernden oder häufiger auftretenden unentschuldigten Fehlzeiten weisen wir ausdrücklich auf die 20-Stunden-Regelung (§ 53 Abs. (4), SchulG) hin, die im Folgenden näher erläutert wird: „Die Entlassung einer Schülerin oder eines Schülers, die oder der nicht mehr schulpflichtig ist, kann ohne vorherige Androhung erfolgen, wenn die Schülerin oder der Schüler innerhalb eines Zeitraumes von 30 Tagen insgesamt 20 Unterrichtsstunden unentschuldigt versäumt hat.“ Das bedeutet für Sie: Wenn Sie volljährig und nicht mehr schulpflichtig sind und eine Belehrung stattgefunden hat, hat die Schule gem. § 53, Abs. (4), SchuIG das Recht, Sie zu entlassen, wenn Sie 20 Unterrichtsstunden im Verlaufe eines Monats unentschuldigt versäumt haben.</p>
    <h3>2. Teilnahme und Entschuldigungsregelung im Sportunterricht</h3>
        <p>Für die Befreiung von der aktiven Teilnahme am Sportunterricht gelten eigene Regeln. Über die Besonderheiten der Entschuldigungsregelung im Fach Sport wird Sie Ihre Sportlehrkraft ausführlich informieren.</p>
    <h3>3. Gesetzliche Grundlagen</h3>
        <p>(RdErl. des MSW v. 04.02.07, in Amtsblatt 03/07, Seite 155 f., BASS 12-51 Nr. 5)</p>
    <h4>§ 126 SchulG:</h4>
        <p>Ordnungswidrigkeiten (Ordnungswidrig handelt, wer vorsätzlich oder fahrlässig</p>
        <p>1. als Eltern der Verpflichtung zur Anmeldung zum Schulbesuch nicht nachkommt (§ 41 Abs. 1 Satz 1), …</p>
        <p>4. als Eltern, als Ausbildende oder Ausbildender oder als Arbeitgeberin oder Arbeitgeber nicht dafür sorgt, dass die oder der Schulpflichtige am Unterricht und an den sonstigen Veranstaltungen der Schule regelmäßig teilnimmt (§ 41 Abs. 1 Satz 2, Abs. 2),</p>
        <p>5. als Schülerin oder Schüler nach Vollendung des 14. Lebensjahres die Schulpflicht in der Sekundarstufe I (§ 37) oder die Schulpflicht in der Sekundarstufe II (§ 38) nicht erfüllt, […] Die Ordnungswidrigkeit kann mit einer Geldbuße geahndet werden, die in den Fällen des Absatz 1 Nr. 6 und 7 bis zu 5.000 Euro beträgt. Nach der Entlassung der oder des Schulpflichtigen aus der Schule ist die Verfolgung der Ordnungswidrigkeit gemäß Absatz 1 Nr. 5 unzulässig. Für die Verfolgung und Ahndung der Ordnungswidrigkeiten sind die Schulaufsichtsbehörden zuständig. Geldbußen, die durch rechtskräftige Bescheide eines Schulamtes festgesetzt sind, fließen in die Kasse des Kreises oder der kreisfreien Stadt, für die das Schulamt zuständig ist.</p>
    <h4>§ 41 SchulG</h4>
        <p>Lehrkräfte, Schulleiterinnen und Schulleiter sind verpflichtet, Schulpflichtige, die ihre Schulpflicht nicht erfüllen, zum regelmäßigen Schulbesuch anzuhalten und auf die Eltern sowie auf die für die Berufserziehung Mitverantwortlichen einzuwirken. Bleibt die pädagogische Einwirkung erfolglos, können die Schulpflichtigen auf Ersuchen der Schule oder der Schulaufsichtsbehörde von der für den Wohnsitz oder gewöhnlichen Aufenthalt zuständigen Ordnungsbehörde der Schule zwangsweise gemäß §§ 66 bis 75 Verwaltungsvollstreckungsgesetz NRW zugeführt werden. Das Jugendamt ist über die beabsichtigte Maßnahme zu unterrichten. § 126 bleibt unberührt. Die Eltern können von der Schulaufsichtsbehörde durch Zwangsmittel gemäß §§ 55 bis 65 Verwaltungsvollstreckungsgesetz NRW zur Erfüllung ihrer Pflichten gemäß Absatz 1 angehalten werden.</p>
    <h4>§ 53 SchulG</h4>
        <p>Erzieherische Einwirkungen, Ordnungsmaßnahmen</p>
        <p>Die Entlassung einer Schülerin oder eines Schülers, die oder der nicht mehr schulpflichtig ist, kann ohne vorherige Androhung erfolgen, wenn die Schülerin oder der Schüler innerhalb eines Zeitraumes von 30 Tagen insgesamt 20 Unterrichtsstunden unentschuldigt versäumt hat.</p>
    <h4>§ 47 SchulG</h4>
        <p>Beendigung des Schulverhältnisses</p>
        <p>(1) Das Schulverhältnis endet, wenn …</p>
        <p>8. die nicht mehr schulpflichtige Schülerin oder der nicht mehr schulpflichtige Schüler trotz schriftlicher Erinnerung ununterbrochen 20 Unterrichtstage unentschuldigt fehlt, […]</p>
</div>
</body>
<script>
    //scan den #inhalt nach h1 und h2 und fügt sie in die #table-of-contents-ul ein und gebe denen eine id
    var headings = document.querySelectorAll('#inhalt h2, #inhalt h3, #inhalt h4');
    var tableOfContentsUl = document.getElementById('table-of-contents-ul');

    headings.forEach(function (heading) {
        var li = document.createElement('li');
        li.innerText = heading.innerText;
        li.style.cursor = 'pointer';

        li.classList.add(heading.tagName.toLowerCase() + '-li');
        li.addEventListener('click', function () {
            let posX = heading.getBoundingClientRect().top + window.scrollY - 100;
            window.scrollTo(0, posX);
        });
        tableOfContentsUl.appendChild(li);
        heading.id = heading.innerText;

    });

    // Add scroll event listener to update active class
    window.addEventListener('scroll', function () {
        var fromTop = window.scrollY + 110;
        var tableOfContentsUl = document.getElementById('table-of-contents-ul');

        headings.forEach(function (heading) {
            var li = Array.from(tableOfContentsUl.querySelectorAll('li')).find(li => li.innerText === heading.innerText);

            var nextHeading = headings[Array.from(headings).indexOf(heading) + 1] || document.body;

            if (
                heading.offsetTop <= fromTop &&
                nextHeading.offsetTop > fromTop
            ) {
                li.classList.add('li-active');
                tableOfContentsUl.scrollTop = li.offsetTop - tableOfContentsUl.clientHeight / 2;
            } else {
                li.classList.remove('li-active');
            }
        });
    });
</script>
<div class="footer">
<?php
include './shared/footer.php';
?>
</div>
</html>
