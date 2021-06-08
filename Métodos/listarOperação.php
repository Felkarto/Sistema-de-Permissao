<?php
public function listar($idgrupo, $idmodulo, $idacao){
$sql =
"SELECT * FROM operacoes WHERE fk_grupo =
'$idgrupo' AND fk_modulo =
'$idmodulo' AND fk_permissao = $idacao";
$stmt = DB::conexao()->prepare($sql);
$stmt->execute();
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<?php
public function listar($idgrupo, $idmodulo, $idacao){
if($registros){
$itens = array();
foreach($registros as $objeto){
$temporario = new Operacao();
$temporario->setId($objeto['id_operacao']);
$temporario->setFkGrupo($objeto['fk_grupo']);
$temporario->setFkModulo($objeto['fk_modulo']);
$temporario->setFkPermissao($objeto['fk_permissao']);
$itens[] = $temporario;
}
return $itens;
}
return false;
}
?>