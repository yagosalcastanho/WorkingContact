//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "yagocastanhosal@gmail.com"; //Insira seu endereco de e-mail profissional
      $subject = "From: $name <$email>";//assunto email
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";//enviar email
      if(mail($receiver, $subject, $body, $sender)){
         echo "Sua mensagem foi enviado";
      }else{
         echo "Falha ao enviar sua mensagem";
      }
    }else{
      echo "Por favor, digite um email válido";
    }
  }else{
    echo "O campo email é obrigatório";
  }
?>