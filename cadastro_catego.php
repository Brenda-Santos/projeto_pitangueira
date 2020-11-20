<?php include "head1.html" ?>
<?php include_once "config.php";?>	

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

                <?php include "menu_gestor.php" ?>
            </div>

        </nav>
    </header>
    

    <div class="container">
    <div class="table-wrapper">
        <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
         
            </div>
            <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Cadastrar de Tipo Atendimento/Técnico</span></a>
            </div>
        </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th></th>

                <th>---- Tipo de Atendimento ----</th>
            
                <th></th>
                </tr>
            </thead>

        <?php						
            $sql = "SELECT * FROM tipo_atendimento";
            $query = mysqli_query($conn, $sql);
            
            while($rows_categoria = mysqli_fetch_array($query)){echo'
        
        <tbody>
            <tr>
            <td></td>
            <td>'.$rows_categoria["tipo_atendi"].'</td>
            <td>
            <a class="btn btn-outline-danger" onclick="confirmExclusao()" href="proce_apagar.php?id='. $rows_categoria['id'] .'">Excluir</a> 
            </td>
            </tr>';
                        }
            

        ?>
        </tbody>

        <thead>
                <tr>
                <th></th>
                <th>---- Técnico Responsável ----</th>
                <th></th>
                </tr>
            </thead>

        <?php						
            $sql1 = "SELECT * FROM nome_tecnico";
            $query1 = mysqli_query($conn, $sql1);
            
            while($rows_categoria1 = mysqli_fetch_array($query1)){echo'
        
        <tbody>
            <tr>
            <td></td>
            <td>'.$rows_categoria1["tecnico"].'</td>
            <td>
            <a class="btn btn-outline-danger" onclick="confirmExclusao()" href="proce_apagar.php?id='. $rows_categoria1['id'] .'">Excluir</a> 
            </td>
            </tr>';
            }
            

        ?>
        </tbody>
        </table>
        
 
    <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="processamento/cadastro_atendimento.php" method="POST">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar Tipo de Atendimento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                
                <div class="form-group">
                    <label>Tipo de Atendimento</label>
                    <input type="text" name="tipo" class="form-control" >
                </div>
                
            </div>
            <div class="modal-footer">
            <input type="button" class="btn btn-primary" data-dismiss="modal" value="Voltar">
            <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>

        <form action="processamento/cadastro_tecnico.php" method="POST">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar Técnico</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                
                <div class="form-group">
                    <label>Técnico</label>
                    <input type="text" name="tecnico" class="form-control" >
                </div>
            </div>
            <div class="modal-footer">
            <input type="button" class="btn btn-primary" data-dismiss="modal" value="Voltar">
            <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>
        </div>
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
        <script src="script2.js"></script>


</body>
</html>



