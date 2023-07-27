<?php
// useful functions
function selectAllFromTable($tableName) {
    global $pdo;
    $sql = "SELECT * FROM $tableName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $tableDatas = $stmt->fetchAll();
    return $tableDatas;
}

function selectAllFromTableWhere($tableName, $columnName, $whereConditional, $fetchAllOrFetch) {
    global $pdo;
    $sql = "SELECT * FROM $tableName WHERE $columnName = :whereConditional";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':whereConditional', $whereConditional);
    $stmt->execute();
    $tableDatas = $stmt->$fetchAllOrFetch();
    return $tableDatas;
}
?>