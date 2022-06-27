<?php
   if(isset($_POST['submit']))
   {
       print_r ('Nome:'. $_POST['Primeiro nome']);
       print_r ('<br>');
       print_r ('Sobrenome'. $_POST['sobrenome']);
       print_r('<br>');
       print_r('Email:' .$_POST['email']);
       print_r('<br>');
       print_r ('telefone:' .$_POST['telefone']);
       print_r('senha' .$_POST['senha']);
       print_r('<br>'); 
       print_r('confirme sua senha' .$_POST['confirme sua senha']);
       print_r('<br>'); 
       print_r('genero' . $_POST['genero']);
       print_r('<br>');

       include_once('config.php');

       $nome =$_POST['nome'];]
       $sobrenome =$_POST['sobrenome'];
       $email =$_POST['email'];
       $telefone =$_POST['telefone'];
       $senha =$_POST['senha'];
       $confirme_senha =$_POST['confirme sua senha'];
       $genero =$_POST['genero'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,telefone,senha,conifirme_seha,genero) 
       VALUES($nome,$sobrenome,$email,$telefone,$senha,$confirme_senha,$genero)"); 

   }
?>
<!DOCTYPE html>
 <html lang="pt-br" dir="ltr">
     <head>
         <meta charset="UTF-8">
         <title>Formulário do Cadastro</title>
         <link rel="stylesheet" href="form.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body>
         <div class="container">
             <div class="title">Cadastro</div>
             <form action="#">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Primeiro nome</span>
                         <input type="text" placeholder="Digite seu nome" required>
                     </div>
                     <div class="input-box">
                        <span class="details">Sobrenome</span>
                        <input type="text" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <span class="details">E-mail</span>
                        <input type="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Telefone/Celular</span>
                        <input type="tel" placeholder="Digite seu número" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Senha</span>
                        <input type="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirme sua senha</span>
                        <input type="password" placeholder="Digite sua senha novamente" required>
                    </div>
                 </div>
                 <div class="gender-details">
                     <input type="radio" name="gender" id="dot-1">
                     <input type="radio" name="gender" id="dot-2">
                     <input type="radio" name="gender" id="dot-3">
                     <span class="gender-title">Gênero</span>
                     <div class="category">
                         <label for="dot-1">
                            <span class="dot one"></span> 
                            <span class="gender">Mulher</span>
                         </label>
                         <label for="dot-2">
                            <span class="dot two"></span> 
                            <span class="gender">Homem</span>
                         </label>
                         <label for="dot-3">
                            <span class="dot three"></span> 
                            <span class="gender">Prefiro não dizer</span>
                         </label>
                     </div>
                 </div>
                 <div class="button">
                     <input type="submit" name="submit" id="submit"  value="Registrar">
                 </div>
             </form>
         </div>
     </body>
 </html>