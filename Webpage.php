<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Battambang:wght@300&family=DM+Sans&family=Hanuman:wght@300&family=Kdam+Thmor+Pro&family=Khmer&family=Koulen&family=Merriweather:wght@300&family=Mukta:wght@300&family=Open+Sans:wght@300&family=Poppins:wght@300;400&family=Roboto&family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto+Slab:wght@100&display=swap');
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        outline: none;
    }

    h1{
        font-size: 30px;
    }
    h2{
        font-size: 28px;
    }
    h3{
        font-size: 26px;
    }
    p{
        font-size: 18px;
    }
    a{
        font-size: 18px;
    }
    html{
        font-family: poppins sans-serif;
    }

    .container{
        width: 500px;
        margin: auto;
        background: rgb(222, 219, 219);
    }
    .image{
        width: 100%;
    }
    .image img{
        width: 100%;
    }
    .detail{
        padding: 20px;
    }
    .name h1{
        text-decoration: underline;
        color: blue;
    }
    .about p{
        padding: 5px;
        color: #000;
        margin-left: 30px;
    }
    .contact h3{
        text-decoration: underline;
        color: blue;
    }
    .contact p{
        margin-left: 30px;
    }
</style>
<body>
    
    <div class="container">
        <?php

            $imageurl = 'image/pofile.jpg';
            $name = 'Khan Vichet';
            $pob= 'Prey Vang';
            $dob='15 /03 / 2002';
            $age = 20;
            $email ='khanvichet1@gmail.com';
           echo " <div class='image'>
                    <img src='$imageurl'>
                </div>
                <div class='detail'>
                    <div class='name'>
                        <h1>$name</h1>
                    </div>
                    <div class='about'>
                        <p>
                            Place of birth : $pob.
                            <br>
                            Dat of Birth $dob: 
                            <br>
                            Age : $age.
                            <br>

                        </p>
                    </div>
                    <div class='contact'>
                        <h3>Tell</h3>
                        <p>Email : <a >$email</a></p>
                    </div>
                </div>";
        ?>
    </div>
    
</body>
</html>