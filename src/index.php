<?php
try {
    $newsData = fetchNews();
    outputArray($newsData);
    exit;
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

function fetchNews() {
    $conn = createPDO();
    $sql = 'SELECT * FROM news';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function createPDO() {
    $dns = 'sqlsrv:server=ServerName;database=DBName;Encrypt=false;';
    $uid = 'uid';
    $pwd = 'pwd';
    return new PDO($dns, $uid, $pwd);
}

function outputArray(array $array) {
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
}