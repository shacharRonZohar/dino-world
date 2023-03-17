<?php
require_once('./services/dino_service.php');

$title = 'Dinos';
$dinos = query();

?>

<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>
    <?php include './components/header.php'; ?>
    <main>
        <h2>Dinos</h2>
        <ul>
            <?php foreach ($dinos as $dino) : ?>
                <li>
                    <a class="dino-preview" href="./dino.php?id=<?= $dino['id'] ?>">
                        <?= $dino['full_name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>