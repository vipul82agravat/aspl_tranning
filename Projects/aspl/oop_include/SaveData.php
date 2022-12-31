<?php
class SaveData {
        function __construct(){

        }
        public function SaveDetails($connection,$table,$column,$data){
            try{
            $query='INSERT INTO '.$table.' ('.$column.') VALUES ('.$data.')';
            $save=mysqli_query($connection,$query);

            return $arr=['status'=>1,
                        'message'=>'Records Save Successfully'
                        ];

            }
            catch(Exception $e){
                return $e."error on save time";
            }
        }
        public function UpdateDetails($connection,$table,$data,$id){
            try{
            $query='UPDATE '.$table.'SET '.$data.' WHERE id='.$id;
            $save=mysqli_query($connection,$query);

            return $arr=['status'=>1,
                        'message'=>'Records Updated Successfully'
                        ];

            }
            catch(Exception $e){
                return $e."error on update time";
            }
        }
         public function DeleteDetails($connection,$table,$id){
            try{
                $query='DELETE  FROM '.$table.'WHERE id='.$id;
                $save=mysqli_query($connection,$query);

                return $arr=['status'=>1,
                            'message'=>'Records Delete Successfully'
                            ];

            }
            catch(Exception $e){
                return $e."error on delete time";
            }
        }
}



?>
