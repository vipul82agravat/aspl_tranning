<?php
class Home {
    private $name;
    private $address;

    public function __construct($name,$add){

        $this->name=$name;
        $this->address=$add;
    }
    public function getNameAndAddress(){
        return $this->name.'-'.$this->address;

    }

}
    class HomeFactory {
        public static function create($name,$address){
            return new Home($name,$address);
        }
    }

$home1=HomeFactory::create('H1','main road hige way');
$home2=HomeFactory::create('A1','2nd flore road hige way');

echo $home1->getNameAndAddress();
echo $home2->getNameAndAddress();
?>
