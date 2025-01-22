<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ba744107d9.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="modal modal-sheet position-static bg-body-secondary" tabindex="-1" role="dialog" id="modalSignin" style="height: 100vh; display: flex; align-items: center; justify-content: center">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Willkommen zurück!</h1>
                <form action="index.php">
                    <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </form>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="" id="loginForm">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Username" name="username" required>
                    <label for="floatingInput">Klassenname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Passwort</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" id="loginButton">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Anmelden
                </button>
                </form>

                <script>

                    document.getElementById("loginForm").addEventListener('submit', function (event) {
                        event.preventDefault();
                        var formData = new FormData();
                        formData.append('method', 'login');
                        formData.append('floatingInput', document.getElementById('floatingInput').value);
                        formData.append('floatingPassword', document.getElementById('floatingPassword').value);

                        fetch('api', {
                            method: 'POST',
                            body: formData
                        }).then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    window.location.href = 'index.php';
                                } else {
                                    alert(data.message);
                                }
                            });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
</body>
</html>
