<?php
require_once 'Database.class.php';

/* class to get video data */
$DATABASE = new Database();

/*checking country in url */
if (isset($_GET['country'])){
    $country = $_GET['country'];
    //pulling data by country from database
    $data = $DATABASE->getDataByCountry($country);
    echo json_encode($data);
    return;
}
/*checking city in url */
if (isset($_GET['city'])){
    $city = $_GET['city'];
    //pulling data by city from database
    $data = $DATABASE->getDataByCity($city);
    echo json_encode($data);
    return;
}


echo json_encode($DATABASE->getAllData());






    
?>