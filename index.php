<?php
// FONCTIONS de CONVERSION PHP
define('KELVINVAL', 273.15);

function convCelToKel($itemValue)
{
    $kelvin = $itemValue + KELVINVAL;
    return $kelvin;
}
function convCelToFar($itemValue)
{
    $fahrenheit = $itemValue * (9 / 5) + 32;
    return $fahrenheit;
}
function convFarToKel($itemValue)
{
    $kelvin = ($itemValue - 32) * 5 / 9 + KELVINVAL;
    return $kelvin;
}
function convFarToCel($itemValue)
{
    $celsius = ($itemValue - 32) * 5 / 9;
    return $celsius;
}
function convKelToCel($itemValue)
{
    $celsius = $itemValue - KELVINVAL;
    return $celsius;
}
function convKelToFar($itemValue)
{
    $fahrenheit = ($itemValue - KELVINVAL) * 9 / 5 + 32;
    return $fahrenheit;
}

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Convertisseur de Température</title>
</head>

<body>
    <!-- DEBUT DU FORMULAIRE -->
    <h1 class="m-5 text-center">Convertisseur de température</h1>
    <section class="p-3 mx-5 border-0 bd-example mx-5 border-0 ">
        <form action="" method="post">
            <input type="text" class="form-control mb-3" aria-label="Result" name="item-value">
            <div class="row  ">
                <div class="col mb-3  ">
                    <select class="form-select select1" aria-label="Default select example" name="type-temp1">
                        <option value="Degré Celsius">Degré Celsius</option>
                        <option value="Degré Fahrenheit">Degré Fahrenheit</option>
                        <option value="Kelvin">Kelvin</option>
                    </select>
                </div>
                <br>
                <div class="col mb-3">
                    <select class="form-select select2" aria-label="Default select example" name="type-temp2">
                        <option value="Degré Celsius">Degré Celsius </option>
                        <option value="Degré Fahrenheit">Degré Fahrenheit</option>
                        <option value="Kelvin">Kelvin</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3 justify-content-center">
                <button class="btn btn-primary" name="button" type="submit" value="Convert">Convertir</button>
            </div>

            <!-- LOGIQUE DE CONVERSION PHP -->
            <?php
            if (isset($_POST['button'])) {
                $itemValue = $_POST['item-value'];
                $typeTemp1 = $_POST['type-temp1'];
                $typeTemp2 = $_POST['type-temp2'];

                if (!is_numeric($itemValue)) {
                    echo "Entrée non valide. Veuillez saisir une valeur de température valide.";
                } else {
                    //Celsius vers Kelvin et Fahrenheit
                    if ($typeTemp1 == "Degré Celsius") {
                        if ($typeTemp2 == "Kelvin") {
                            $kelvin = round(convCelToKel($itemValue), 2);
                            echo "$itemValue °C correspondent à $kelvin K";
                        } elseif ($typeTemp2 == "Degré Fahrenheit") {
                            $fahrenheit = round(convCelToFar($itemValue), 2);
                            echo "$itemValue °C correspondent à $fahrenheit °F";
                        } else {
                            echo "$itemValue °C";
                        }
                    }
                    //Fahrenheit vers Kelvin et Celsius
                    if ($typeTemp1 == "Degré Fahrenheit") {
                        if ($typeTemp2 == "Kelvin") {
                            $kelvin = round(convFarToKel($itemValue), 2);
                            echo "$itemValue °F correspondent à $kelvin K";
                        } elseif ($typeTemp2 == "Degré Celsius") {
                            $celsius = round(convFarToCel($itemValue), 2);
                            echo "$itemValue °F correspondent à $celsius °C";
                        } else {
                            echo "$itemValue °F";
                        }
                    }
                    //Kelvin vers Celsisus et Fahrenheit
                    if ($typeTemp1 == "Kelvin") {
                        if ($typeTemp2 == "Degré Celsius") {
                            $celsius = round(convKelToCel($itemValue), 2);
                            echo "$itemValue K correspondent à $celsius °C";
                        } elseif ($typeTemp2 == "Degré Fahrenheit") {
                            $fahrenheit = round(convKelToFar($itemValue), 2);
                            echo "$itemValue K correspondent à $fahrenheit °F";
                        } else {
                            echo "$itemValue Kelvin";
                        }
                    }
                }
            }
            ?>
            <!-- FIN DU FORMULAIRE -->
        </form>
    </section>
    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>