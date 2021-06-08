<?php
public function adicionar(){
$sql = "INSERT INTO operacoes (fk_grupo, fk_modulo, fk_permissao) VALUES (:fk_grupo, :fk_modulo,
:fk_permissao)";
$conexao = DB::conexao();
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':fk_grupo', $this->fkgrupo);
$stmt->bindParam(':fk_modulo', $this->fkmodulo);
$stmt->bindParam(':fk_permissao', $this->fkpermissao);
$stmt->execute();
return $conexao->lastInsertid();

 }
 if(isset($_POST['atualizarPermissao']) && $_POST['atualizarPermissao'] == 'Salvar'){
    $listaPermissao = $_POST['listaPermissao'];
    foreach($listaPermissao as $itemPermissao){
    $item = explode('-', $itemPermissao);
    $grupo = $item[0];
    $modulo = $item[1];
    $permissao = $item[2];
    $add = new Operacao();
    $add->setFkGrupo($grupo);
    $add->setFkModulo($modulo);
    $add->setFkPermissao($permissao);
    $add->adicionar();
    }
    }