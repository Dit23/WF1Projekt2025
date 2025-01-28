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
    <?php
    include './shared/head.php';
    ?>
</head>
<body>
<div class="modal modal-sheet position-static bg-body-secondary" tabindex="-1" role="dialog" id="modalSignin" style="height: 100vh; display: flex; align-items: center; justify-content: center">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <img src="https://i.ibb.co/h13ThT1/bkodatteln-logo.png" alt="" style="display: block; width: calc(100% - 2rem); max-width: 200px; height: auto; margin: auto auto -3em; border-radius: 5px;">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Willkommen zurück!</h1>
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
                        formData.append('username', document.getElementById('floatingInput').value);
                        formData.append('password', document.getElementById('floatingPassword').value);

                        fetch('api', {
                            method: 'POST',
                            body: formData
                        }).then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    window.location.href = './';
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
