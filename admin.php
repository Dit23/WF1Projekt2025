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

    <style>
        .form-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1em;
            border-radius: 5px;
            width: clamp(300px, 50%, 500px);
        }

        .form-title {
            text-align: center;
        }

        .input-ueberschrift {
            font-size: 1.2em;
        }

        .input-field {
            width: 100%;
            margin-bottom: 1em;
            background-color: #f1f1f1;
            border: none;
            padding: 0.5em;
            border-radius: 5px;
        }

        .save-button {
            width: 100%;
            margin-top: 1em;
        }
    </style>
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

                        classEditButton.addEventListener('click', function () {
                            const formBackground = document.createElement('div');
                            formBackground.classList.add('form-background');

                            formBackground.addEventListener('click', function (event) {
                                if (event.target === formBackground) {
                                    formBackground.remove();
                                }
                            });

                            const formContainer = document.createElement('div');
                            formContainer.classList.add('form-container');

                            const formTitle = document.createElement('h1');
                            formTitle.classList.add('form-title');
                            formTitle.innerHTML = 'Klasse bearbeiten';
                            formContainer.appendChild(formTitle);

                            const inputNameUEberschrift = document.createElement('h2');
                            inputNameUEberschrift.classList.add('input-ueberschrift');
                            inputNameUEberschrift.innerHTML = 'Klassenname';
                            formContainer.appendChild(inputNameUEberschrift);

                            const inputName = document.createElement('input');
                            inputName.classList.add('input-field');
                            inputName.type = 'text';
                            inputName.placeholder = 'Klassenname';
                            inputName.value = klass.name;
                            formContainer.appendChild(inputName);

                            const inputPasswordUEberschrift = document.createElement('h2');
                            inputPasswordUEberschrift.classList.add('input-ueberschrift');
                            inputPasswordUEberschrift.innerHTML = 'Passwort';
                            formContainer.appendChild(inputPasswordUEberschrift);

                            const inputPassword = document.createElement('input');
                            inputPassword.classList.add('input-field');
                            inputPassword.type = 'password';
                            inputPassword.placeholder = 'Neues Passwort';
                            formContainer.appendChild(inputPassword);

                            const inputUntisUsernameUEberschrift = document.createElement('h2');
                            inputUntisUsernameUEberschrift.classList.add('input-ueberschrift');
                            inputUntisUsernameUEberschrift.innerHTML = 'Untis Benutzername';
                            formContainer.appendChild(inputUntisUsernameUEberschrift);

                            const inputUntisUsername = document.createElement('input');
                            inputUntisUsername.classList.add('input-field');
                            inputUntisUsername.type = 'text';
                            inputUntisUsername.placeholder = 'Untis Benutzername';
                            inputUntisUsername.value = klass.untisUsername;
                            formContainer.appendChild(inputUntisUsername);

                            const inputUntisKeyUEberschrift = document.createElement('h2');
                            inputUntisKeyUEberschrift.classList.add('input-ueberschrift');
                            inputUntisKeyUEberschrift.innerHTML = 'Untis Key';
                            formContainer.appendChild(inputUntisKeyUEberschrift);

                            const inputUntisKey = document.createElement('input');
                            inputUntisKey.classList.add('input-field');
                            inputUntisKey.type = 'text';
                            inputUntisKey.placeholder = 'Untis Key';
                            inputUntisKey.value = klass.untisPasswort;
                            formContainer.appendChild(inputUntisKey);

                            formBackground.appendChild(formContainer);
                            document.body.appendChild(formBackground);

                            const saveButton = document.createElement('button');
                            saveButton.classList.add('btn', 'btn-primary', 'save-button');
                            saveButton.innerHTML = 'Speichern';

                            saveButton.addEventListener('click', function () {
                                var formData = new FormData();
                                formData.append('method', 'updateClass');
                                formData.append('id', klass.id);
                                formData.append('name', inputName.value);
                                formData.append('password', inputPassword.value);
                                formData.append('untisUsername', inputUntisUsername.value);
                                formData.append('untisKey', inputUntisKey.value);

                                fetch('api', {
                                    method: 'POST',
                                    body: formData
                                }).then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            reloadClasses();
                                            formBackground.remove();
                                        } else {
                                            alert(data.message);
                                        }
                                    });
                            });

                            formContainer.appendChild(saveButton);
                        });

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
