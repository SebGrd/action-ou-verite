<?php include 'includes/header.php'; ?>

<?php include 'includes/main.php'; ?>

<div class="defi">
    <div class="box box-action">
        <h3>Action :</h3>
        <span><?php
            $json = file_get_contents('data.json');
            $data = json_decode($json, true);
            $max_data = count($data['actions']);
            echo $data['actions'][rand(0,$max_data-1)];
            ?></span>
        <button class="rem">Fermer</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

