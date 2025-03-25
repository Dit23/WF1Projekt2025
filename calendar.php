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
    <?php
    include './shared/head.php';
    ?>

    <style>
        /* Gemeinsame Styles */
        .calendar-header {
            margin-bottom: 1em;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5em;
            align-items: center;
            justify-content: space-between;
        }
        .view-selector {
            display: flex;
            gap: 0.5em;
        }
        .view-btn, .arrows {
            background-color: #f6f6f6;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 50px;
            padding: 0.5em 1em;
        }
        .view-btn:hover, .arrows:hover {
            background-color: #e8e8e8;
        }

        .grid-header .grid-cell {
            background-color: #e8e8e8;
            text-align: center;
            font-weight: bold;
            padding: 0.5em;
        }

        .cal-content {
            display: grid;
            flex-direction: column;
            gap: 0.25em;
            padding: 0.25em;
            grid-template-columns: 1fr;
        }

        .event {
            color: white;
            padding: 0.25em;
            border-radius: 5px;
            overflow: hidden;
            user-select: none;
        }

        /* Monatsansicht */
        .month-grid {
            display: grid;
            grid-template-rows: 40px 1fr;
            gap: 1px;
            border-radius: 15px;
            overflow: hidden;
        }
        .grid-header .grid-cell:hover {
            background-color: #e8e8e8;
        }

        .month-grid .grid-header {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }
        .month-grid .grid-cells {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }
        /* Wochenansicht */
        .week-grid {
            display: grid;
            grid-template-rows: 40px 1fr;
            gap: 1px;
            border-radius: 15px;
            overflow: hidden;
            min-height: 600px;
        }
        .week-grid .grid-header {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }
        .week-grid .grid-cells {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }
        /* Tagesansicht */
        .day-grid {
            display: grid;
            grid-template-rows: 40px 1fr;
            border-radius: 15px;
            overflow: hidden;
            min-height: 600px;
        }
        /* Zellen-Styles */
        .grid-cell {
            background-color: #f6f6f6;
            min-height: 125px;
        }
        .grid-cell:hover {
            background-color: #e9e9e9;
        }
        .grid-cell.not-in-month {
            background-color: #f0f0f0;
        }
        .grid-cell-header {
            font-weight: bold;
            width: fit-content;
            text-align: center;
            font-size: 0.75em;
            padding: 0 0.5em;
            margin: 0.25em auto auto;
            user-select: none;
        }

        .today {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
        }

        .untis-hw-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: untis-hw-bg-in 0.3s ease-in-out forwards;
        }

        @keyframes untis-hw-bg-in {
            from {
                background-color: rgba(0, 0, 0, 0);
            }
            to {
                background-color: rgba(0, 0, 0, 0.5);
            }
        }

        .untis-hw {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            width: clamp(300px, 30%, 500px);
            max-width: clamp(100vw, 50%, 800px);
            background-color: white;
            padding: 1em;
            border-radius: 5px 0 0 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            animation: untis-h-in 0.3s forwards cubic-bezier( 0.42, 0, 0.58, 1 );
        }

        @keyframes untis-h-in {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .untis-hw-background.close-animation {
            animation: untis-hw-bg-out 0.3s ease-in-out forwards;
        }

        @keyframes untis-hw-bg-out {
            from {
                background-color: rgba(0, 0, 0, 0.5);
            }
            to {
                background-color: rgba(0, 0, 0, 0);
            }
        }

        .untis-hw-background.close-animation .untis-hw {
            animation: untis-h-out 0.3s forwards cubic-bezier( 0.42, 0, 0.58, 1 );
        }

        @keyframes untis-h-out {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(100%);
            }
        }

        .add-event-button {
            text-align: center;
            font-size: 1em;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border-radius: 5em;
            padding: 0.5em;
            width: 3em;
            margin: auto;
            display: none;
        }

        .grid-cell:hover .add-event-button {
            display: block !important;
        }
    </style>
</head>
<body class="container">
<?php include './shared/header.php'; ?>

