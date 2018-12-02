<?php


require_once('class.gn_elms.php');
/**
 * Classe de tabela generica, aqui vao ficar todos os recursos que as tabelas podem usar
 */
class gn_tabela
{
    var $tabela;
    var $chave;
    var $campos;
    var $classe;
    var $operacao ;
    //Variaveis para login
    var $login;
    var $senha;
    
    function __construct()
    {
        $this->classe = ""      ; 
        $this->tabela = ""      ; 
        $this->chave  = ""      ; 
        $this->campos = array() ; 
        // $this->operacao =  (isset($_REQUEST['Operacao']) && $_REQUEST['Operacao'] == 'Cadastrar' ? "Cadastrar" : "Pesquisar");
        
        // $elemento = "inp";
        
        $this->elms = new gn_elms();
        
        // para funcionar em celulares
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
       
    }
    
    
    
    
    /**
     * CADASTRAR
     */
    
    // metodo cadastrar decide se vai criar o formulario de cadastro ou salvar
    function cadastrar()
    {   
       
        // verifica se esta salvado o usuario
        if (isset($_REQUEST['Operacao']) && $_REQUEST['Operacao'] == 'Cadastrar'){
            // Salva os dados no banco
            return $this->fazerCadastro();
        } 
        
        // Se nao estiver salvando, cria o formulario de salvamento
        else {
            // monta o cadastro
            return $this->montarCadastro();
        }
    }
    
    // 
    function montarCadastro()
    {
        return $this->montarFormulario($nome="Cadastrar", $action='cadastrar.php');
    }
    
    function fazerCadastro(){
        $INSERT = array();
        $VALUES = array();
        //$this->ver($_POST);
        foreach ($_POST as $chave => $valor)
        {
            if (!isset($this->campos[$chave]["gravar"]) || $this->campos[$chave]["gravar"]===true)
            {
        
                $INSERT[] =  "$chave"  ; 

                if ($chave == 'criado_em') {
                    $VALUES[] = "now()" ; 
                }
                else 
                    if ($chave == 'usuario_cri') {
                        $VALUES[] = (isset($_SESSION['login']) ? "'".$_SESSION['login']."'" : '');
                    } 
                    else {
                        $VALUES[] = "'$valor'" ; 
                    }
            }
        }
        
        $INSERT = implode(",",$INSERT);
        $VALUES = implode(",",$VALUES);
        
        $SQL = "INSERT INTO `$this->tabela`($INSERT)  VALUES ( $VALUES);";
        // $this->ver($SQL);
        $this->executarNoBanco($SQL);
        echo"<script>alert('Cadastrado com sucesso!')</script>";
        
        $cache = $this->montarCadastro();
            
        return $cache;        
        
    }
    
    
    
    function editar()
    {
        // verifica se esta salvado o usuario
        if (isset($_REQUEST['Operacao']) && $_REQUEST['Operacao'] == 'Editar'){
            // Salva os dados no banco
            return $this->fazerEditar();
        } 
        
        // Se nao estiver salvando, cria o formulario de salvamento
        else {
            // monta o Editar
            return $this->montarEditar();
        }
    }
    
    
    
    function fazerEditar()
    {
            
        $SQL_COLUNAS = array();

        
        foreach ($this->campos as $campo){
            $coluna = $campo['banco'];
            // verifica se o nome do campo no banco esta vindo no request
            if (array_key_exists($coluna, $_REQUEST)){
                $SQL_COLUNAS[] = " $coluna = '{$_REQUEST[$coluna]}' " ;
                
                //Cliente
                if($this->tabela == 'tab_clientes'){
                    if(!isset($_REQUEST['Cli_Status']))
                        $SQL_COLUNAS[] = "Cli_Status = 'off'";
                    elseif(isset($_REQUEST['Cli_Status']))
                        $SQL_COLUNAS[] = "Cli_Status = 'on'";
                }
                //Profissional
                if($this->tabela == 'tab_profissionais'){
                    if(!isset($_REQUEST['Prof_Status']))
                        $SQL_COLUNAS[] = "Prof_Status = 'off'";
                    elseif(isset($_REQUEST['Prof_Status']))
                        $SQL_COLUNAS[] = "Prof_Status = 'on'";
                }
                if($this->tabela == 'tab_convenios'){
                    if(!isset($_REQUEST['Conv_Status']))
                        $SQL_COLUNAS[] = "Conv_Status = 'off'";
                    elseif(isset($_REQUEST['Conv_Status']))
                        $SQL_COLUNAS[] = "Conv_Status = 'on'";
                }
                if($this->tabela == 'tab_usuarios'){
                    if(!isset($_REQUEST['usu_Status']))
                        $SQL_COLUNAS[] = "usu_Status = 'off'";
                    elseif(isset($_REQUEST['usu_Status']))
                        $SQL_COLUNAS[] = "usu_Status = 'on'";
                }
                 if(isset($_REQUEST['alterado_em'])) {
                     $SQL_COLUNAS[] = "alterado_em = now()";
                } 
                if(isset($_REQUEST ['usuario_alt'])) {
                     $SQL_COLUNAS[] = "usuario_alt ='". $_SESSION['login']."'";
                }            
            }
        }
        $SQL_COLUNAS = implode(', ', $SQL_COLUNAS);
        $SQL = "UPDATE $this->tabela SET $SQL_COLUNAS WHERE $this->chave = {$_REQUEST[$this->chave]};";
        $this->executarNoBanco($SQL);
        //var_dump($_SESSION['login']);
        return $this->pesquisar();
    }
    
    
    
