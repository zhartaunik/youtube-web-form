<?php

declare(strict_types=1);

function readFromStorage(): array
{
    $dataFromStorage = file_get_contents('storage/our-data.json');
    return json_decode($dataFromStorage, true);
}

function writeToStorage(array $dataToWrite): void
{
    $jsonData = json_encode($dataToWrite);
    file_put_contents('storage/our-data.json', $jsonData);
}

/**
 * Creates new game.
 *
 * @param array $gameToCreate
 * @return void
 */
function createGame(array $gameToCreate): void
{
    $allGames = readFromStorage();
    $allGames['games'][] = $gameToCreate;
    writeToStorage($allGames);
}

/**
 * Read all games.
 *
 * @return array
 */
function readGames(): array
{
    $allGames = readFromStorage();
    return $allGames['games'];
}

/**
 * Update existing game.
 *
 * @param string $gameNameToUpdate
 * @param array $gameToUpdate
 * @return void
 */
function updateGame(string $gameNameToUpdate, array $gameToUpdate): void
{
    $allGames = readFromStorage();
    foreach ($allGames['games'] as $keyNumber => $oneGame) {
        if ($oneGame['game_name'] === $gameNameToUpdate) {
            $allGames['games'][$keyNumber] = $gameToUpdate;
        }
    }
    writeToStorage($allGames);
}

/**
 * Delete existing game.
 *
 * @param string $gameNameToDelete
 * @return void
 */
function deleteGame(string $gameNameToDelete): void
{
    $allGames = readFromStorage();
    foreach ($allGames['games'] as $keyNumber => $oneGame) {
        if ($oneGame['game_name'] === $gameNameToDelete) {
            unset($allGames['games'][$keyNumber]);
        }
    }
    writeToStorage($allGames);
}