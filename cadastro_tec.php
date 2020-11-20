<?php include "head1.html" ?>
<?php
	include_once ("config.php");
?>

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
                    <a class="navbar-brand" href="principal.php"><img src="img/logo2.png" alt="image" style="width:10%;heigth:10%"/></a>
                </div>

                <?php include "menu_tecnico.php" ?>
            </div>

        </nav>
    </header>
    <br>

    <a style="margin-left:375px;" class="btn btn-primary" href="principal_tec.php">Voltar</a>
       
    
        <form action="processamento/proce_cadastro.php" method="POST">
        <div class="form-group">
            <label for="date">Data de Execução</label>
            <input class="form-control" type="date" name="data_exe"  required/>
        </div>
        <div class="form-group">
            <label for="name">Tipo de Atendimento</label>
            <select class="form-control"  name="tecnico">
            <option>Selecione</option>
                <?php
                    $sql = "SELECT * FROM tipo_atendimento";
                    $query = mysqli_query($conn, $sql);
                    while($row_tecnico = mysqli_fetch_assoc($query)){ ?>
                        <option value="<?php echo $row_tecnico['id']; ?>"><?php echo $row_tecnico['tipo_atendi']; ?>
            </option>
             <?php
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Cliente Atendido</label>
            <input class="form-control" type="text" name="cliente"  required />
        </div>
        
        
        <div class="form-group">
            <label for="message">Observação</label>
            <textarea class="form-control" name="obs" rows="10" cols="10" required></textarea>
        </div>

        <div class="form-group">
            <label for="select">Técnico Responsável</label>
            <select class="form-control"  name="tecnico">
            <option>Selecione</option>
                <?php
                    $sql = "SELECT * FROM nome_tecnico";
                    $query = mysqli_query($conn, $sql);
                    while($row_tecnico = mysqli_fetch_assoc($query)){ ?>
                        <option value="<?php echo $row_tecnico['id']; ?>"><?php echo $row_tecnico['tecnico']; ?>
            </option> 
            <?php
                    }
                ?>
            </select>
        </div>
        

             
        <p>  
            <input style="margin-left:910px;" type="submit" value="Salvar" class="btn btn-success " />
        </p>
            

        
    </form>	


    <?php include "footer.html" ?>
        
   
    <script src="js/all.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="script3.js"></script>


</body>
</html>