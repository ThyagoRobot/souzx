<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Souzx/db/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome;
    public $senha;
    public $email;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id_usuario = $id;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $sql = 'SELECT * FROM usuarios WHERE id_usuario = :id';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $this->nome = $resultado['nome'];
        $this->senha = $resultado['senha'];
        $this->email = $resultado['email'];
    }

    public function criar()
    {
        $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);

        $stmt->execute();
    }

    public static function listar()
    {
        $sql = 'SELECT * FROM usuarios';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public function atualizar()
    {
        $sql = 'UPDATE usuarios SET nome = :nome, email = :email WHERE id_usuario = :id';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public function atualizarSenha()
    {
        $sql = 'UPDATE usuarios SET senha = :senha WHERE id_usuario = :id';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public function deletar()
    {
        $sql = 'DELETE FROM usuarios WHERE id_usuario = :id';
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $conexao = Conexao::criaConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch();
        session_start();
        if ($usuario['id_usuario'] && password_verify($senha, $usuario['senha'])) {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];;

            header('Location: /Souzx/index.php');
        } else {
            $_SESSION['aviso'] = "Email ou Senha incorretos";
            header('Location: /Souzx/views/login.php');
        }
    }
}
