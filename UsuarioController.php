class UsuarioController {
    public function cadastraUsuario($usuario) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Validar nome, email e senha
        if (!empty($nome) && !empty($email) && !empty($senha)) {
            // Criar objeto usuário e instanciar o controller de usuário
            $objUsuario = new Usuario($nome, $email, $senha);

            // Validar a senha informada
            if ($objUsuario->validarSenha($senha)) {
                // Chamar o método cadastrar do objeto usuário
                $resultado = $objUsuario->cadastrar();
                
                if ($resultado) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }
}
