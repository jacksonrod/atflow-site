<?php

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $email_reply = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $email_headers = implode ( "\n",array ( "From: $email", "Reply-To: $email_reply",
  "Return-Path: $email","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );  

  if(mail ('atendimento@atflow.com.br', 'Assunto', 
  nl2br("Nome: $nome <br> E-mail: $email <br><br> Mensagem: $mensagem"), $email_headers)){ 
    echo "<script>alert('E-mail enviado com sucesso! Aguarde que retornaremos em seguida.');</script>"; 
    header('location: contato.html');
  } 
  else{ 
    echo "</b>Falha no envio do E-mail!</b>"; 
  } 
  
?>