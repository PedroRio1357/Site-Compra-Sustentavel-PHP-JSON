<?php
session_start();

$usersSearch = $_SESSION["user"];
$usersUpdate = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(file_exists(__DIR__ . "/../data-json/data-users.json")){
        $stringUsers = file_get_contents(__DIR__ . "/../data-json/data-users.json");
        $arrayUsers = json_decode($stringUsers,true);
        foreach ($arrayUsers as $i => $user){
            if($user["email"] == $usersSearch["email"]){
                $arrayUsers[$i]["name"] = $usersUpdate["name"];
                $arrayUsers[$i]["email"] = $usersUpdate["email"];
                $arrayUsers[$i]["address"] = $usersUpdate["address"];
                $arrayUsers[$i]["phone"] = $usersUpdate["phone"];
                $usersUpdate["error"] = 0;
                $_SESSION["user"] = $usersUpdate;
                break;
            }
        }
        $usersJson = json_encode($arrayUsers);
        $file = fopen( __DIR__ . "/../data-json/data-users.json","w+");
        fwrite($file, $usersJson);
        fclose($file);
    }

    //echo $userUpdate["name"] . " - " . $userUpdate["email"];

    echo json_encode($usersUpdate);