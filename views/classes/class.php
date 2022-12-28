<?php 

/**
 * Classe responsável por exibir uma data chamada a partir
 * de uma nova instancia
 * @param $dia Equivale ao dia da data
 * @param $mes Equivale ao mês da data
 * @param $ano Equivale ao ano da data
 * @author Lucas Vidal
 */


class Data {
  public $dia = 3;
  public $mes = 9;
  public $ano = 2000;

  // function __construct(
  //   $d, $m, $a
  // ){
  //   $this->dia = $d;
  //   $this->mes = $m;
  //   $this->ano = $a;
  // }

  /**
   * Respnsável por apresentar a data na tela do usuário
   */
  public function apresentar() {
    $data = "{$this->dia}/{$this->mes}/{$this->ano}";
    return $data; 
  }

}

$data1 = new Data(01,01,1970);
$data2 = new Data(02,06,2000);

echo "<h6>{$data1->apresentar()}</h6>";
echo "Meu niver: {$data2->apresentar()}";


?>