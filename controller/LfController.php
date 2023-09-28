<?php
require_once '../PHPMailer/src/Exception.php';
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class LfController
{
    public function __construct()
    {
    }

    public function enviarEmail($nome, $email, $telefone, $assunto, $mensagem){
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        //introduza o se email
        $mail->Username = '20200446@isptec.co.ao';
        //introduza a password do seu email
        $mail->Password = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        //introduza novamente o seu email
        $mail->setFrom('20200446@isptec.co.ao');
        $mail->addAddress("antoniongola10@gmail.com");
        $mail->isHTML(true);
        $mail->Subject =$assunto;
        $mail->Body = 'Nome: '.$nome. ';<br>Email: '.$email.';<br>Telefone: '.$telefone.';<br><br>'.$mensagem;
        $mail->send();
        echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
    }
    public function solicitarServico(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $assunto = filter_input(INPUT_POST, 'assunto');
            $mensagem = filter_input(INPUT_POST, 'mensagem');
            $solicitacao = filter_input(INPUT_POST, 'solicitacao');
            if($solicitacao === 'sim'){
                $this->enviarEmail($nome, $email, $telefone,$assunto, $mensagem);
            }
        }
    }
}