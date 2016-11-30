<?php
$lokalizacja1 = array($_GET['start_x'], $_GET['start_y']);
$lokalizacja2 = array($_GET['kon_x'], $_GET['kon_y']);
//funkcja z strony http://www.geodatasource.com/developers/php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return (round($miles * 1.609344, 2));
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else if("M"){
        return round($miles * 1.609344*1000);
    }else {
        return $miles;
      }
      }

echo "Odległość w kilometrach: ".number_format(distance($lokalizacja1[0],$lokalizacja1[1],$lokalizacja2[0],$lokalizacja2[1],"K"), 0, '.', ' '). " km<br />";
echo "Odległość w metrach: ".number_format(distance($lokalizacja1[0],$lokalizacja1[1],$lokalizacja2[0],$lokalizacja2[1],"M"), 0, '.', ' '). " m<br />";
?>