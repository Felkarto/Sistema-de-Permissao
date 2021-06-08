<?php
public function excluir(){
if($this->id){
$sql =
"DELETE FROM operacoes WHERE id_operacao = :id_operacao";
$stmt = DB::conexao()->prepare($sql);
$stmt->bindParam(':id_operacao', $this->id);
$stmt->execute();
}
}
?>

<?php
if(isset($_GET['remove']) && $_GET['remove'] == true){
$listaPermissao = Operacao::listar($_GET['idgrupo'], $_GET['idmodulo'],$_GET['idpermissao']);
foreach($listaPermissao as $itemPermissao){
$excluir= new Operacao($itemPermissao->getId());
$excluir->excluir();
}
}
?>