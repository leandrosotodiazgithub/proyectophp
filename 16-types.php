
<?php include 'includes/header.php';

include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;





include 'includes/footer.php';