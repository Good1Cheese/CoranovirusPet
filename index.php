<?php 

require "includes/db.php";
$pets = mysqli_query($connection,"SELECT * FROM `pets`");

?>
<html>
<meta charset=utf-8>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SARS-CoV2</title>
    <style>
        @font-face {
            font-family: bahn;
            /* Гарнитура шрифта */
            src: url(fonts/12002.ttf);
            /* Путь к файлу со шрифтом */
        }

        body {
            background-color: #222222;
            color: white;
            font-family: 'bahn';
            margin: 0;
            overflow-x: hidden
        }

        .header {
            transition: 0.5s;
            background-image: linear-gradient(to left, #e25a5a, #ffa5a5);
            position: fixed;
            width: 100%;
        }

        .header {
            opacity: 100%;
            width: 100%;
            z-index: 999999;
        }

        .headertitle {}

        .headertitle:hover {}

        a {
            transition: 0.3s;
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: #e25a5a;
            text-decoration: none;
        }

        .main {
            transition: 0.5s;
            padding: 10px;
            padding-top: 5%;
        }

    </style>
</head>

<body>
    <?php 
		require "includes/header.php"
	?>
    <div class="main">
        
        <div style=" background-color: #222222;" class="">
            <div style="" class="row">
                  <div class="col-5" style="margin-top: auto; margin-bottom: auto; padding:auto auto;">
        <div id="mySlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="material/img.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="material/img1.jpg" class="d-block w-100">
                </div>
            </div>
        </div>
        </div>
                <div style="font-size:40px; margin-top: auto; margin-bottom: auto; padding:75px 75px;" class="col-7"><p>А как насчет нового коронавируса COVID-19? Могут ли заболевшие владельцы "поделиться" с питомцем COVID-19, и, наоборот, способны ли кошки и собаки инфицированного владельца участвовать в распространении нового вируса?Нет, не способны. А вы - можете.
В рекомендациях Всемирной организации по охране здоровья животных (МЭБ) особо подчеркивается важность того, что COVID-19 не должен повлечь за собой принятие неприемлемых мер в отношении домашних или диких животных, которые могут поставить под удар их благополучие и здоровье.</p></div>
        </div>
        </div>
        
        <?php 
			while($pet = mysqli_fetch_assoc($pets))
				{
        ?>
    <div>
        <div class="col-8 mx-auto" style=" background-color: #222222">
            <h1 style="font-size: 150px;" class="text-center">Как спасти</h1>
            <div class="row" style="padding: 20px; margin-top: 30px;">
                <div class="col-6 mx-auto" style="background-color: #222222; padding: 15px;">
                    <a href="pages.php?id=<?php echo $pet['articles_id']; ?>">
                        <img style="cursor:pointer;" src="material/cat.jpg" alt="" class="w-100">
                    </a>
                </div>
                <div class="col-6 mx-auto" style="background-color: #222222; padding: 15px;">
                    <?php 
			while($pet = mysqli_fetch_assoc($pets))
				{
				?>
                    <a href="pages.php?id=<?php echo $pet['articles_id']; ?>">
                        <img style="cursor:pointer;" src="material/dog.jpg" alt="" class="w-100">
                    </a>
                </div>
            </div>
        </div>
        <?php 
				}
				?>
        <?php 
				}
				?>
    </div>
    </div>
    <script>

    </script>
</body>

</html>
