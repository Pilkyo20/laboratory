<?php 
function connection_serveur(){
    $dbh = new PDO(
        "mysql:dbname=mediatheque;host=localhost;port=3308",
        "root",
        "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );
    return $dbh;
}

function rechercher($dbh){
    $recherche=isset($_POST['recherche']) ? $_POST['recherche'] : '';

    $sql = "SELECT * FROM mediatheque WHERE acteurs LIKE '%$recherche%' OR films LIKE '%$recherche%' OR genres LIKE '%$recherche%' OR realisateurs LIKE '%$recherche%'";
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $tab=$stmt->fetchAll();
    return $tab;
}

?>