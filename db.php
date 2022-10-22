<?php

$conex = mysqli_connect("localhost","root","","criptografia");


define('METHOD','AES-256-CBC');
	define('SECRET_KEY','$Edson09');
	define('SECRET_IV','27092000');
class db{
    public static function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }


    public static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }


    
}

class db_rsa{
    //encriptacion mediante rsa 
    

    public static function encryp_rsa($data,$key){
        $iv=openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted=openssl_encrypt($data, "aes-256-cbc",$key,0,$iv);

        return base64_encode($encrypted."::".$iv);
    }
    public static function decrypt_rsa($data,$key){
        list($encrypted_data,$iv)=explode('::',base64_decode($data),2);

        return openssl_decrypt($encrypted_data, 'aes-256-cbc',$key,0,$iv);
       }    
}

 

?>
