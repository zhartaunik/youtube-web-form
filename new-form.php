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
    <form action="createAction.php" method="get">
        <div class="form-field">
            <label for="games[game_name]">
                <span>Game Name</span>
                <input type="text" name="games[game_name]">
            </label>
        </div>
        <div class="form-field">
            <label for="games[description]">
                <span>Description</span>
                <input type="text" name="games[description]">
            </label>
        </div>
        <button class="button-all add-new" type="submit">Add New Game</button>
    </form>
</body>
</html>