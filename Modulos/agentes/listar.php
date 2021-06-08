<?php
include "classes/DB.class.php";
include "classes/Agentes.class.php";
$agentes = Agentes::listar();
?>

<table>
<tr>
    <th>ID</th>
    <th>SENTINELAS</th>
    <th>CONTROLADORES</th>
    <th>DUELISTAS</th>
</tr>

<?php

public static function listar(){
    $sql = "SELECT * FROM modulos";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->execute();
    $registros = $stmt->fetchAll();


if ($agentes) {
    $itens = array();
    foreach ($agentes as $agentes) {
        ?>
    <tr>
        <td><?php echo $agentes->setId(); ?></td>
        <td><?php echo $agentes->setSentinelas(); ?></td>
        <td><?php echo $agentes->setControladores(); ?></td>
        <td><?php echo $agentes->setDuelistas(); ?></td>
        <td><?php echo $itens[] = $agentes; ?></td>


    </tr>
}

}



</table>

?>