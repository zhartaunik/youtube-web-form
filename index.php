<?php
declare(strict_types=1);

require_once 'functions.php';
?>

<html>
<head>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Game Name</td>
                <td>Description</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach (readGames() as $oneGame) : ?>
            <tr>
                <td><?= $oneGame['game_name']; ?></td>
                <td><?= $oneGame['description']; ?></td>
                <td>
                    <a class="button-all button-delete" href="/deleteAction.php?game_name=<?= $oneGame['game_name']; ?>" title="Delete">Delete</a>
                    <a class="button-all button-update" href="/update.php?game_name=<?= $oneGame['game_name']; ?>&description=<?= $oneGame['description']; ?>" title="Update">Update</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a class="button-all add-new" href="/new-form.php" title="Add New Game">Add New Game</a>
</body>
</html>
