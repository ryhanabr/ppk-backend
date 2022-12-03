<?php 
    $userId = $_GET["userId"];
?>

<script>
    const userId = <?php echo $userId?>;
    fetch('http://localhost:8080/auth/'+userId, { method: 'DELETE' })
        .then((response) => console.log(response.status));
</script>

<?php
    header('Location: kelola_pengguna.html');
?>