<?php

include '../layout/header.php';
include '../data.php';
?>

<?php if (isset($_GET['search'])) : ?>
    <?php
        // fetch user index by name
        $userIndex = array_search($_GET['search'], $users);
    ?>

    <?php if ($userIndex === false) : ?>
        <p>No user found with the name: <?= $_GET['search'] ?></p>
    <?php else : ?>
        <h1>User details</h1>
        <p>Name: <?= $users[$userIndex] ?></p>
    <?php endif ?>

<?php else : ?>
    <p>No search term provided</p>
<?php endif ?>

<?php
include '../layout/footer.php';