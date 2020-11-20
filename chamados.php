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
            <h2 style="color:white">Gerenciamento de Atendimentos</b></h2>
            </div>
            <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Cadastrar Atendimento</span></a>
            </div>
        </div>
        </div>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th></th>
            <th>Data de Execução</th>
            <th>Tipo de Atendimento</th>
            <th>Cliente Atendido</th>
            <th>Observação</th>
            <th>Técnico Responsável</th>
            <th>Ações</th>
            </tr>
        </thead>

        <?php						
            $sql = "SELECT * FROM chamados";
            $query = mysqli_query($conn, $sql);
            
            while($rows_chamados = mysqli_fetch_array($query)){echo'
        
        <tbody>
            <tr>
            <td></td>
            <td>'.$rows_chamados["data_exe"].'</td>
            <td>'.$rows_chamados["tipo"].'</td>
            <td>'.$rows_chamados["cliente"].'</td>
            <td>'.$rows_chamados["obs"].'</td>
            <td>'.$rows_chamados["tecnico"].'</td>
            <td>
            <a class="btn btn-outline-danger" onclick="confirmExclusao()" href="proce_apagar.php?id='. $rows_chamados['id'] .'">Excluir</a> 
            </td>
            </tr>';
                        }
            

        ?>
        </tbody>
        </table>
     
    </div>
    </div>
 
    <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="processamento/cadastro_atend_gestor.php" method="POST">
            <div class="modal-header">
            <h4 class="modal-title">Cadastrar Atendimento</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            <div class="form-group">
                <label>Data de Execução</label>
                <input type="date" name="data_exe" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tipo de Atendimento</label>
                <select class="form-control"  name="tipo">
                    <option>Selecione</option>
                        <?php
                            $sql = "SELECT * FROM tipo_atendimento";
                            $query = mysqli_query($conn, $sql);
                            while($row_atendim = mysqli_fetch_assoc($query)){ ?>
                                <option value="<?php echo $row_atendim['tipo_atendi']; ?>"><?php echo $row_atendim['tipo_atendi']; ?>
                    </option>
                    <?php
                            }
                        ?>
                </select>
            </div>

            <div class="form-group">
                <label>Cliente Atendido</label>
                <input type="text" name="cliente" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" name="obs" required></textarea>
            </div>

            <div class="form-group">
                <label>Técnico Responsável</label>
                <select class="form-control"  name="tecnico">
                    <option>Selecione</option>
                        <?php
                            $sql = "SELECT * FROM nome_tecnico";
                            $query = mysqli_query($conn, $sql);
                            while($row_tecnico = mysqli_fetch_assoc($query)){ ?>
                                <option value="<?php echo $row_tecnico['tecnico']; ?>"><?php echo $row_tecnico['tecnico']; ?>
                    </option> 
                    <?php
                            }
                        ?>
                    </select>   
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

