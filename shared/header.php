<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="./" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Digitaler Schulplaner</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="./" class="nav-link active" aria-current="page">Home</a></li>
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