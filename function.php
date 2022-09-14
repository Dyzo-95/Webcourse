<?php

// Première fonction pour avoir tout les championnats dans la liste //

function getChampionnat($conn) {
    $champ = $conn->prepare('SELECT * from championnat'); 
    $champ->execute();
    $champAll = $champ->fetchAll();
    return $champAll;
}

function getManifestation($conn) {
    $manif = $conn->prepare('SELECT * from manifestation');
    $manif->execute();
    $manifAll = $manif->fetchAll();
    return $manifAll;
}

function getCategorie($conn) {
    $cat = $conn->prepare('SELECT * from catégorie');
    $cat->execute();
    $catAll = $cat->fetchAll();
    return $catAll;
}

function getEpreuve($conn) {
    $epr = $conn->prepare('SELECT * from epreuve');
    $epr->execute();
    $eprAll = $epr->fetchAll();
    return $eprAll;
}

function getClub($conn) {
    $clu = $conn->prepare('SELECT * from club');
    $clu->execute();
    $cluAll = $clu->fetchAll();
    return $cluAll;
}

function getMaillot($conn) {
    $mai = $conn->prepare('SELECT * from inscrire');
    $mai->execute();
    $maiAll = $mai->fetchAll();
    return $maiAll;
}

function getReglement($conn) {
    $reg = $conn->prepare('SELECT * from mode_reglement');
    $reg->execute();
    $regAll = $reg->fetchAll();
    return $regAll;
}
