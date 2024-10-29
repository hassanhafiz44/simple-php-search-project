<?php
include 'layout/header.php';
include 'data.php';
?>

<h1>List of all users (main page)</h1>

<form action="scripts/search.php" method="get">
    <label for="search">Search by name:</label>
    <input type="text" name="search" id="search">
    <button type="submit">Search</button>
</form>

<?php if (count($users) === 0) : ?>
    <p>No users found</p>
<?php else : ?>
    <ol>
        <?php foreach ($users as $user) : ?>
            <li>
                <?= $user ?>
            </li>
        <?php endforeach ?>
    </ol>
<?php endif ?>

<?php
include 'layout/footer.php';
