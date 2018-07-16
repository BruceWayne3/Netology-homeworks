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

if(!empty($data)){

    $dataJson = json_decode($data) or exit('Ошибка декодирования json');

    $arrayWeather = $dataJson->list;
    
    foreach($arrayWeather as $day) {

        echo "Погода в городе". " " . $city . " " . "на" . " " . (date("d - F - Y ")) . "<br/>";
        echo "Температура: " . $day->main->temp . "<br/>";
        echo "Скорость ветра: " . $day->wind->speed . "<br/>";
        echo "Облачность: " . $day->weather[0]->description . "<br/>";
        echo "Давление: " . $day->main->pressure . "<br/>";
        echo "<br/>";

        if ($day->weather[0]->description == "moderate rain") {
             echo "<img src='https://openweathermap.org/img/w/10d.png' width=50 height=50 >" . "<br/>";
        }elseif ($day->weather[0]->description == "Sky is Clear") {
             echo "<img src='https://openweathermap.org/img/w/01d.png' width=50 height=50>" . "<br/>";
        }elseif ($day->weather[0]->description == "light rain"){
             echo "<img src='https://openweathermap.org/img/w/10d.png' width=50 height=50>" . "<br/>";
        }elseif ($day->weather[0]->description == "broken clouds"){
             echo "<img src='https://openweathermap.org/img/w/04d.png' width=50 height=50>" . "<br/>";
        }elseif ($day->weather[0]->description == "scattered clouds"){
             echo "<img src='https://openweathermap.org/img/w/03d.png' width=50 height=50>" . "<br/>";
        }
    }
}else{
	
    echo "Сервер не доступен";
}
?>
 </body>
</html>