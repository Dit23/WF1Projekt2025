<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>

<a href="./" class="btn btn-primary">
    Home
</a>
<button id="logoutButton" class="btn btn-primary">
    Logout
</button>
<?php
if ($_SESSION['admin'] === true) {
    ?>
    <a href="admin" class="btn btn-primary">
        Admin
    </a>
    <?php
}
?>



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