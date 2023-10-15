<?php 

namespace src;

use Stringable;

class EmailService{
  private $de;
  private $para;
  private $assunto;
  private $conteudo;

  public function __construct(
    string $de = 'contato@site.com.br',
    string $para = '',
    string $assunto = '',
    string $conteudo = ''

  ){
    $this->de = $de;
    $this->de = $para;
    $this->de = $assunto;
    $this->de = $conteudo;
  }

  public static function dispararEmail(){
    return "--- enviar e-mail ---";
  }
}

?>