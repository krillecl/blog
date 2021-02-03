<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/utilities.css">

    <title>Blog theme with BEM</title>

</head>
<body>

    <div class="wrapper">

        <div class="header">

            <div class="header__logo">

                <a href="#"><img src="images/logo-new.svg"></a>

            </div> <!-- /.header__logo -->

            <div class="header__brand">

                <a href="#">Madframor</a>

            </div> <!-- /.header__brand -->

            <div class="menu">

                <ul class="menu__list">

                    <li class="menu__list__item">

                        <a href="#">Opskrifter</a>

                    </li> <!-- /.menu__list__item -->

                    <li class="menu__list__item">

                        <a href="#">Madplaner</a>

                    </li> <!-- /.menu__list__item -->

                    <li class="menu__list__item menu__list__item--styled">

                        <a href="#">Kontakt</a>

                    </li> <!-- /.menu__list__item -->
                
                </ul> <!-- /.menu__list -->

            </div> <!-- /.menu -->

        </div> <!-- /.header -->

        <main class="main">

        block

        </main> <!-- /.main -->


        <footer class="footer">

            <p class="footer__block copyright">&copy; Copyright <a href="#">www.madframor.dk</a> <?php echo date('Y'); ?>. All rights reserved. </p>

        </footer> <!-- /.footer -->
    
    </div> <!-- /.wrapper -->
    
</body>
</html>