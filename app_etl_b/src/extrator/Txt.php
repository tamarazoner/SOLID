<?php 

namespace src;

namespace src\extrator;

class Txt extends Arquivo {
  public function lerArquivo(string $caminho): array {
      
      $handle = fopen($caminho, 'r');

      while(!feof($handle)){
        $linha = fgets($handle); //o ponteiro interno de leitura do arquivo é incrementado
        $this->setDados(
          substr($linha, 11, 30), //nome
          substr($linha, 0, 11), //cpf
          substr($linha, 41, 50) //email
        );
      }
      fclose($handle);

      return $this->getDados();
    }
}

?>