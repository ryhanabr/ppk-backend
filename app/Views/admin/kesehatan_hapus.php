<?php 
    $id = $_GET["id"];
?>

<script>
    const id = <?php echo $id?>;
    fetch('http://localhost:8080/kesehatan/'+id, { method: 'DELETE' })
        .then((response) => console.log(response.status));
</script>

<?php
    header('Location: kelola_kesehatan.html');
?>