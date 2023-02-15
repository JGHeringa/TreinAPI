<?php
function allesOphalen()
{
    global $mysqli;
    $sql = "SELECT * FROM treinen";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $array = array();
        while ($row = $result->fetch_assoc()) {
            $subArray = array();
            $subArray = $row;
            array_push($array, $subArray);
        }
        $json_data = json_encode($array);
        print_r($json_data);
    } else {
        echo "0 resultaten";
    }
}
function paarOphalen($naamGet)
{
    global $mysqli;
    $naam = $mysqli -> real_escape_string($naamGet);
    $sql = "SELECT * FROM treinen WHERE Naam LIKE '%$naam%' OR bijnaam LIKE '%$naam%'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        
        // output data of each row
        $array = array();
        while ($row = $result->fetch_assoc()) {
            
            $subArray = array();
            $subArray = $row;
            array_push($array, $subArray);
        }
        $json_data = json_encode($array);
        print_r($json_data);
    } else {
        echo "0 resultaten";
    }
}

function eenOphalen($idGet)
{
    global $mysqli;
    $id = $mysqli -> real_escape_string($idGet);
    $sql = "SELECT * FROM treinen WHERE ID = '$id'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        
        // output data of each row
        $array = array();
        while ($row = $result->fetch_assoc()) {
            
            $subArray = array();
            $subArray = $row;
            array_push($array, $subArray);
        }
        $json_data = json_encode($array);
        print_r($json_data);
    } else {
        echo "0 resultaten";
    }
}