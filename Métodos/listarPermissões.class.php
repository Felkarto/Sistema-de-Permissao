<?php
public static function listar(){
$sql = "SELECT * FROM permissoes";
$stmt = DB::conexao()->prepare($sql);
$stmt->execute();
$registros = $stmt->fetchAll();
if($registros){
$itens = array();
foreach($registros as $objeto){
$temporario = new Permissao();
$temporario->setId($objeto['id_permissao']);
$temporario->setDescricao($objeto['descricao']);
$temporario->setAcao($objeto['acao']);
$itens[] = $temporario;
}
return $itens;
}return false;
}
?>