<div class="calendar-header">
    <!-- View-Auswahl -->
    <div>
        <button id="today" class="arrows">Heute</button>
        <button id="prev" class="arrows"><i class="fa-solid fa-chevron-left"></i></button>
        <button id="next" class="arrows"><i class="fa-solid fa-chevron-right"></i></button>
        <span id="currentLabel"></span>
    </div>
    <div class="view-selector">
        <button id="viewMonth" class="view-btn">Monat</button>
        <button id="viewWeek" class="view-btn">Woche</button>
        <button id="viewDay" class="view-btn">Tag</button>
    </div>
</div>

<!-- Container, in den die jeweilige Ansicht gerendert wird -->
<div id="calendar"></div>

<script>
    // Globale Variablen
    var currentView = "month"; // "month", "week" oder "day"
    var currentDate = new Date();
    var weekdays = ['MO', 'DI', 'MI', 'DO', 'FR', 'SA', 'SO'];
    var monthNames = ['Jan.', 'Feb.', 'März', 'Apr.', 'Mai', 'Juni', 'Juli', 'Aug.', 'Sep.', 'Okt.', 'Nov.', 'Dez.'];
    let homeworks = [];
    let requestedMonthes = [];

    // Hilfsfunktion zum Formatieren von Datumsangaben
    function formatDate(d) {
        return d.getDate() + ". " + monthNames[d.getMonth()] + " " + d.getFullYear();
    }

    // Render-Funktion, die anhand des aktuellen Views die passende Darstellung erzeugt
    function renderCalendar() {
        var calendar = document.getElementById('calendar');
        calendar.innerHTML = '';

        if (currentView === "month") {
            var monthGrid = document.createElement('div');
            monthGrid.classList.add('month-grid');

            var gridHeader = document.createElement('div');
            gridHeader.classList.add('grid-header');
            monthGrid.appendChild(gridHeader);

            var gridCells = document.createElement('div');
            gridCells.classList.add('grid-cells');
            monthGrid.appendChild(gridCells);
            calendar.appendChild(monthGrid);

            // Kopfzeile: Wochentage
            weekdays.forEach(function(day) {
                var cell = document.createElement('div');
                cell.classList.add('grid-cell');
                cell.innerText = day;
                gridHeader.appendChild(cell);
            });

            var year = currentDate.getFullYear();
            var month = currentDate.getMonth();
            // Damit der Monat montags beginnt:
            var firstDayIndex = new Date(year, month, 1).getDay() - 1;
            if (firstDayIndex < 0) { firstDayIndex = 6; }

            // Vormonats-Tage
            var prevMonth, prevYear;
            if (month === 0) {
                prevMonth = 11;
                prevYear = year - 1;
            } else {
                prevMonth = month - 1;
                prevYear = year;
            }
            var daysInPrevMonth = new Date(prevYear, prevMonth + 1, 0).getDate();
            for (var i = 0; i < firstDayIndex; i++) {
                var day = daysInPrevMonth - firstDayIndex + i + 1;
                var dateObj = new Date(prevYear, prevMonth, day);
                addDayCell(dateObj, false, gridCells, i === 0);
            }

            // Aktuelle Monatstage
            var daysInMonth = new Date(year, month + 1, 0).getDate();
            for (var i = 1; i <= daysInMonth; i++) {
                var dateObj = new Date(year, month, i);
                addDayCell(dateObj, true, gridCells, false);
            }

            // Fülle bis zu 42 Zellen (6 Zeilen)
            var totalCells = firstDayIndex + daysInMonth;
            var nextDaysCount = 42 - totalCells;
            var nextMonth, nextYear;
            if (month === 11) {
                nextMonth = 0;
                nextYear = year + 1;
            } else {
                nextMonth = month + 1;
                nextYear = year;
            }
            for (var i = 1; i <= nextDaysCount % 7; i++) {
                var dateObj = new Date(nextYear, nextMonth, i);
                addDayCell(dateObj, false, gridCells, false);
            }
        }
        else if (currentView === "week") {
            var weekGrid = document.createElement('div');
            weekGrid.classList.add('week-grid');

            var weekHeader = document.createElement('div');
            weekHeader.classList.add('grid-header');
            weekGrid.appendChild(weekHeader);

            var weekCells = document.createElement('div');
            weekCells.classList.add('grid-cells');
            weekGrid.appendChild(weekCells);
            calendar.appendChild(weekGrid);

            // Ermittle den Montag der aktuellen Woche
            var monday = new Date(currentDate);
            var dayOfWeek = monday.getDay();
            // In JS: Sonntag = 0, Montag = 1 ...
            if (dayOfWeek === 0) {
                monday.setDate(monday.getDate() - 6);
            } else {
                monday.setDate(monday.getDate() - (dayOfWeek - 1));
            }

            // Kopfzeile mit Wochentagen und Datum
            for (var i = 0; i < 7; i++) {
                var d = new Date(monday);
                d.setDate(monday.getDate() + i);
                var cell = document.createElement('div');
                cell.classList.add('grid-cell');
                cell.innerText = weekdays[i];
                weekHeader.appendChild(cell);
            }

            // Zellen für jeden Tag der Woche
            for (var i = 0; i < 7; i++) {
                var d = new Date(monday);
                d.setDate(monday.getDate() + i);
                addDayCell(d, true, weekCells, i === 0);
            }
        }
        else if (currentView === "day") {
            var dayGrid = document.createElement('div');
            dayGrid.classList.add('day-grid');

            //Wochentag als header
            var dayHeader = document.createElement('div');
            dayHeader.classList.add('grid-header');
            dayGrid.appendChild(dayHeader);
            var dayCell = document.createElement('div');
            dayCell.classList.add('grid-cell');
            dayCell.innerText = weekdays[currentDate.getDay() - 1 < 0 ? 6 : currentDate.getDay() - 1];
            dayHeader.appendChild(dayCell);

            // Tageszelle
            addDayCell(currentDate, true, dayGrid, true);

            calendar.appendChild(dayGrid);
        }

        updateCurrentLabel();

        fetchHomeworks();

        homeworks.forEach(function(homework){
            addHomeworkToCell(homework.endDate, homework);
        });
    }

    // Erzeugt eine einzelne Tageszelle (für Monatsansicht)
    function addDayCell(dateObj, inMonth, container, first) {
        var cell = document.createElement('div');
        cell.classList.add('grid-cell');
        if (!inMonth) {
            cell.classList.add('not-in-month');
        }
        var cellHeader = document.createElement('div');
        cellHeader.classList.add('grid-cell-header');
        // Zeige am 1. Tag zusätzlich den Monatsnamen
        cellHeader.innerText = dateObj.getDate() + (dateObj.getDate() === 1 || first ? ". " + monthNames[dateObj.getMonth()] : '');
        // Heute markieren (nur, wenn Tag im aktuellen Monat liegt)
        var today = new Date();
        if (inMonth &&
            dateObj.getDate() === today.getDate() &&
            dateObj.getMonth() === today.getMonth() &&
            dateObj.getFullYear() === today.getFullYear()) {
            cellHeader.classList.add('today');
        }
        cell.appendChild(cellHeader);
        var content = document.createElement('div');
        content.classList.add('cal-content');
        content.setAttribute('data-date', dateObj.getFullYear() + '-' + (dateObj.getMonth() + 1).toString().padStart(2, '0') + '-' + dateObj.getDate().toString().padStart(2, '0'));

        //add button
        const addButton = document.createElement("i");
        addButton.classList.add('fa-solid', 'fa-plus', 'add-event-button');
        addButton.addEventListener('click', function(){
            createNewEvent(dateObj.getFullYear() + '-' + (dateObj.getMonth() + 1).toString().padStart(2, '0') + '-' + dateObj.getDate().toString().padStart(2, '0'));
        });
        content.appendChild(addButton);

        cell.appendChild(content);
        container.appendChild(cell);
    }

    function createNewEvent(date){
        const dateCell = document.querySelector('[data-date="' + date + '"]');
        const event = document.createElement('div');
        event.classList.add('event');
        event.style.backgroundColor = '#007bff';
        event.style.color = 'white';
        event.innerHTML = `<strong>Neues Event</strong>`;
        dateCell.insertBefore(event, dateCell.lastElementChild);
    }

    function addHomeworkToCell(date, homeworkObject) {

        //<div class="cal-content" data-date="2025-03-19"></div> search for this
        var cell = document.querySelector('[data-date="' + date + '"]');

        if (cell) {
            var listOfPastellColors = ['#ADD8E6', '#87CEEB', '#4682B4', '#5F9EA0', '#B0E0E6'];
            homeworkObject.color = listOfPastellColors[Math.floor(Math.random() * listOfPastellColors.length)];

            var event = document.createElement('div');
            event.classList.add('event');
            event.style.backgroundColor = homeworkObject.color;
            event.style.color = invertColor(homeworkObject.color);
            event.innerHTML = `<strong>${homeworkObject.subjects[0]} (${homeworkObject.teachers[0]})</strong><br>${homeworkObject.text.length > 50 ? homeworkObject.text.substring(0, 50) + '...' : homeworkObject.text}`;
            event.addEventListener('click', function() {
                open(homeworkObject);
            });
            cell.insertBefore(event, cell.lastElementChild);
        }
    }

    function open(homeworkObject){
        const modalBackground = document.createElement('div');
        modalBackground.classList.add('untis-hw-background');

        const modal = document.createElement('div');
        modal.innerHTML = `
            <h2>${homeworkObject.subjects[0]} (${homeworkObject.teachers[0]})</h2>
            <p><strong>Datum:</strong> ${homeworkObject.startDate.split('-').reverse().join('-')} - ${homeworkObject.endDate.split('-').reverse().join('-')}</p>
            <hr>
            <p>${homeworkObject.text}</p>
        `
        modal.classList.add('untis-hw');

        //close button
        const closeButton = document.createElement('i');
        closeButton.classList.add('fa-solid', 'fa-times');
        closeButton.style.position = 'absolute';
        closeButton.style.top = '1em';
        closeButton.style.right = '1em';
        closeButton.style.fontSize = '1em';
        closeButton.style.padding = '0.5em';
        closeButton.style.cursor = 'pointer';

        closeButton.addEventListener('click', function(){
            modalBackground.classList.add("close-animation")

            setTimeout(() => {
                modalBackground.remove();
            }, 300);
        });

        modal.appendChild(closeButton);

        modalBackground.appendChild(modal);

        modalBackground.addEventListener('click', function( event ) {
            if (event.target === modalBackground)
            {
                modalBackground.classList.add("close-animation")

                setTimeout(() => {
                    modalBackground.remove();
                }, 300);
            }
        });


        document.body.appendChild(modalBackground);
    }

    function invertColor(hex) {
        if (hex.indexOf('#') === 0) {
            hex = hex.slice(1);
        }
        if (hex.length === 3) {
            hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
        }
        if (hex.length !== 6) {
            throw new Error('Invalid HEX color.');
        }
        var r = parseInt(hex.slice(0, 2), 16);
        var g = parseInt(hex.slice(2, 4), 16);
        var b = parseInt(hex.slice(4, 6), 16);

        var brightness = Math.round(((r * 299) + (g * 587) + (b * 114)) / 1000);
        return (brightness > 125) ? 'black' : 'white';
    }

    function darkerColor(hex) {
        if (hex.indexOf('#') === 0) {
            hex = hex.slice(1);
        }
        if (hex.length === 3) {
            hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
        }
        if (hex.length !== 6) {
            throw new Error('Invalid HEX color.');
        }
        var r = parseInt(hex.slice(0, 2), 16);
        var g = parseInt(hex.slice(2, 4), 16);
        var b = parseInt(hex.slice(4, 6), 16);

        r = Math.round(r * 0.9);
        g = Math.round(g * 0.9);
        b = Math.round(b * 0.9);

        return '#' + r.toString(16) + g.toString(16) + b.toString(16);
    }

    // Aktualisiert die Anzeige der aktuellen Zeitspanne
    function updateCurrentLabel() {
        var label = document.getElementById('currentLabel');
        if (currentView === "month") {
            label.innerText = monthNames[currentDate.getMonth()] + " " + currentDate.getFullYear();
        } else if (currentView === "week") {
            // Ermittle den Montag und Sonntag der Woche
            var monday = new Date(currentDate);
            var dayOfWeek = monday.getDay();
            if (dayOfWeek === 0) {
                monday.setDate(monday.getDate() - 6);
            } else {
                monday.setDate(monday.getDate() - (dayOfWeek - 1));
            }
            var sunday = new Date(monday);
            sunday.setDate(monday.getDate() + 6);
            label.innerText = formatDate(monday) + " - " + formatDate(sunday);
        } else if (currentView === "day") {
            label.innerText = formatDate(currentDate);
        }
    }



    // Navigation: prev, next und today passen sich dem aktuellen View an
    document.getElementById('prev').addEventListener('click', function() {
        if (currentView === "month") {
            currentDate.setMonth(currentDate.getMonth() - 1);
        } else if (currentView === "week") {
            currentDate.setDate(currentDate.getDate() - 7);
        } else if (currentView === "day") {
            currentDate.setDate(currentDate.getDate() - 1);
        }
        renderCalendar();
    });
    document.getElementById('next').addEventListener('click', function() {
        if (currentView === "month") {
            currentDate.setMonth(currentDate.getMonth() + 1);
        } else if (currentView === "week") {
            currentDate.setDate(currentDate.getDate() + 7);
        } else if (currentView === "day") {
            currentDate.setDate(currentDate.getDate() + 1);
        }
        renderCalendar();
    });
    document.getElementById('today').addEventListener('click', function() {
        currentDate = new Date();
        renderCalendar();
    });

    // View-Auswahl
    document.getElementById('viewMonth').addEventListener('click', function() {
        currentView = "month";
        renderCalendar();
    });
    document.getElementById('viewWeek').addEventListener('click', function() {
        currentView = "week";
        renderCalendar();
    });
    document.getElementById('viewDay').addEventListener('click', function() {
        currentView = "day";
        renderCalendar();
    });

    // Initial rendern
    renderCalendar();

    function fetchHomeworks(){
        //fetch /shared/untisAPI.php?action=fetchHomeworks

        var formData = new FormData();
        var startDate = new Date(currentDate);
        startDate.setMonth(startDate.getMonth() - 1);
        startDate.setDate(24);
        var endDate = new Date(currentDate);
        endDate.setMonth(endDate.getMonth() + 1);
        endDate.setDate(7);

        //20240131
        formData.append('startDate', startDate.getFullYear() + '' + (startDate.getMonth() + 1).toString().padStart(2, '0') + startDate.getDate().toString().padStart(2, '0'));
        formData.append('endDate', endDate.getFullYear() + '' + (endDate.getMonth() + 1).toString().padStart(2, '0') + endDate.getDate().toString().padStart(2, '0'));

        if ( requestedMonthes.includes(startDate.getFullYear() + '' + (startDate.getMonth() + 1).toString().padStart(2, '0'))){
            return;
        }
        requestedMonthes.push(startDate.getFullYear() + '' + (startDate.getMonth() + 1).toString().padStart(2, '0'));

        fetch('shared/untisAPI.php?action=fetchHomeworks', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                //push if not already in array (compare by id)
                data.forEach(function(homework){
                    let newHomeworks = [];
                    if(homeworks.find(h => h.id === homework.id) === undefined){
                        newHomeworks.push(homework);
                    }

                    newHomeworks.forEach(function(homework){
                        addHomeworkToCell(homework.endDate, homework);
                    });

                    homeworks = homeworks.concat(newHomeworks);
                });
            });
    }


</script>


</body>
<?php
include './shared/footer.php';
?>
</html>
