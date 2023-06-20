<?php
// Importar classes e controladores necessários
require_once 'Usuario.php';
require_once 'UsuarioController.php';

// Verificar se o botão cadastrar foi pressionado
if (isset($_POST['cadastrar'])) {
    // Criar objeto usuário e instanciar o controller de usuário
    $usuario = new UsuarioController();
    $resultado = $usuario->cadastraUsuario(new Usuario());

    if ($resultado) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

<!-- Incluir a view do cadastro de usuário -->
<?php include 'C:\xampp\htdocs\senac2\cadastro_usuario.php'; ?>