<?php 
require "includes/db.php";

$pets = mysqli_query($connection,"SELECT * FROM `pets` WHERE `id` = " . (int) $_GET['id']);
$pet = mysqli_fetch_assoc($pets);

?>
<html>

<head>
    <title>coronovirus</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        * {
            text-decoration: none;
            color: white;
            padding: 0;
            margin: 0;
        }


        @font-face {
            font-family: bahn;
            src: url(fonts/12002.ttf);
        }

        p {
            font-size: 25px;
        }

        .title {
            color:#e25a5a;
        }

        .link:hover {
            color: #e25a5a;
            text-decoration: none;
            transition: 0.5s;
        }

        a:hover {
            background-color: #e25a5a; 
        }

        body {
            background-color: #222222;
            color: white;
            font-family: 'bahn';
            min-width: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            margin: 0;
        }

        .titles {
            color: #e25a5a;
        }

        .list{
            list-style-type: none;
            font-size: 25px;
        }

        .header {
            transition: 0.5s;
            background-image: linear-gradient(to left, #e25a5a, #ffa5a5);
            width: 100%;
        }

        .header {
            opacity: 100%;
            width: 100%;
        }

        .headertitle {}

        .headertitle:hover {}

    </style>
</head>

<body>
    <?php 
    require "includes/header.php";
    ?>
    <div class="main">
        <div style="text-decoration: none; display: block; margin:15px 0 0 120px;">
            <a class="link" style="color: white; text-decoration: none;" href="/">главная</a> - <a class="link" style="color: white; text-decoration: none;" href=""><?php echo $pet['pet']?></a>
            <h1 style="">коронавирус у <?php echo $pet['pet']?></h1>
            <p style="font-size:25px; margin-bottom:50px;"><?php echo $pet['text'] ?></p>
        </div>
        <div>
        
        </div>
        <div class="col-6 mx-auto">
        <div id="mySlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="material/image/<?php echo $pet['image 1'] ?>" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="material/image/<?php echo $pet['image 2'] ?>" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="material/image/<?php echo $pet['image 3'] ?>" class="d-block w-100">
                </div>
            </div>
            <a href="#mySlider" role="button" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#mySlider" role="button" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <div class="col-11"></div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
	    <P><?php echo $pet['text 1']; ?></P>
		</div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
        <h1 class="col-12 title"><?php echo $pet['title 1'] ?></h1>
	    <P><?php echo $pet['text 2']; ?></P>
		</div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
        <h1 class="cal-12 title"><?php echo $pet['title 2'] ?></h1>
        <ul>
	    <li class="list"><?php echo $pet['text 3.1']; ?></li>
        <li class="list"><?php echo $pet['text 3.2']; ?></li>
        <li class="list"><?php echo $pet['text 3.3']; ?></li>
        </ul>
		</div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
        <h1 class="cal-12 title"><?php echo $pet['title 3'] ?></h1>
	    <P><?php echo $pet['text 4']; ?></P>
		</div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
        <h1 class="cal-12 title"><?php echo $pet['title 4'] ?></h1>
	    <P><?php echo $pet['text 5']; ?></P>
		</div>

        <div style="margin-top:50px; padding: 0px 25px;" class="col-11 mx-auto">
        <h1 class="col-12 title"><?php echo $pet['title 5'] ?></h1>
	    <P><?php echo $pet['text 6']; ?></P>
		</div>

    </div>

</body>

</html>
