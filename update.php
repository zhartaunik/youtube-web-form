<?php
declare(strict_types=1);

require_once 'functions.php';
?>

<html>
<head>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
<a class="button-all back-home" href="/index.php" title="Add New Game">Go Home</a>
<h1>Create new Game.</h1>
    <form action="updateAction.php" method="get">
        <div class="form-field">
            <h2>Game Name: <?= $_GET['game_name']; ?></h2>
            <input type="hidden" name="games[game_name]" value="<?= $_GET['game_name']; ?>">
        </div>
        <div class="form-field">
            <label for="games[description]">
                <span>Description</span>
                <input type="text" name="games[description]" value="<?= $_GET['description']; ?>">
            </label>
        </div>
        <button class="button-all add-new" type="submit">Update</button>
    </form>
</body>
</html>