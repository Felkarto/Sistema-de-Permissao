
<?php
if (isset($_POST['botao']) && $_POST['botao'] == "Salvar") {
    include 'classes/Armas.class.php';
    $armas = new Armas();
    $armas->setSub($_POST['sub']);
    $armas->setFuzis($_POST['fuzis']);
    $armas->setPistolas($_POST['pistolas']);

    $armas->adicionar();
}

?>


<form method='post' action=''>
Sub:      <input type="text" name='sub'></br>
Fuzis:          <input type="text" name='fuzis'></br>
Pistolas:     <input type="text" name='pistolas'></br>


<input type='submit' name='botao' value='Salvar'>

</form>