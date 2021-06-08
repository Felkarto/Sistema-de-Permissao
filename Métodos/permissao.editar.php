<?php
foreach ($modulos as $modulo) {
    $permissoes = Permissao::listar();
    if ($permissoes) {
        foreach ($permissoes as $permissao) {
            $verifica = Operacao::verificaPermissao($idgrupo, $modulo->getDiretorio(), $acao->getAcao());
            ?>
<input<?php if ($verifica) {echo 'checked disabled';}?>
type="checkbox" name='listaPermissao[]‘ value='<?php echo $idgrupo; ?>-<?php echo $modulo->getId(); ?>-<?php echo $acao->getId(); ?>'>
<?php echo $acao->getDescricao() ?>
<?php
 if($verifica){
    echo " <a href='?idgrupo=".$idgrupo.“
    &idmodulo=".$modulo->getId().“
    &idpermissao=".$acao->getId().“
    &remove=true'>(x)</a> ";
    }?>
    ]
}


<form method='post'>
<?php


?>
<input type='submit' name='atualizarPermissao' value='Salvar'>";
<form>