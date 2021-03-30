<?php

echo '<h1>PHP array & JSON exercise</h1>';

$data = file_get_contents("data.json");
$json = json_decode($data,true);

/* echo '<pre>';
print_r($json);
echo '</pre>'; */

// $resultsArray = $json['results'][0]['name'];
$resultsArray = $json['results'];
echo 'The name of the first pokemon is: ';
echo $resultsArray[0]['name'];
echo '<br>';
$arrayElementsNumber = count($json['results']);

echo '<br>';
echo 'The number of elements in the json array is '.$arrayElementsNumber;
echo '<br>';
// $displayedNumber = count($chunkedArray[2]);
// echo 'The number of elements being displayed ';
echo '<br>';


$urlPage = $_GET['page'];
echo "The URL page number is: ".$urlPage;
$queryPage = $urlPage-1;
echo '<br>';
echo "The page number used for the array query is: ".$queryPage;


echo '<br>';
echo '<br>';
echo '<a href="./?page=1" target="_self">Page 1</a>';
    echo '<br>';
echo '<a href="./?page=2" target="_self">Page 2</a>';
    echo '<br>';
echo '<a href="./?page=3" target="_self">Page 3</a>';
    echo '<br>';
echo '<a href="./?page=4" target="_self">Page 4</a>';
    echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo 'Here are the results of the array: ';
echo '<br>';

$chunkedArray = array_chunk($resultsArray,50,true);

echo '<pre>';
print_r($chunkedArray[$queryPage]);
echo '</pre>';



//Query of the chunked array query displaying 50 results per page. WIP
$counterStart = 0+($queryPage*50);
$counterA = $counterStart;
echo "counterA is: ".$counterA;
echo '<br>';
$counterEnd = $counterStart+50;
echo "counterEnd is: ".$counterEnd;
echo '<br>';
echo $chunkedArray[$counterA]['name'];
echo '<br>';



while ($counterA < $counterEnd) {
    // $indexNumber = $counterA+1;
    echo $chunkedArray[$counterA]['name'];
    echo '<br>';
    echo '<a href="'.$chunkedArray[$counterA]['url'].'" target="_blank">'.$chunkedArray[$counterA]['url'].'</a>';
    echo '<br>';
    echo '<br>';
    $counterA++;
}


// Query of all 1118 results displaying all pokemon names and URLs.
$counter = 0;

while ($counter < count($resultsArray)) {
    $indexNumber = $counter+1;
    echo $indexNumber.': '.$resultsArray[$counter]['name'];
    echo '<br>';
    echo '<a href="'.$resultsArray[$counter]['url'].'" target="_blank">'.$resultsArray[$counter]['url'].'</a>';
    echo '<br>';
    echo '<br>';
    $counter++;
}

echo '<pre>';
print_r($chunkedArray[$queryPage][100]);
echo '</pre>';

?>