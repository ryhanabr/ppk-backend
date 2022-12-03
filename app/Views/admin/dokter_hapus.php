<?php 
    $id = $_GET["id"];
?>

<script>
    const id = <?php echo $id?>;
    fetch('http://localhost:8080/dokter/'+id, { method: 'DELETE' })
        .then((response) => console.log(response.status));
</script>

<?php
    header('Location: edit_dokter.html');
?>