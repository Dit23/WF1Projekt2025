<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="./" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="shared/logo.svg" style="height: 50px; margin-right: 10px">
            <span class="fs-4">Digitaler Schulplaner</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="./" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item" style="margin-left: 10px"><a href="./calendar" class="nav-link active" aria-current="page">Kalender</a></li>
            <li class="nav-item"><a href="#" id="logoutButton" class="nav-link">Logout</a></li>
            <?php
            if ($_SESSION['admin'] === true) {
                ?>
                <li class="nav-item"><a href="admin" class="nav-link">Admin</a></li>
                <?php
            }
            ?>
        </ul>
    </header>
</div>

<style>
    .header {
        position: sticky;
        top: 0;
        z-index: 1;
        background: white;
    }
</style>

<script>
    document.getElementById('logoutButton').addEventListener('click', function () {
        var formData = new FormData();
        formData.append('method', 'logout');

        fetch('api', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'login';
                } else {
                    alert(data.message);
                }
            });
    });
</script>