<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Painel e Produtos</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: rgb(5, 45, 85);
      margin: 0;
      padding: 0;
    }
    header {
      height: 60px;
      background-color: rgb(8, 76, 145);
      border-bottom: 2px solid white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
    }
    .header-left {
      color: #fff;
      font-size: 1.2em;
    }
    .header-right {
      display: flex;
      gap: 10px;
    }
    .header-right form {
      margin: 0;
    }
    .header-right button {
      background-color: rgb(1, 29, 56);
      border: none;
      outline: none;
      padding: 8px 12px;
      border-radius: 7px;
      color: white;
      font-size: 14px;
      cursor: pointer;
    }
    .header-right button:hover {
      background-color: deepskyblue;
    }
    .tela-painel {
      padding: 20px;
      color: white;
      text-align: center;
    }
    .produtos {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .produto {
      background-color: rgba(0, 0, 0, 0.2);
      padding: 15px;
      border-radius: 10px;
      width: 300px;
      box-sizing: border-box;
      text-align: left;
    }
    .produto h4 {
      margin-top: 0;
      margin-bottom: 10px;
    }
    .produto p {
      margin: 5px 0;
      font-size: 14px;
      line-height: 1.5;
    }
    .produto .info {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-left">
      <h3 style="margin: 0;">Bem vindo ao Painel!</h3>
    </div>
    <div class="header-right">
      <form action="atualizarPerfil.php" method="post">
        <button type="submit">Atualizar Perfil</button>
      </form>
      <form action="compras.php" method="post">
        <button type="submit">Compras</button>
      </form>
      <form action="deletar.php" method="post">
        <button type="submit">Deletar Conta</button>
      </form>
      <form action="logout.php" method="post">
        <button type="submit">Sair</button>
      </form>
    </div>
  </header>
  
  <div class="tela-painel">
    <h2>Produtos Eletrônicos</h2>
    <div class="produtos">
      
      <div class="produto">
        <h4>Smartphone X100</h4>
        <p>
          Tela de 6.5", processador octa-core e câmera de 48MP.
          Perfeito para quem busca performance e design moderno.
        </p>
        <p class="info">Preço: R$ 1.999,99</p>
        <p class="info">Quantidade: 10 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Notebook Pro 15</h4>
        <p>
          Equipado com Intel i7, 16GB de RAM e SSD de 512GB.
          Ideal para profissionais e entusiastas de tecnologia.
        </p>
        <p class="info">Preço: R$ 4.499,99</p>
        <p class="info">Quantidade: 5 unidades</p>
      </div>
     
      <div class="produto">
        <h4>Smart TV 55"</h4>
        <p>
          Resolução 4K com HDR e conexão Wi-Fi.
          Experiência completa para sua sala de estar.
        </p>
        <p class="info">Preço: R$ 2.999,99</p>
        <p class="info">Quantidade: 7 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Headphones Bluetooth</h4>
        <p>
          Cancelamento de ruído ativo, bateria com até 20 horas de duração.
          Qualidade sonora superior para seus momentos de lazer.
        </p>
        <p class="info">Preço: R$ 399,99</p>
        <p class="info">Quantidade: 15 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Smartwatch Series 5</h4>
        <p>
          Monitoramento de saúde e atividades físicas, com integração a smartphones.
        </p>
        <p class="info">Preço: R$ 899,99</p>
        <p class="info">Quantidade: 20 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Tablet 10" Plus</h4>
        <p>
          Tela de 10.1", ótimo desempenho e bateria de longa duração.
        </p>
        <p class="info">Preço: R$ 1.299,99</p>
        <p class="info">Quantidade: 12 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Câmera Digital Pro</h4>
        <p>
          Alta resolução, lente intercambiável e recursos avançados para fotografia profissional.
        </p>
        <p class="info">Preço: R$ 3.199,99</p>
        <p class="info">Quantidade: 6 unidades</p>
      </div>
      
      <div class="produto">
        <h4>Caixa de Som Portátil</h4>
        <p>
          Som potente com bateria de longa duração e design resistente à água.
        </p>
        <p class="info">Preço: R$ 249,99</p>
        <p class="info">Quantidade: 30 unidades</p>
      </div>
    </div>
  </div>
</body>
</html>
