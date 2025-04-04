<?php
include('protect.php'); 
include('conexao.php');
$mensagem = "";


if(isset($_POST['atualizar'])) {
    $id = $_SESSION['id']; 
    $atualizacoes = false; 
    $campos_sql = array(); 
    
    if(isset($_POST['novo_usuario']) && strlen($_POST['novo_usuario']) > 0) {
        $novo_usuario = $mysqli->real_escape_string($_POST['novo_usuario']);
        
       
        $sql_check = "SELECT * FROM usuarios WHERE usuario = '$novo_usuario' AND id != '$id'";
        $check_query = $mysqli->query($sql_check) or die("Falha na execução do código SQL: " . $mysqli->error);
        
        if($check_query->num_rows > 0) {
            $mensagem = "Este nome de usuário já está em uso";
            
            goto fim_atualizacao;
        } else {
            $campos_sql[] = "usuario = '$novo_usuario'";
            $atualizacoes = true;
        }
    }
    
    
    if(isset($_POST['nova_senha']) && strlen($_POST['nova_senha']) > 0) {
        $nova_senha = $mysqli->real_escape_string($_POST['nova_senha']);
        $campos_sql[] = "senha = '$nova_senha'";
        $atualizacoes = true;
    }
    
    
    if($atualizacoes) {
        $campos_para_atualizar = implode(", ", $campos_sql);
        $sql_update = "UPDATE usuarios SET $campos_para_atualizar WHERE id = '$id'";
        
        if($mysqli->query($sql_update)) {
            $mensagem = "Perfil atualizado com sucesso!";
        } else {
            $mensagem = "Erro ao atualizar perfil: " . $mysqli->error;
        }
    } else {
        $mensagem = "Nenhuma informação foi fornecida para atualização";
    }
    
    fim_atualizacao:
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Perfil</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(8, 76, 145);
        }
        .tela-login{
            background-color: rgb(5, 45, 85);
            position:absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 20px;
            color:rgb(255, 255, 255);
        }

        input{
            padding: 16px;
            border: none;
            outline: none;
            font-size: 18px;
            border-radius: 12px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            outline: none;
            padding: 16px;
            width: 100%;
            border-radius: 12px;
            color: white;
            font-size: 20px;
            align-items: center;
            display: block;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            text-align: center;
            color: white;
            display: block;
            margin-top: 20px;
        }

        h1{
            text-align: center;
        }

        label{
            display: block;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="tela-login">
        <h1>Atualizar Perfil</h1>
        
        <?php if(!empty($mensagem)): ?>
            <p style='color: yellow; display: block; text-align: center;'><?php echo $mensagem; ?></p>
        <?php endif; ?>
        
        <form action="" method="POST">
            <div>
                <label for="novo_usuario">Novo Nome de Usuário (opcional):</label>
                <input type="text" name="novo_usuario" id="novo_usuario">
            </div>
            
            <div>
                <label for="nova_senha">Nova Senha (opcional):</label>
                <input type="password" name="nova_senha" id="nova_senha">
            </div>
            
            <button type="submit" name="atualizar" value="1">Atualizar Perfil</button>
        </form>
        
        <a href="painel.php">Voltar</a>
    </div>
</body>
</html>
