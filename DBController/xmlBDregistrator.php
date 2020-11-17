<?php
/**
 * Created by PhpStorm.
 * User: Tlepsh
 * Date: 11.11.2020
 * Time: 8:46
 */
function CreateUser()
{

    if (isset($_POST['submit'])) {
        $xml = new DOMDocument("1.0", "UTF-8");
        $xml->load('dbStorage/usersDB.xml');

        $loginDB = $_POST['login'];
        $passDB = $_POST['password'];

        $usersTag = $xml->getElementsByTagName("users")->item(0);

        $userTag = $xml->createElement("user");
        $loginTag = $xml->createElement("login", $loginDB);
        $passwordTag = $xml->createElement("password", $passDB);

        $userTag->appendChild($loginTag);
        $userTag->appendChild($passwordTag);

        $usersTag->appendChild($userTag);

        $xml->save("dbStorage/usersDB.xml");
        return json_encode($xml);
    }
}
$xmlRegResult = 'CreateUser';
$xmlRegResult();

// $some = [
//        'login' => $_POST['login'],
//        'password' => $_POST['password']
//    ];
//    /*
//     TODO доступ к файлу и валидация по базе XML
//     * Грузим файл simplexml_load_file
//     * проходим массивом по элементам, типа $resultXML = и парсим
//     * дальше пишем if $some == $resultXML пишем мессагу и переход на index.php, если нет, то запись регается.
//    */
//    $simXML = simplexml_load_file('dbStorage/usersDB.xml');
//
////    $parsXML = new SimpleXMLElement($simXML);
////    foreach ($parsXML->xpath('//user') as $user){
////        echo $user->login, 'найден', PHP_EOL;
////    }
