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
  public $dia = 2;
  public $mes = 6;
  public $ano = 2000;

  /**
   * Responsável por apresentar a data na tela do usuário
   */
  public function apresentar() {
    echo "{$this->dia}/{$this->mes}/{$this->ano}";
  }

}

$showFixedData = new Data();
$testParams = new Data(01,01,1970);

$showData = new Data();
$showData->dia = 29;
$showData->mes = 10;
$showData->ano = 1966;


echo "This' the fixed data inside the class: <br> <b>Result: </b>";
echo $showFixedData->apresentar();

echo '<br><br> Calling with params ("new Data(01,01,1970)"): <br> <b>Result: </b>';
echo $testParams->apresentar();
?>

<br><br><br> And we can acess the statements, if public, like below: <br>
<code style="background-color: #aaa">
  $showData = new Data(); <br>
  $showData->dia = 29; <br>
  $showData->mes = 10; <br>
  $showData->ano = 1966; <br>
  $showData->apresentar() <br>
</code> <br>

<b>Result: <?= $showData->apresentar() ?></b>