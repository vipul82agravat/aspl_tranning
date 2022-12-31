<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  function get_name() {  // a public function (default)
    return $this->name;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
echo $mango->get_name(); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR
?>