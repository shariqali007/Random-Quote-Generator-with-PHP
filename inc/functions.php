<?php
// PHP - Random Quote Generator

include "listquotes.php";

global $quotes;
// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote(array $quotes) {
    return $quotes[rand(0,8)];
}

// Create the printQuote funtion and name it printQuote

function printQuote($quotes) {
    $extractquote = getRandomQuote($quotes);

    $quoteHtml = "<p class='quote'>". $extractquote['quote'] ."</p>";
    $quoteHtml .= "<p class='source'>" . $extractquote['source'] . "</p>";
    if (array_key_exists('citation', $extractquote)) {
        $quoteHtml .= "<span class='citation'>" . $extractquote['citation'] . "</span>";
    }
    if (array_key_exists('year', $extractquote)) {
        $quoteHtml .= "<span class='year'>" . $extractquote['year'] . "</span>";
    }
    echo $quoteHtml;
}

//This function displays a random color from an array to set as the background-color on page refresh
function randomBackgroundColor(){

    // Colors used from https://colours.neilorangepeel.com/

    $backgroundColors = ['#556B2F', '#3CB371', '#FFA500', '#DB7093',
        '#48D1CC', '#CD853F', '#A52A2A', '#FF6347', '#808080', '#8B008B'];

    $randomIndex = rand(0, count($backgroundColors) - 1);

    echo "<body style=background-color:".$backgroundColors[$randomIndex].">";

}
randomBackgroundColor();
printQuote($quotes);
?>


