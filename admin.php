<?php
include './shared/global.php';
global $pdo;

if ($_SESSION['admin'] === false) {
    header('Location: ./');
    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Digitaler Schulplaner Konzept</title>
    <?php
    include './shared/head.php';
    ?>
</head>
<?php
include './shared/header.php';
?>
<body class="container flex-column gap-3" style="display: flex">
<div class="card">
    <div class="card-header">
        <h1>Klassenverwaltung</h1>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Klassenname</th>
                <th scope="col" style="width: 200px;">Aktionen</th>
            </tr>
            </thead>
            <tbody id="classes">

            </tbody>
        </table>
    </div>
</div>

<!--    new class-->
    <div id="newClass" class="card" style="width: fit-content; margin: 0 auto;">
        <div class="card-header">
            <h1>Neue Klasse anlegen</h1>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="newClassName" placeholder="Klassenname" required>
                <label for="newClassName">Klassenname</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="newClassPassword" placeholder="Passwort" required>
                <label for="newClassPassword">Passwort</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" id="newClassButton">
                <i class="fa-solid fa-right-to-bracket"></i>
                Anlegen
            </button>
        </div>
    </div>
</body>
<?php
include './shared/footer.php';
?>
<script>

    function reloadClasses() {
        document.getElementById("classes").innerHTML = '';

        var formData = new FormData();
        formData.append('method', 'getAllClasses');

        fetch('api', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    var classes = data.classes;
                    var classesDiv = document.getElementById('classes');

                    classes.forEach(function (klass) {
                        var classRow = document.createElement('tr');

                        var classNameCell = document.createElement('td');
                        classNameCell.innerHTML = klass.name;

                        var classActionsCell = document.createElement('td');

                        var classEditButton = document.createElement('button');
                        classEditButton.classList.add('btn');
                        classEditButton.classList.add('btn-primary');
                        classEditButton.innerHTML = 'Bearbeiten';

                        var classDeleteButton = document.createElement('button');
                        classDeleteButton.classList.add('btn');
                        classDeleteButton.classList.add('btn-danger');
                        classDeleteButton.innerHTML = 'Löschen';

                        classDeleteButton.addEventListener('click', function () {
                            if (confirm('Möchten Sie die Klasse wirklich löschen?')) {
                                var formData = new FormData();
                                formData.append('method', 'deleteClass');
                                formData.append('id', klass.id);

                                fetch('api', {
                                    method: 'POST',
                                    body: formData
                                }).then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            classRow.remove();
                                        } else {
                                            alert(data.message);
                                        }
                                    });
                            }
                        });

                        classActionsCell.appendChild(classEditButton);
                        classActionsCell.appendChild(classDeleteButton);

                        classRow.appendChild(classNameCell);
                        classRow.appendChild(classActionsCell);

                        classesDiv.appendChild(classRow);
                    });
                } else {
                    alert(data.message);
                }
            });
    }

    reloadClasses();

    document.getElementById('newClassButton').addEventListener('click', function () {
        var formData = new FormData();
        formData.append('method', 'createNewClassAccount');
        formData.append('username', document.getElementById('newClassName').value);
        formData.append('password', document.getElementById('newClassPassword').value);

        fetch('api', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    reloadClasses();
                    //clear inputs
                    document.getElementById('newClassName').value = '';
                    document.getElementById('newClassPassword').value = '';
                } else {
                    alert(data.message);
                }
            });
    });
</script>
</html>
