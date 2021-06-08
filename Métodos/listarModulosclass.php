<?php
public static function listar(){
$sql = "SELECT * FROM modulos";
$stmt = DB::conexao()->prepare($sql);
$stmt->execute();
$registros = $stmt->fetchAll();
if($registros){
$itens = array();
foreach($registros as $objeto){
$temporario = new Modulo();
$temporario->setId($objeto['id_modulo']);
$temporario->setDescricao($objeto['descricao']);
$temporario->setDiretorio($objeto['diretorio']);
$itens[] = $temporario;
}
return $itens;
}return false;
}
?>