<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Example</title>
</head>
<body>
        <?php
            class Car{
                public $model;
                public $brand;
                public $color;
                public function __construct($model, $brand, $color){
                    $this->model = $model;
                    $this->brand = $brand;
                    $this->color = $color;
                }
                public function displayCarInfo(){
                    echo "The car is " . $this->model . " year model is " . $this->brand . " and the color is " . $this->color . "!";
                }
            }
            $myCar = new Car("2020", "Toyota", "Red");
            echo $myCar->displayCarInfo();
        ?>
</body>
</html>