    function montarEditar()
    {
        $SELECT = array();
        
        $SELECT[] = $this->chave ;
        
        foreach ($this->campos as $campo)
        {
            if ( isset( $campo['custonSelect'] ) && !isset($campo['SQL']) )
            {   
                $SELECT[] = $campo['custonSelect'];
            } else {
                $SELECT[] = $campo['banco'];
            }
            
        }
        $SELECT = implode(', ', $SELECT);
        
        $SQL="SELECT 
                $SELECT
            FROM 
                $this->tabela 
            WHERE 
                $this->chave = '{$_REQUEST['chave']}'
            ;
        " ; 
        
        $banco = $this->executarNoBanco($SQL);
        
        $dados = array();
        
        foreach ($banco as $linha){
            foreach ($linha as $chave => $valor){
                $dados[$chave] = $valor;
                
                
            }
        }
        
        return $this->montarFormulario($nome="Editar", $action='editar.php', $dados);
    }
    
    
    function montarFormulario($nome, $action, $dados=array())
    {
        // inicia cahche com uma string
        $cache = ''; 
        
        // Cria um formulario

        $cache .= $this->elms->formBegin($action, $this->classe, $nome);
        $cache .="<div>";
        //Cabeçalho da pagina 
        $cache .="<div class='divTitulo col-lg-8 container'><h1 class='tituloClasses'>Cadastro de {$this->classe}</h1></div>";
        
        
        // Se for edicao, passa a chave da tabela tambem, carrega no metodo fazerEditar
        if ($nome == 'Editar'){
            $cache .= "<input type='hidden' name='$this->chave' value='{$dados[$this->chave]}'>";
        }
        
        // percorre os campos setados na classe do usuario
        foreach ($this->campos as $campo)
        {
            if (array_key_exists($campo['banco'], $dados))
            {
                // Se for edicao, carrega os campos do banco, carregados pelo metodo fazerEditar
                if ($nome == 'Editar'){
                    $nomeBanco = $campo['banco'];
                    $campo['value'] = $dados[$nomeBanco];
                }
            }
            
            // cria um input para cada campo da tabela
            // $cache .= $this->elms->campoFormulario($campo);
            if($campo['id'] == 'Cli_Status' || $campo['id'] == 'Conv_Status' || $campo['id'] == 'Prof_Status' || $campo['id'] == 'usu_Status'){
                #Status ON ou OFF
                if(isset($campo['value']) && $campo['value'] == 'on')
                    $campo['checked'] =  'true';
                

            }
            // else

                $cache .= $this->elms->{$campo['tagname']}($campo);


        }
        $cache .="</div>";
        // Cria um botao do tipo submit que envia um formulario
        
        $cache.=$this->elms->botoesRodape('Gravar', "Cancelar");
        
        // Fecha o formulario
        $cache.=$this->elms->formEnd();
        
        $cache.="<script>".$this->getJavascript()."</script>";
        
        return $cache;
    }
    
    
    /**
     * PESQUISAR
     */
    function pesquisar()
    {
        $cache = ''; // inicia cache com uma string
        
        //Cabeçalho da pagina 
        $cache .="<div class='divTitulo col-lg-8 container'><h1 class='tituloClasses'>Pesquisa de {$this->classe}</h1></div>";
        
        
        $SELECT = array();
        $SELECT[] = $this->chave;
        
        $FROM  = array();
        $FROM[]= $this->tabela;
        
        $WHERE = array(); 
        
        $ORDERBY = array();

        foreach ($this->campos as $dadosCampo)
        {
            // Campos normais que aparecem na pesquisa, 
            if ($dadosCampo['pesquisa'])
            {
                // Se existir uma cusmtomizacao de select, usa ela
                if (isset($dadosCampo['custonSelect'])){
                    $SELECT[] = $dadosCampo['custonSelect'];
                } else {
                    $SELECT[] = $dadosCampo['banco'];
                }
                
                // Se existir uma cusmtomizacao de select, usa ela
                if (isset($dadosCampo['custonFrom'])) {
                    $FROM[] = $dadosCampo['custonFrom'];
                }

                if (isset($_REQUEST['Pesquisar']) && $_REQUEST['Pesquisar'] !== '') {
                    if (isset($dadosCampo['pesquisa']) && $dadosCampo['pesquisa'] !== false && !isset($dadosCampo['custonSelect'])){
                        $WHERE[] = " UPPER($dadosCampo[banco]) LIKE UPPER('%$_REQUEST[Pesquisar]%')";
                    }
                }
            }
            
            if (isset($dadosCampo['orderBy'])){   
                $ORDERBY[] = $dadosCampo['banco'];
            }
        }

        $SELECT     = implode (', ' , $SELECT);
        $FROM       = implode (' ' , $FROM);
        $WHERE      = implode (' OR ' , $WHERE);
        $WHERE      = $WHERE == '' ? '1=1' : $WHERE ;
        $ORDERBY    = implode (', ' , $ORDERBY);
        $ORDERBY    = $ORDERBY == '' ? $this->chave : $ORDERBY ;
        
        
        
        $SQL   = " SELECT $SELECT FROM $FROM WHERE $WHERE ORDER BY $ORDERBY ; ";

        $tabelaBanco = $this->executarNoBanco($SQL);
        
        $tr = mysqli_num_rows($tabelaBanco); //Carrega quantidade de Rows do banco
        
        
        $tabela = "";
        
        // $tabela .= "<table  id='consultar'  border=1 class='table-striped table-bordered' >";
        
        
        $thead = array();
        
        foreach ($this->campos as $dadosCampo){
            if ($dadosCampo['pesquisa']){
                $thead[] = "<th scope='col'  nowrap>$dadosCampo[label]</th>";
            }
        }
        

        // Excluir
        $thead[] = "<th scope='col' style='text-align:center'>Ação</th>";
        $thead = implode ('' , $thead);
        
        $dadosTabela = '';
        
        foreach ($tabelaBanco as $linha)
        {
            $dadosTabela .= "<tr class='row'>";
            
            foreach ($linha as $chave => $valor)
            {
                if($chave == $this->chave){
                    $valorChave = $valor;
                } else {
                    
                    if (isset($this->campos[$chave]['callback'])){
                        $valor = $this-> { $this->campos[$chave]['callback'] } ( $valor );
                    }
                    
                    $dadosTabela .= "<td nowrap>$valor</td>";

                }
            }
            
            
            $dadosTabela .= "
                <td nowrap align='center'>
                    <a 
                        href  = 'editar.php?tabela=$this->classe&chave=$valorChave' 
                        style = 'font-size:30px'
                        title = 'Editar'
                    >
                        <i class='fas fa-user-edit'></i>

                    </a>


                    <a 
                        href  = 'excluir.php?tabela=$this->classe&chave=$valorChave' 
                        style = 'font-size:30px; color: #b22222'
                        title = 'Excluir' 
                    >
                       <i class='fas fa-trash-alt'></i>
                    </a>



                
            ";

            //Botão para efetuar atendimento de consultas
            /*if($this->tabela == 'tab_eventos')
                $dadosTabela .= " <a 
                        href  = 'editar.php?tabela=$this->classe&chave=$valorChave' 
                        style = 'font-size:30px; color: #7cc77a'
                        title = 'Atender consulta' 
                    >
                      <i class='fas fa-sign-in-alt'></i>
                    </a>";
  
            $dadosTabela .= " </td> </tr>";*/
        }
        
        
        
        
        $cache.="
            
            <div class='col-lg-12 table-responsive'>
                <table class='table table-striped table-bordered consultar table-hover' style='border-radius: 10px;' '>
                    <thead style='font-size: 13px; background: #005C97;  /* fallback for old browsers */
                        background: -webkit-linear-gradient(to right, #363795, #005C97);  /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #363795, #005C97); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;color:white;' >
                        <tr class='row'>
                            $thead
                        </tr>
                    </thead>
                    <tbody style='font-size:small;'>
                        $dadosTabela
                    </tbody>
                </table>
            </div>
        ";
              
       
        return $cache;
        
    }
    
    
    
   public function ver($variavel)
   {
      echo"<pre>";
      print_r($variavel);
      echo"</pre>";
   }    
    
    public function alert($variavel){
        echo"<script>$variavel</script>";
    }
    
    
    /**
     * EXCLUIR
     */
    function excluir()
    {

        if($this->tabela == 'tab_clientes'){
            if(isset($_REQUEST['chave']))
                $SQL = "SELECT cli_id FROM tab_eventos WHERE cli_id =".$_REQUEST['chave'];    
           /* $cli = $this->executarNoBanco($SQL);
            if($cli->num_rows > 0)
                echo "<script>alert('Cliente não pode ser excluido após agendamento de consulta. ')</script>";*/
        }
        if($this->tabela == 'tab_profissionais'){
            if(isset($_REQUEST['chave']))
                $SQL = "SELECT prof_id FROM tab_eventos WHERE prof_id =".$_REQUEST['chave'];    
           /* var_dump($SQL);
            $prof = $this->executarNoBanco($SQL);
            if($prof->num_rows > 0)
                echo "<script>alert('Profissional não pode ser excluido após agendamento de consulta. ')</script>";*/
        }
        //Verifica se o Status é diferente de Concluido
        elseif($this->tabela == 'tab_eventos'){
             if(isset($_REQUEST['chave']))
                $SQL = "SELECT STATUS FROM tab_eventos WHERE id =".$_REQUEST['chave']." AND STATUS = 'C'";    
           /* $ev = $this->executarNoBanco($SQL);
            if($ev->num_rows > 0)
                echo "<script>alert('Consultas efetuadas não podem ser excluidas. ')</script>";*/

        }

        if(isset($SQL)){
            $aux = $this->executarNoBanco($SQL);

            if($aux->num_rows > 0)
                echo "<script>alert('Impossivel excluir. ')</script>";
            
        }


        else{
            $SQL = "DELETE FROM {$this->tabela} WHERE $this->chave = $_REQUEST[chave] ; " ; 
            $this->executarNoBanco($SQL);
            
        }
        
        return $this->pesquisar();
        // return $SQL;
        //return "<script>history.go(-1);</script>" ; 
 
    }
    
    function getJavascript(){
        return ""; 
    }
    
    
    
    /**
     * Executa comando no banco
     *
     * @param string $SQL
     * @return void
     */
    
    public static function executarNoBanco($SQL='')
    {
        // echo "$SQL";exit();
        // teste
        
        $servername  =  "localhost"    ; // Server em que esta o banco
        $username    =  "root"         ; // usuario do banco
        $password    =  ""             ; // senha do banco
        $database    =  "newpsicosys"  ; // banco de dados
        
        
        // Cria a conexao com o banco
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Verifica se a conexao funcionou
        if ($conn->connect_error) {
            // Se nao funcionou, entao dispara um erro e para de executar o PHP
            die("Connection failed: " . $conn->connect_error);
        } 
        
        // Roda o script no banco e pega o retorno
        $resultado = $conn->query($SQL);
        
        // tres iguais compara o tipo, caso retornase Zero, ele entraria no if, 3 iguais evita isso
        if ($resultado === false)
        {
            echo "
                <span style='color:red;font-weight: bold;'>
                    Erro No Banco no Script:
                </span>
                <pre>".mysqli_error($conn)."</pre>
                <pre>$SQL</pre>
                
            ";
            exit();
        }
        
        // salva as alteracoes executadas no banco
        $conn->commit();
        // fecha a conexao com o banco
        $conn->close();
        
        // Retorna o resultado da execucao no banco
        return $resultado;
    }

    public function getClientes(){
        $SQL = "SELECT *  FROM tab_clientes " ; 
        $this->executarNoBanco($SQL);
        return $this->pesquisar();
    }

    public function atestado(){
        header( 'Location: ./view/modal_atestado' );
    }

    public function transforma($obj){
        

        return   mysqli_fetch_assoc($obj);
        
        // var_dump($a);

        

    }
}
