<?php
class Test {


    protected function testpro($v){
        return "pro-val".$v;
    }

}
class Demo extends Test
{
    public $v=1;
    public function demo(){
        return $this->v=5;
    }
    public function testpro($v,$v1)
    {
       return "pro-val1-".$v;
    }
}

$demo =new Demo();
print_r($demo->testpro(12,1,123));

?>
