<?php
// app/Tools/SomeExampleClass.php
namespace App\Tools;
  
class Helper
{
    public function getResponseHeaders($header = null){
        $headers = apache_response_headers ();
        if($header != null){
            if(isset($headers[$header])){
                return $headers[$header];
            }
            return ;
        }
        return $headers;
    }

    public function getDateTimeStamp()
    {
        return date('Y-m-d H:i:s');
    }

    public function covertDate($date)
    {
        return date('d-m-Y',strtotime($date));
    }

    public function covertDateTime($date)
    {
        return date('d-m-Y H:i:s',strtotime($date));
    }

    public function covertDateFormat($date)
    {
        return date('Y-m-d H:i:s',strtotime($date));
    }


    public function selectvaluesCheck($data,$value){

        if($data == $value){
            return 'selected=""';
        }
        return "";
    }

    public function checkboxValuesCheck($data,$value)
    {   
        if(!empty($data) && is_array($data)){
            foreach ($data as $key => $v) {
                if(trim($v) == trim($value)){
                    return 'checked=checked';
                    break;
                }   
            }
        }else{
            if(trim($data) == trim($value)){
                return 'checked=checked';
            }
        }
        return "";
    }

    public function is_assoc(array $array)
    {
    // Keys of the array
    $keys = array_keys($array);

    // If the array keys of the keys match the keys, then the array must
    // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
    return array_keys($keys) !== $keys;
    }

    public function to_assoc(array $array,$key,$value){
        $assoc = [];
        foreach ($array as $k => $v) {
            $assoc[$v->$key] = $v->value;
        }
        return $assoc;
    }

    public  function matchArray(array $array,$value)
    {   
        foreach ($array as $key => $v) {
            if(trim($v) == trim($value)){
                return true;
                break;
            }   
        }

        return false;
    }

    public function naturalNumber($value)
    {
        if((int)$value < 1){
            return 1;
        }
        return (int)$value;
    }

    public function renderOptionTypeByQuestionType($type='')
    {
        $inputType = '';
        switch ($type) {
            case 'Objective':
                $inputType = 'radio';
                break;
            case 'Multiple Answers':
                $inputType = 'checkbox';
                break;
        }

        return $inputType;
    }
}