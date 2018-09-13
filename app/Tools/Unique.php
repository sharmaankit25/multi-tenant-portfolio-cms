<?php
// app/Tools/SomeExampleClass.php
namespace App\Tools;
  
class Unique
{
    protected $token;

    protected $model;


    public function generate($length=5,$type='',$prefix='',$postfix=''){

    	if($type == 'numeric'){
            return  $this->numeric($length,null,'',$prefix,$postfix);;
        }else{
            return  $this->numeric($length,null,'',$prefix,$postfix);
        }
    }

    public function byModal($model=null,$column='code',$type='',$length=5,$prefix='',$postfix=''){

        if(gettype($model) === 'string'){
            $model = new $model;
        }

        if($type == 'numeric'){
            return $this->numeric($length,$model,$column,$prefix,$postfix);
        }else{
            return $this->alphaNumeric($length,$model,$column,$prefix,$postfix);
        }
    }

    public function numeric($length=5,$model=null,$column='code',$prefix='',$postfix=''){
        // Generate a random Token
        $this->randomGenerate('numeric',$length,$prefix,$postfix);
        // Check If It Exists in model
        if($model){
            $this->model = $model;
            if($this->checkInModal($column)){
                $this->randomGenerate('alphanumeric',$length,$prefix,$postfix);
            }
        }
   
        return $this->token;
    }

    public function alphaNumeric($length=5,$model=null,$column='code',$prefix='',$postfix=''){
        // Generate a random Token
        $this->randomGenerate('alphanumeric',$length,$prefix,$postfix);
        // Check If It Exists in model
        if($model){
            $this->model = $model;
            if($this->checkInModal($column)){
                $this->randomGenerate('alphanumeric',$length,$prefix,$postfix);
            }
        }
        return $this->token;
    }



    // ======= Protected Classes =======//

    protected function checkInModal($column){

        if($this->model->where($column, '=',$this->token)->exists()){
            return true;
        }
        return false;
    }

    protected function randomGenerate($type,$length,$prefix='',$postfix='')
    {
        $this->token = "";
        if($type == 'numeric'){
            $codeAlphabet = "0123456789";
        }else{
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet.= "0123456789";
        }

        $max = strlen($codeAlphabet); // edited
        for ($i=0; $i < $length; $i++) {
            $this->token .= $codeAlphabet[random_int(0, $max-1)];
        }

        $this->token = $prefix.''.$this->token.''.$postfix;
    }
}