<?php
// define('KELVINVAL', 273.15);
    // const KELVINVAL = 273.15;


    function convCelToKel($itemValue)
    {
        $kelvin = $itemValue + 273.15;
        return $kelvin;
    }

    function convCelToFar($itemValue)
    {
        $fahrenheit = $itemValue * (9 / 5) + 32;
        return $fahrenheit;
    }

    function convFarToKel($itemValue)
    {
        $kelvin = ($itemValue - 32) * 5 / 9 + 273.15;
        return $kelvin;
    }

    function convFarToCel($itemValue)
    {
        $celsius = ($itemValue - 32) * 5 / 9;
        return $celsius;
    }
    function convKelToCel($itemValue)
    {
        $celsius = $itemValue - 273.15;
        return $celsius;
    }
    function convKelToFar($itemValue)
    {
        $celsius = ($itemValue - 273.15) * 9 / 5 + 32;
        return $celsius;
    }
    var_dump(round(convFarToCel(10), 2));
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Convertisseur de Température</title>

</head>

<body>

    <!-- Example Code -->
    <section class="p-3 mx-5 border-0 bd-example mx-5 border-0">
        <form action="" method="post">
            <input type="text" class="form-control mb-3" aria-label="Result" name="item-value" >
        <div class="row">
            <div class="col mb-3  ">
                <select class="form-select select1" aria-label="Default select example" name="type-temp1">
                    <option value="Degré Celsius">Degré Celsius</option>
                    <option value="Degré Fahrenheit">Degré Fahrenheit</option>
                    <option value="Kelvin">Kelvin</option>
                </select>
            </div>
            <br>
            <!-- <i class="fa-solid fa-equals"></i> -->
            <div class="col ">
                <select class="form-select select2" aria-label="Default select example" name="type-temp2">
                    <option value="Degré Celsius">Degré Celsius </option>
                    <option value="Degré Fahrenheit">Degré Fahrenheit</option>
                    <option value="Kelvin">Kelvin</option>
                </select>
            </div>
        </div>
        <div class="col mb-3">
            <button class="btn btn-primary" name= "button" type="submit" value="Convert">Convertir</button>
        </div>
        <!-- <input type="text" class="form-control" aria-label="Result" name="conv-value2"> -->

        <?php
    if (isset($_POST['button']))
    {
    $itemValue = $_POST['item-value'];
    $typeTemp1 = $_POST['type-temp1'];
    $typeTemp2 = $_POST['type-temp2'];

            //Celsius vers Kelvin et Fahrenheit
            if ($typeTemp1 == "Degré Celsius") 
            {
                if ($typeTemp2 == "Kelvin") 
                {
                    $kelvin = round(convCelToKel($itemValue), 2);
                    echo "$itemValue °C correspond à $kelvin K";
                } elseif ($typeTemp2 == "Degré Fahrenheit") 
                {
                    $fahrenheit = round(convCelToFar($itemValue), 2);
                    echo "$itemValue °C correspond à $fahrenheit K";
                } else 
                {
                    echo "$itemValue °C";
                }
            }
            //Fahrenheit vers Kelvin et Celsius
            if ($typeTemp1 == "Degré Fahrenheit") 
            {
                if ($typeTemp2 == "Kelvin") 
                {
                    $kelvin = round(convFarToKel($itemValue), 2);
                    echo "$itemValue °F correspond à $kelvin K";
                } elseif ($typeTemp2 == "Degré Celsius") {
                $celsius = round(convFarToCel($itemValue), 2);
                echo "$itemValue °F correspond à $celsius °C";
            } else 
            {
                echo "$itemValue °F";
            }
            }
        //Kelvin vers Celsisus et Fahrenheit
        if ($typeTemp1 == "Kelvin") 
        {
            if ($typeTemp2 == "Degré Celsius") 
            {
                $celsius = round(convKelToCel($itemValue), 2);
                echo "$itemValue K correspond à $celsius °C";
            } elseif ($typeTemp2 == "Degré Fahrenheit") {
            $fahrenheit = round(convKelToFar($itemValue), 2);
            echo "$itemValue K correspond à $fahrenheit °F";
        } else {
            echo "$itemValue Kelvin";
        }
    }
}

        
    ?>
        </form>


    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>