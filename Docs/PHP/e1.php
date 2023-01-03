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
    public function testpro($v=null,$v1=null,$v2=null)
    {
       return "pro-val1-".$v.'-'.$v1.'v3'.$v2;
    }
}

$demo =new Demo();
print_r($demo->testpro(12));

?>
