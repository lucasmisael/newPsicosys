<?php

	require_once('class.gn_tabela.php');

	class relatorio extends gn_tabela{
		function __construct(){
			$this->geraRelatorio();
		}

		public function geraRelatorio(){

			// var_dump($_POST);
			$sql = 'SELECT start, end , prof.PROF_NOME, cli.CLI_NOME, conv.CONV_NOME , tpcons.CONS_DESC, tpcons.CONS_VALOR FROM  		tab_eventos ev
					inner join tab_clientes cli on CLI_ID = cli.CLI_COD
					inner join tab_profissionais prof on PROF_ID = prof.PROF_COD
					inner join tab_tpconsulta tpcons on ev.ID_TPCONSULTA = tpcons.CONS_COD
					inner join tab_convenios conv  on cli.CLI_CONVENIO = conv.CONV_COD 
					WHERE 1=1';

			$sql .= (isset($_POST['dataini']) ? " AND start >= '".$_POST['dataini']."'" : "");
			$sql .= (isset($_POST['datafim']) ? " AND end <= '".$_POST['datafim']."'" : "");

			$consultas =  $this->getAll($sql);
			

			$h = '';
			// $h = '<table class="table">'	
				// $arr = array($key=>$value);
			// echo"<pre>";
			// var_dump($consultas);
			// echo"</pre>";
			foreach ($consultas as $key => $value) {
				$h .= '<tr>
							<td>'.$value["PROF_NOME"].'</td>
							<td>'.$value["CLI_NOME"].'</td>
							<td>'.$value["CONV_NOME"].'</td>
							<td>'.date( 'd/m/Y', strtotime( $value["start"] ) ).'</td>
							<td>'.$value["CONS_DESC"].'</td>
							<td>'.$value["CONS_VALOR"].'</td>
							

						</tr>	
						';
			}
			$html = '';
			
			$html .= $this->body($h);
			require_once('relatorio.php');
			echo $html;
		}
		

		

		public function body($table){
			$html = '  <body>
							<table class="table " id="consultar" >
								<thead style="font-size: 13px; background: #005C97;  /* fallback for old browsers */
                        background: -webkit-linear-gradient(to right, #363795, #005C97);  /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #363795, #005C97); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;color:white;">
									<th>Profissional</th>
									<th>Cliente</th>
									<th>Convênio</th>
									<th>Data</th>
									<th>Tipo Consulta</th>
									<th>Valor Consulta</th>
								</thead>
								<tbody>
      								%teste%
      							</tbody>
							</table>   
    					</body>';
		
			$ht2 = str_replace('%teste%' , $table , $html);
			$ht3 = str_replace('%teste%' , '' , $ht2);


			return $ht3;

		}
	
	}