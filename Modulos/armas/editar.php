
<?php
include "classes/DB.class.php";
include "classes/Armas.class.php";
?>

<?php
if (isset($_POST['botao']) && $_POST['botao'] == "Salvar") {
    $armas = new Armas($_POST['id']);
    $armas->setSub($_POST['sub']);
    $armas->setFuzis($_POST['fuzis']);
    $armas->setPistolas($_POST['pistolas']);

    $armas->atualizar();
}
?>



<?php
if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $armas = new Armas($_GET['id']);
    ?>

<form method='post' action=''>
Sub:      <input type="text" name='sub' value='<?php echo $armas->getSub(); ?>'></br>
Fuzis:          <input type="text" name='fuzis'  value='<?php echo $armas->getFuzis(); ?>'></br>
Pistolas:     <input type="text" name='pistolas' value='<?php echo $armas->getPistolas(); ?>'></br>


<input type='submit' name='botao' value='Salvar'>
</form>

<?php }?>