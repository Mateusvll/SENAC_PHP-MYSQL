class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    // getters e setters

    public function cadastrar() {
        // Lógica para cadastrar o usuário no banco de dados
        // Retorne true se o cadastro for bem-sucedido, caso contrário, retorne false
        return true;
    }

    public function atualizar() {
        // Lógica para atualizar os dados do usuário no banco de dados
    }

    public function excluir() {
        // Lógica para excluir o usuário do banco de dados
    }

    public function validarSenha($senha) {
        // Lógica para validar a senha informada
        // Retorne true se a senha for válida, caso contrário, retorne false
        return true;
    }
}
