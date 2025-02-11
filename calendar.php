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
        .month-grid {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 40px 1fr;
            gap: 1px;
            border-radius: 15px;
            overflow: hidden;
        }

        .grid-header {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }

        .grid-header .grid-cell {
            text-align: center;
        }

        .grid-cell {
            background-color: #f6f6f6;
        }

        .grid-cells .grid-cell {
            min-height: 125px;
        }

        .grid-cells .grid-cell:hover {
            background-color: #e9e9e9;
        }

        .grid-cells .grid-cell .content {
        }

        .grid-cell.not-in-month {
            background-color: #f0f0f0;
        }

        .grid-cells {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
        }

        .grid-cell-header {
            font-weight: bold;
            width: fit-content;
            text-align: center;
            font-size: 0.75em;
            padding: 0 0.5em;
            margin: 0.25em auto auto;
        }

        .arrows {
            background-color: #f6f6f6;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 50px;
            padding: 0.5em 1em;
        }

        .calendar-header {
            margin-bottom: 1em;
        }

        .today {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
        }
    </style>
</head>
<?php
include './shared/header.php';
?>
<body class="container">

    <div class="calendar-header">
        <button id="today" class="arrows">
            Heute
        </button>
        <button id="prevMonth" class="arrows">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button id="nextMonth" class="arrows">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        <span>
            <span id="currentMonth"></span>
        </span>
    </div>
    <div class="month-grid">
        <div class="grid-header"></div>
        <div class="grid-cells"></div>

        <script>
            var date = new Date();
            var month = date.getMonth();
            var year = date.getFullYear();

            var weekdays = ['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'];
            var monthNames = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];

            function renderCalendar(month, year) {
                var daysInMonth = new Date(year, month + 1, 0).getDate();
                var firstDay = new Date(year, month, 1).getDay() - 1;

                var gridCells = document.querySelector('.grid-cells');
                gridCells.innerHTML = '';

                var gridHeader = document.querySelector('.grid-header');
                gridHeader.innerHTML = '';

                for (var i = 0; i < firstDay; i++) {
                    var cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    cell.classList.add('not-in-month');
                    gridCells.appendChild(cell);
                }

                for (var i = 1; i <= daysInMonth; i++) {
                    var cell = document.createElement('div');
                    cell.classList.add('grid-cell');

                    var cellHeader = document.createElement('div');
                    cellHeader.classList.add('grid-cell-header');
                    cellHeader.innerText = (i === 1) ? i + '. ' + monthNames[month] : i;

                    if (i === date.getDate() && month === date.getMonth() && year === date.getFullYear()) {
                        cellHeader.classList.add('today');
                    }

                    cell.appendChild(cellHeader);

                    //content
                    var content = document.createElement('div');
                    content.classList.add('content');
                    content.innerText = '';

                    cell.appendChild(content);

                    gridCells.appendChild(cell);
                }

                for (var i = 0; i < (42 - daysInMonth - firstDay) % 7; i++) {
                    var cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    cell.classList.add('not-in-month');
                    gridCells.appendChild(cell);
                }

                weekdays.forEach(function(weekday) {
                    var cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    cell.innerText = weekday;
                    gridHeader.appendChild(cell);
                });

                document.getElementById('currentMonth').innerText = monthNames[month] + ' ' + year;
            }

            document.getElementById('prevMonth').addEventListener('click', function() {
                month--;
                if (month < 0) {
                    month = 11;
                    year--;
                }
                renderCalendar(month, year);
            });

            document.getElementById('nextMonth').addEventListener('click', function() {
                month++;
                if (month > 11) {
                    month = 0;
                    year++;
                }
                renderCalendar(month, year);
            });

            document.getElementById('today').addEventListener('click', function() {
                var date = new Date();
                month = date.getMonth();
                year = date.getFullYear();
                renderCalendar(month, year);
            });

            renderCalendar(month, year);
        </script>

    </div>

</body>
<?php
include './shared/footer.php';
?>
</html>
