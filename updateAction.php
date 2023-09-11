<?php

declare(strict_types=1);

require_once 'functions.php';

updateGame($_GET['games']['game_name'], $_GET['games']);

header('Location: /index.php');