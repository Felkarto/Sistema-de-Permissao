
<?php
if (isset($_POST['botao']) && $_POST['botao'] == "Salvar") {
    include 'classes/Agentes.class.php';
    $agentes = new Agentes();
    $agentes->setSentinelas($_POST['sentinelas']);
    $agentes->setControladores($_POST['controladores']);
    $agentes->setDuelistas($_POST['duelistas']);

    $agentes->adicionar();
}

?>


<form method='post' action=''>
Sentinelas:      <input type="text" name='sentinelas'></br>
Controladores:          <input type="text" name='controladores'></br>
Duelistas:     <input type="text" name='duelistas'></br>


<input type='submit' name='botao' value='Salvar'>

</form>