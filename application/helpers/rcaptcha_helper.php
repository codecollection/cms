<?php
/**
 * 验证码助手
 */
class RCaptcha {
    
    static $instance = NULL;
    
    private $word = NULL;
    private $font = './elephant.ttf';
    private $fontSize = 15;
    
    private $width = 100;
    private $height = 35;

    /**
     * 获取实例
     * @return type
     */
    public static function getInstance() {
        
        if (self::$instance === NULL) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        
        return self::$instance;
    }
    
    public function __construct() {
        
        $this->font = dirname(__FILE__) . '/elephant.ttf';
    }

    /**
     * 设置字体和字号
     * @param type $font
     * @param type $size
     * @return \RCaptcha
     */
    public function setFont($font, $size = 15) {
        
        $this->font = realpath('.') . $font;
        $this->fontSize = $size;
        return $this;
    }
    
    /**
     * 设置生成的字符
     * @param type $word
     * @return \RCaptcha
     */
    public function setWord($word) {
        
        $this->word = $word;
        return $this;
    }
    
    public function setSize($width, $height) {
        
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * 生成验证码图
     * @param type $path
     */
    public function make($path = NULL) {
        
        $word = $this->word;
        if ($word === NULL) {
            $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $str = ''; $maxlen = strlen($chars) -1;
            for ($i = 0; $i < 5; $i++)
            {
                $str .= substr($chars, mt_rand(0, $maxlen), 1);
            }

            $word = $str;
        }
        
        $wordLen = strlen($word);
        
        //背景
        $img = imagecreatetruecolor($this->width, $this->height);
        $color = imagecolorallocate($img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
        imagefilledrectangle($img, 0, $this->height, $this->width,0, $color);
        
        //文字
        $_x = $this->width / $wordLen;
        for ($i = 0; $i < $wordLen; $i++) {
            $fontColor = imagecolorallocate($img, mt_rand(0, 156), mt_rand(0, 156), mt_rand(0, 156));
            imagettftext($img, $this->fontSize, mt_rand(-30, 30), $_x * $i + mt_rand(1, 5), $this->height / 1.4, $fontColor, $this->font, $word[$i]);
        }
        
        //干扰序列
        for ($i=0; $i<6; $i++) {
            $color = imagecolorallocate($img, mt_rand(0,156), mt_rand(0,156), mt_rand(0,156));
            imageline($img, mt_rand(0, $this->width), mt_rand(0,$this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $color);
        }
        
        for ($i=0;$i<10;$i++) {
            $color = imagecolorallocate($img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
            imagestring($img, mt_rand(1, 5), mt_rand(0, $this->width), mt_rand(0, $this->height), '*', $color);
        }

        header('Content-type:image/png');
        imagepng($img);
        imagedestroy($img);
        return $word;
    }

}