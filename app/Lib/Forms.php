<?php
/**
 * Created by PhpStorm.
 * User: zhanghuamin
 * Date: 18/11/27
 * Time: 下午2:45
 */

namespace App\Lib;


class Forms
{
    const TYPE_LIST = ['text','password','select','image'];


    public static function createField($type,$value='',$data=[]){
        if(!in_array($type,self::TYPE_LIST)){
            return '';
        }
        if($type=='text'){
            return '<input type="text" class="input-text" value="" placeholder="" id="'.$data['name'].'" name="'.$data['name'].'" value="'.$value.'">';
        }elseif($type=='password'){
            return '<input type="password" class="input-text" value="" placeholder="" id="'.$data['name'].'" name="'.$data['name'].'" value="'.$value.'">';
        }elseif($type=='select'){
            $field = '<select name="'.$data['name'].'" class="select">';
            if(is_array($data['list']) && !empty($data['list'])){
                foreach($data['list'] as $key=>$val) {
                    if(!empty($value) && $value==$val){
                        $field .= '<option value="' . $key . '" selected="selected">' . $val . '</option>';
                    }else {
                        $field .= '<option value="' . $key . '">' . $val . '</option>';
                    }
                }
            }
            $field .= '</select>';
            return $field;
        }
        return '';
    }
}