<?php
require_once('./services/dino_service.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dino = get_by_id($id);
    $title = ucwords($dino['full_name']);
} else {
    header('Location: ./dinos.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('./components/head.php'); ?>

<body>
    <?php require_once('./components/header.php'); ?>

    <main>
        <h2><?= $dino['full_name'] ?></h2>
        <div class="img-wrapper">
            <img src="<?= $dino['img'] ?>" alt="<?= $dino['full_name'] ?>">
        </div>
        <p><?= $dino['description'] ?></p>
    </main>
</body>

</html>