<?php 

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
use src\interfaces\ILog;

use src\componentes\Notificacao;
use src\componentes\Log;

class UsuarioModel extends BD implements ICadastro, INotificacao, ILog{
  
  public function salvar(){

  }

  public function registrarLog(Log $log){

  }

  public function enviarNotificacao(Notificacao $notificacao){

  }
}

?>