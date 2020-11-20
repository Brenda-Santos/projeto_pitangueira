<?php
session_start();
include "config.php";

?>

<?php include "head1.html" ?>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				
				
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="principal_tec.php"><img src="img/logo2.png" alt="image" style="width:10%;heigth:10%"></a>
                </div>

                <?php include "menu_tecnico.php" ?>
            </div>

        </nav>
	</header>
	
	
	<div class="container" >
		<div class="row" >
			<div class="slider-content-area">
				<div class="slide-text">
					<h1 class="homepage-three-title">Gestor De <span>Atendimentos</span> e Serviços</h1>
					<h2>Registre seus atendimentos e torne seu tempo mais hábil!</h2>
					
				</div>
			</div>
		</div>
</div>


    <?php include "footer.html" ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>