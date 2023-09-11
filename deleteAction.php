<?php

declare(strict_types=1);

require_once 'functions.php';

deleteGame($_GET['game_name']);

header('Location: /index.php');