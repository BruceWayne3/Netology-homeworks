<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Заголовок страницы</title>
  </head>
  <body> 
<?php 

$city = "Moscow";

$link = 'http://api.openweathermap.org/data/2.5/find';

$apiKey = 'bd67391eb9499f2f8093595e5ce5f1c8';

$units = 'metric';

$apiURL = "{$link}?q={$city},RU&type=like&units={$units}&appid={$apiKey}";



$data = file_get_contents($apiURL) or exit('Не удалось получить данные');



    $dataJson = json_decode($data) or exit('Ошибка декодирования json');

    $arrayWeather = $dataJson->list;

    function checkData($data) { if (empty($data)) { return 'не удалось получить данные'; }

        return $data;
        }


    
    foreach($arrayWeather as $day) {

        echo "Погода в городе". " " . $city . " " . "на" . " " . (date("d - F - Y ")) . "<br/>";
        echo "Температура: " . checkData($day->main->temp) . "<br/>";
        echo "Скорость ветра: " . checkData($day->wind->speed) . "<br/>";
        echo "Облачность: " . checkData($day->weather[0]->description) . "<br/>";
        echo "Давление: " . checkData($day->main->pressure) . "<br/>";
        echo "<br/>";

        $icon = $day->weather[0]->icon;

        if ($day->weather[0]->description == "moderate rain") {
             echo "<img src='https://openweathermap.org/img/w/$icon.png'>" . "<br/>";
        }elseif ($day->weather[0]->description == "Sky is Clear") {
             echo "<img src='https://openweathermap.org/img/w/$icon.png'>" . "<br/>";
        }elseif ($day->weather[0]->description == "light rain"){
             echo "<img src='https://openweathermap.org/img/w/$icon.png'>" . "<br/>";
        }elseif ($day->weather[0]->description == "few clouds"){
             echo "<img src= 'http://openweathermap.org/img/w/$icon.png'>" . "<br/>";
        }elseif ($day->weather[0]->description == "scattered clouds"){
             echo "<img src='https://openweathermap.org/img/w/$icon.png'>" . "<br/>";
        }
    }
?>
 </body>
</html>
