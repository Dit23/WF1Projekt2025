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
    <style>
        .card {
            background-color: #f8f9fa;
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s;
            margin-bottom: 2rem;
        }

        /* erste child blau dann rot ... */
        #days .card:nth-child(1) {
            background-color: #e7f3ff;
        }

        #days .card:nth-child(2) {
            background-color: #fff3cd;
        }

        #days .card:nth-child(3) {
            background-color: #d4edda;
        }

        #days .card:nth-child(4) {
            background-color: #f8d7da;
        }

        #days .card:nth-child(5) {
            background-color: #d1ecf1;
        }

        #days .card:nth-child(6) {
            background-color: #e2c6f5;
        }

        .card table {
            width: 100%;
            border-collapse: collapse;
        }

        .card table th, .card table td {
            border: 1px solid #dee2e6;
            text-align: left;
        }

        .card table th {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .card table td textarea {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 0;
            padding: 0.5rem;
            resize: none;
            outline: none;
            background-color: rgba(0, 0, 0, 0.05);
        }

        h2 {
            margin-top: 2rem;
        }
        .card h2 {
            margin-top: 0;
        }

    </style>
</head>
<div class="header">
    <?php
    include './shared/header.php';
    ?>
</div>
<body class="container">

<h1>Mentale Gesundheit: Was sie ist und wie du sie pflegen kannst</h1>

<h2>Was ist Mentale Gesundheit?</h2>

Mentale Gesundheit beschreibt, wie wir denken, fühlen und uns im Alltag verhalten. Sie beeinflusst, wie wir mit Stress umgehen, mit anderen Menschen in Kontakt treten und Entscheidungen treffen. Genau wie unsere körperliche Gesundheit braucht auch unsere mentale Gesundheit Pflege und Aufmerksamkeit.

Gute mentale Gesundheit hilft uns:

<ul>
    <li>
        Herausforderungen zu bewältigen
    </li>
    <li>
        Starke Beziehungen aufzubauen
    </li>
    <li>
        Konzentriert und motiviert zu bleiben
    </li>
    <li>
        Das Leben zu genießen und uns wohlzufühlen
    </li>
</ul>

<h2>Anzeichen für schlechte Mentale Gesundheit</h2>

<ul>
    <li>
        Häufige Traurigkeit oder Angst
    </li>
    <li>
        Fehlende Motivation oder Energie
    </li>
    <li>
        Schlafprobleme oder übermäßiger Schlaf
    </li>
    <li>
        Konzentrationsschwierigkeiten
    </li>
    <li>
        Rückzug von Freunden und Familie
    </li>
</ul>

Wenn diese Gefühle über längere Zeit bestehen, solltest du mit einer Lehrkraft, einem Schulberater oder einer Vertrauensperson sprechen.

<h2>Wie du Stress reduzierst und deine Mentale Gesundheit pflegst</h2>

<ol>
    <li>
        <strong>Selbstfürsorge praktizieren</strong> – Ernähre dich gesund, schlafe genug und bewege dich regelmäßig. Ein gesunder Körper unterstützt einen gesunden Geist.
    </li>
    <li>
        <strong>Über deine Gefühle sprechen</strong> – Das Teilen deiner Sorgen mit Freunden, Familie oder einem Berater kann helfen.
    </li>
    <li>
        <strong>Gut organisiert bleiben</strong> – Nutze einen Planer oder To-Do-Listen, um Schulaufgaben und Verpflichtungen besser zu bewältigen.
    </li>
    <li>
        <strong>Pausen einlegen</strong> – Nimm dir Zeit für Dinge, die dir Freude bereiten, wie Musik hören, zeichnen oder Sport treiben.
    </li>
    <li>
        <strong>Atmen und entspannen</strong> – Tiefe Atemübungen, Meditation oder Dehnübungen können helfen, deinen Geist und Körper zu beruhigen.
    </li>
    <li>
        <strong>Bildschirmzeit begrenzen</strong> – Zu viel Zeit in sozialen Medien kann das Selbstwertgefühl und den Schlaf beeinträchtigen. Setze dir gesunde Grenzen.
    </li>
    <li>
        <strong>Soziale Kontakte pflegen</strong> – Zeit mit Familie und Freunden zu verbringen kann die Stimmung heben und Stress reduzieren.
    </li>
    <li>
        <strong>Hilfe suchen, wenn nötig</strong> – Um Hilfe zu bitten ist ein Zeichen von Stärke. Zögere nicht, dich an jemanden zu wenden, der dich unterstützen kann.
    </li>
</ol>

Mentale Gesundheit ist genauso wichtig wie körperliche Gesundheit. Kleine tägliche Schritte können einen großen Unterschied machen!

<h2>Hier sind vier zusätzliche Tipps:</h2>

1. Dankbarkeit praktizieren – Schreibe täglich drei Dinge auf, für die du dankbar bist. Das hilft, den Fokus auf Positives zu legen.

2. Natur genießen – Zeit draußen in der frischen Luft kann Stress reduzieren und die Stimmung heben.

3. Gesunde Grenzen setzen – Lerne, „Nein“ zu sagen, wenn du dich überfordert fühlst, um dich selbst zu schützen.

4. Achtsamkeit üben – Durch Meditation oder bewusstes Atmen kannst du lernen, im Moment zu bleiben und Sorgen loszulassen.



<h2>Selbstreflexion</h2>
<p>
    In den nächsten Seiten findest du Material zur Selbstreflexion. Dabei geht es darum, dich selbst zu hinterfragen: Was hat dir Freude bereitet? Was hat dir weniger gefallen? Welche Situationen haben dich gestresst oder glücklich gemacht?
    <br>
    <br>
    Auch wenn es auf den ersten Blick vielleicht kindisch oder unnötig erscheint, lohnt es sich, diese Reflexion einmal auszuprobieren. Viele Menschen denken kaum darüber nach, was genau sie stresst oder ihnen Freude bereitet. Wir schauen Videos, spielen Spiele oder scrollen durch soziale Medien – aber selten hinterfragen wir, warum uns diese Dinge fesseln oder wie sie unsere Stimmung beeinflussen.
    <br>
    <br>
    Deshalb ermutige ich dich, diese Selbstreflexion ernst zu nehmen. Falls du dennoch das Gefühl hast, dass sie dir nicht weiterhilft, könnte es sinnvoll sein, professionelle Unterstützung in Betracht zu ziehen. Therapeutinnen und Beraterinnen sind aus gutem Grund Experten auf diesem Gebiet – sie wissen, wie sie helfen können.
</p>

<div id="days"></div>

<script>
    let jsonDays;


    //save to local storage
    function saveToLocalStorage() {
        localStorage.setItem('days', JSON.stringify(jsonDays));
    }

    //load from local storage if available
    function loadFromLocalStorage() {
        const savedDays = localStorage.getItem('days');
        if (savedDays) {
            jsonDays = JSON.parse(savedDays);
        } else {
            // If no saved data, use default jsonDays
            jsonDays = [
                {
                    title: "Selbstreflexion",
                    day: "Montag",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Selbstreflexion",
                    day: "Dienstag",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Selbstreflexion",
                    day: "Mittwoch",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Selbstreflexion",
                    day: "Donnerstag",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Selbstreflexion",
                    day: "Freitag",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Selbstreflexion",
                    day: "Samstag",
                    questions: [
                        "Was hat mich gestört?",
                        "Kann ich das ändern?",
                        "Was hat mich gefreut oder was hat mir Spaß gemacht?",
                    ],
                    answers: [
                        "",
                        "",
                        "",
                    ]
                },
                {
                    title: "Auswertung",
                    day: "Guck dir an, was genau dir in dieser Woche Spaß gemacht hat und was dich gestört hat Du sollst jetzt Auswerten, welcher dieser Sachen, die dich gestört haben, man Vermeiden kann, oder nicht. Und wie kann man diese Sachen eigentlich Vermeiden?",
                    questions: [
                        "",
                    ],
                    answers: [
                        "",
                    ]
                },
                {
                    title: "Auswertung",
                    day: "Versuche aufzuschreiben, was du an dir verändern möchtest.Was für Ziele möchtest du erreichen? Und wie hat dir die Selbstreflexion geholfen? Danach kannst du für dich selber entscheiden, was du machen möchtest. Wenn es dir nach dieser Selbstreflexion nicht besser geht, bitte versuchen sie professionelle Hilfe aufzutreiben. Die Helfer sind nicht umsonst professionell",
                    questions: [
                        "",
                    ],
                    answers: [
                        "",
                    ]
                }
            ];
        }
    }

    loadFromLocalStorage();

    const daysContainer = document.getElementById('days');

    jsonDays.forEach((day, dayIndex) => {
        // Create card container
        const card = document.createElement('div');
        card.classList.add('card');

        // Add title and day
        const title = document.createElement('h2');
        title.textContent = day.title;
        card.appendChild(title);

        const dayHeading = document.createElement('h3');
        dayHeading.textContent = day.day;
        card.appendChild(dayHeading);

        // Create table
        const table = document.createElement('table');

        // Create table header
        const headerRow = document.createElement('tr');
        day.questions.forEach(question => {
            const th = document.createElement('th');
            th.textContent = question;
            headerRow.appendChild(th);
        });
        table.appendChild(headerRow);

        // Create table row for answers
        const answerRow = document.createElement('tr');
        day.answers.forEach((answer, index) => {
            const td = document.createElement('td');
            const textarea = document.createElement('textarea');
            textarea.textContent = answer;

            textarea.addEventListener('input', function () {

                // Update the answer in jsonDays
                jsonDays[dayIndex].answers[index] = textarea.value;

                saveToLocalStorage();
            });

            td.appendChild(textarea);
            answerRow.appendChild(td);
        });
        table.appendChild(answerRow);

        // Append table to card
        card.appendChild(table);

        // Append card to days container
        daysContainer.appendChild(card);
    });

</script>

</body>
<?php
include './shared/footer.php';
?>