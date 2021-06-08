<?php
public function verificaPermissao($idgrupo, $modulo, $acao){
$sql = "SELECT * FROM operacoes
INNER JOIN modulos ON modulos.id_modulo = operacoes.fk_modulo
INNER JOIN permissoes ON permissoes.id_permissao = operacao.fk_permissao
WHERE modulos.diretorio = ‘$modulo’ AND permissoes.acao = ‘$acao’ AND operacoes.fk_grupo = $idgrupo";
$stmt = DB::conexao()->prepare($sql);
$stmt->execute();
$rg = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($rg){
return true;
}
return false;
}
?>