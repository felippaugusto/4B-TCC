<?php
require_once 'php_actions/db_connect.php';
$pdo = connect();

// useful functions
function selectAllFromTable($tableName) {
    global $pdo;
    $sql = "SELECT * FROM $tableName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $tableDatas = $stmt->fetchAll();
    return $tableDatas;
}

function selectAllFromTableWhere($tableName, $columnName, $whereConditional) {
    global $pdo;
    $sql = "SELECT * FROM $tableName WHERE $columnName = :whereConditional";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':whereConditional', $whereConditional);
    $stmt->execute();
    $tableDatas = $stmt->fetchAll();
    return $tableDatas;
}
?>