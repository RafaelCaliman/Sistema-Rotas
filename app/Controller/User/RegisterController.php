<?php
namespace App\Controller\User;
use Core\BaseController;
use App\Model\UserModel;

class RegisterController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function create()
    {
        $this->render('cadastrar');
    }

    public function store()
    {
        $nome  = $_POST['nome'] ?? "";
        $email = $_POST['email'] ?? "";
        $cpf   = $_POST['cpf'] ?? "";
        $senha = $_POST['senha'] ?? "";

        $erro = $this->validarDados($nome, $email, $cpf, $senha);

        if ($erro) {
            $_SESSION['msg'] = $erro;

            header('Location: ' . BASE_URL . '/cadastrar');
            exit;
        }

        $valida = $this->model->validar($email);

        if (!$valida) {

            $sucesso = $this->model->cadastro($nome,$email,$cpf,$senha);

            if ($sucesso) {

                $_SESSION['msg'] = 'Conta criada com sucesso!';

                header('Location: ' . BASE_URL . '/login');
                exit;
            } else {

                $_SESSION['msg'] = 'Não foi possível realizar o cadastro.';

                header('Location: ' . BASE_URL . '/cadastrar');
                exit;
            }
        } else {

            $_SESSION['msg'] = 'Já existe uma conta cadastrada com este e-mail.';

            header('Location: ' . BASE_URL . '/cadastrar');
            exit;
        }
    }

    private function validarDados($nome, $email, $cpf, $senha)
    {
        if (empty($nome)) {

            return 'O campo nome é obrigatório.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return 'Digite um e-mail válido.';
        }

        if (!empty($cpf) && !is_numeric($cpf)) {

            return 'O CPF deve conter apenas números.';
        }

        if (strlen($senha) <= 3) {

            return 'A senha deve ter no mínimo 4 caracteres.';
        }

        return null;
    }
}
