<?php
require_once 'dbConfig.php';

function insertIntoAstronautRecords($pdo, $first_name, $last_name, $gender, $experience_years, $missions, $certifications, $preferred_spacecraft) {
    $sql = "INSERT INTO astronaut_records (first_name, last_name, gender, experience_years, missions, certifications, preferred_spacecraft) VALUES (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $experience_years, $missions, $certifications, $preferred_spacecraft]);
}

function seeAllAstronautRecords($pdo) {
    $sql = "SELECT * FROM astronaut_records";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAstronautByID($pdo, $astronaut_id) {
    $sql = "SELECT * FROM astronaut_records WHERE astronaut_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$astronaut_id]);
    return $stmt->fetch();
}

function updateAstronautRecord($pdo, $astronaut_id, $first_name, $last_name, $gender, $experience_years, $missions, $certifications, $preferred_spacecraft) {
    $sql = "UPDATE astronaut_records SET first_name = ?, last_name = ?, gender = ?, experience_years = ?, missions = ?, certifications = ?, preferred_spacecraft = ? WHERE astronaut_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $gender, $experience_years, $missions, $certifications, $preferred_spacecraft, $astronaut_id]);
}

function deleteAstronautRecord($pdo, $astronaut_id) {
    $sql = "DELETE FROM astronaut_records WHERE astronaut_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$astronaut_id]);
}

function seeAllAstronauts($pdo) {
    $sql = "SELECT * FROM astronaut_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}
?>
