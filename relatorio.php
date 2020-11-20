<?php include "head1.html" ?>

<body>

    
    
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
                    <a class="navbar-brand" href="principal.php"><img src="" alt="image"></a>
                </div>

                <?php include "menu_gestor.php" ?>
            </div>

        </nav>
    </header>



    <?php	

	include_once("config.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Data de Execução</th>';
	$html .= '<th>Tipo de Atendimento</th>';
	$html .= '<th>Cliente Atendido</th>';
    $html .= '<th>Observação</th>';
    $html .= '<th>Técnico Responsável</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$sql = "SELECT * FROM chamados";
	$query = mysqli_query($conn, $sql);
	while($row_chamados = mysqli_fetch_assoc($query)){
		$html .= '<tr><td>'.$row_chamados['id'] . "</td>";
		$html .= '<td>'.$row_chamados['data_exe'] . "</td>";
		$html .= '<td>'.$row_chamados['tipo'] . "</td>";
		$html .= '<td>'.$row_chamados['cliente'] . "</td>";
        $html .= '<td>'.$row_chamados['obs'] . "</td></tr>";
        $html .= '<td>'.$row_chamados['tecnico'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;"> Relatório de Atendimentos</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_atendimento.pdf", 
		array(
			"Attachment" => false 
		)
	);
?>





    
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