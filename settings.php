<?php include 'includes/header.php'; ?>


<?php

$json = file_get_contents('data.json');
$data = json_decode($json, true);
$max_data_actions = count($data['actions']);
$max_data_verites = count($data['verites']);

?>
<div class="container">
    <div class="row">
        <div class="col"><h1>Infos et réglages</h1></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h2>Infos</h2>
            <div>Nombre d'action : <strong><?php echo($max_data_actions); ?></strong></div>
            <div>Nombre de vérité : <strong><?php echo($max_data_verites); ?></strong></div>
        </div>
        <div class="col-12 col-md-6">
            <h2>Réglages</h2>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

