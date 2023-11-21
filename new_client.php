<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="src/css/cadastrofun.css"> 
    <script src="cadastrofun.js"></script>
</head>
            <header>
					<nav><a href="home.php" class="botao_nav">SAIR</a></nav> 
				</header>
<body>
    <section>
      <div class='container'>
        <div class='card'>
          <h1> Cadastrar Cliente</h1>
          
          <div id='msgError'></div>
          <div id='msgSuccess'></div>
               <form id="cad_cli" method="POST" action="crud_insert.php">
                  <div class="label-float">
                     <input type="text" name="nome" placeholder=" " required>
                     <label id="labelNome" for="nome">Nome</label>
                  </div>
      
                  <div class="label-float">
                     <input type="text" name="cpf" placeholder=" " required>
                     <label id="labelUsuario" for="cpf">CPF</label>
                  </div>
                  
                  <div class="label-float">
                     <input type="text" name="endereco" placeholder=" " required>
                     <label id="labelSenha" for="endereco">Endereço</label>                     
                  </div>
      
                  <div class="label-float">
                     <input type="tel" name="telefone" placeholder=" " required>
                     <label id="labelConfirmSenha" for="telefone">Telefone</label>
                  </div>
                  
                  <div class='justify-center'>
                     <button onclick='cadastrar()'>Cadastrar</button>
                  </div>
               </form>
          
        </div>
        </div>
    </section>
</body>
</html>