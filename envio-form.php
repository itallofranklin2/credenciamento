 <?php
        if (isset($_POST['BTEnvia'])) {

          //Variaveis de POST, Alterar somente se necessário
          //====================================================
          $nome =          $_POST['nome'];
          $numero =        $_POST['numero'];
          $email =         $_POST['email'];
          $mensagem =      $_POST['mensagem'];  
          //====================================================

          //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
          //====================================================
          $email_remetente = ""; // deve ser uma conta de email do seu dominio
          //====================================================

          //Configurações do email, ajustar conforme necessidade
          //====================================================
          $email_destinatario = ""; // pode ser qualquer email que receberá as mensagens
          $email_reply = "$email";
          $email_assunto = "Contato do site"; // Este será o assunto da mensagem
          //====================================================

          //Monta o Corpo da Mensagem 
          //====================================================
          $email_conteudo = "nome = $nome \n";
          $email_conteudo .= "numero = $numero \n";
          $email_conteudo .= "email = $email \n";
          $email_conteudo .= "mensagem = $mensagem \n";
          //====================================================

          //Seta os Headers (Alterar somente caso necessario)
          //====================================================
          $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
          //====================================================

          //Enviando o email
          //====================================================
          if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
            echo "</b>E-Mail enviado com sucesso!</b>";
          }
          else{
            echo "</b>Falha no envio do E-Mail!</b>"; }
            //====================================================
          }
          ?>