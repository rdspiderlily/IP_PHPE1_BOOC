<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Exercise 1</title>
        <link rel="stylesheet" href="phpe1.css">
    </head>
    <body>
        <h1>Weather Conditions</h1>
        <div class="container1">
            <div class="con1-2">
                <div class="con1-2-1">
                <img src="pics/rain.png" alt="Rain Icon">
                <p>Rainy</p>
                </div>
                <div class="con1-2-1" alt="Sunshine Icon">
                <img src="pics/sunshine.png">
                <p>Sunny</p>
                </div>
                <div class="con1-2-1">
                <img src="pics/clouds.png" alt="Clouds Icon">
                <p>Cloudy</p>
                </div>
                <div class="con1-2-1">
                <img src="pics/hail.png" alt="Hail Icon">
                <p>Hail</p>
                </div>
                <div class="con1-2-1">
                <img src="pics/sleet.png" alt="Sleet Icon">
                <p>Sleet</p>
                </div>
                <div class="con1-2-1">
                <img src="pics/snow.png" alt="Snow Icon">
                <p>Snow</p>
                </div>
                <div class="con1-2-1">
                <img src="pics/windy.png" alt="Windy Icon">
                <p>Windy</p>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="container2-1">
                <img src="pics/w1.png" alt="Snow and Wind">
                <img src="pics/w2.png" alt="Sunshine with clouds and rain">
            </div>
            <p>
                <?php
                    $weather = array("snow", "wind", "sunshine", "clouds", "rain", "hail", "sleet");

                    echo "We've seen all kinds of weather this month. At the beginning of the month, we had 
                        $weather[0] and $weather[1]. Then came $weather[2]  with a few $weather[3] and some 
                        $weather[4]. At least we didn't get any $weather[5] or $weather[6]. ";
                ?>
            </p>
        </div>
    </body>
</html>
