<?php

class Hash {

     /**
     *
     * @param string $type The algorithm (md5, sha1, etc)
     * @param string $data The data to encode.
     * @param string $salt The salt, generally the save throughout the website.
     * @return string The hashed/salted data
     */
    public static function generateSha($data, $salt){
        
        $context = hash_init('sha256', HASH_HMAC, $salt);
        hash_update($context, $data);
        
        return hash_final($context);
    }
    
        public static function generateMD5($data, $salt){
        
        $context = hash_init('md5', HASH_HMAC, $salt);
        hash_update($context, $data);
        
        return hash_final($context);
    }
}
