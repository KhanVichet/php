<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <!-- <?= 'Heollo wold'?> -->

        <!-- <?php if($ex == true): ?>
            this will show if the ture.
        <?php else: ?>
            other this will show.
        <?php endif; ?>
     -->
        <?php 

            //  $a = 1;
            //  $b = 2;
            //  function sum(){
            //     global $a, $b;
            //     return $a + $b;
            //  }

            //  echo sum();


            // $testing = 10;
            // print var_dump($testing);

            // print gettype($testing);

            // $car = ['BMW','Tesla','Toyota'];

            // foreach($car as $value){
            //     echo "<ul><li><a>$value</a></li></ul>";
            // }

            const Gender = "male";
            $type = 'one';
            echo Gender;

            // class Con{

            //     // define('Name','vichet');

            //     // const Name = 'vichet';
            //     echo Gender;
            // }

            function Prints(){
                echo Gender;
            }

            Prints();

            class constants{
                const MaxValue = 20;
                public const MinValue = 1;
            }

            echo constants::MaxValue;
            echo constants::MinValue;
            
        ?>
</body>
</html>