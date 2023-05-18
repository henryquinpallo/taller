<?php
require_once("layouts/header.php");
?>

<table >
    <tr>
        <td class="encabezado">ID</td>
        <td class="encabezado">NOMBRE</td>
        <td class="encabezado">PRECIO</td>
        <td class="encabezado">BOTONES DE ACCIONES</td>        
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td ><?php echo $v['id'] ?> </td>
                        <td ><?php echo $v['nombre'] ?> </td>
                        <td ><?php echo $v['precio'] ?> </td>
                        <td>
                            <a href="index.php?m=nuevo" class="btn_nuevo">NUEVO</a>
                            <a class="btn_editar" href="index.php?m=editar&id=<?php echo $v['id']?>">EDITAR</a>
                            <a class="btn_eliminar" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");