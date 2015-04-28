<?php
/** 
 * 犹豫没有配置redis,所以配置缓存在文件中 
 * 配置参数表
 */
class RConfig {
    
    private $ci = NULL;
    
    /**
     * 取得实例
     *
     * @var RConfig
     */
    private static $_instance = NULL;
    
    /**
     * 配置缓存对象
     * @var RRedis
     */
    private $redis = NULL;
    
    /**
     * 配置redis key
     */
    const REDIS_KEY = 'config';
    
    
    /**
     * 取得配置数据
     * @param string $itemKey
     * @param mixed $default
     * @return mixed
     */
    public static function get($itemKey, $default = NULL) {
        
        return self::getInstance()->getValue($itemKey, $default);
    }

    /**
     * 取得配置项的值，并且作为模板替换处理
     *
     * @param  string $itemKey
     * @param  mixed  $templateData  模板数据
     * @return string
     */
    /**
    public static function getTemplate($itemKey, $templateData) {
        
        $data = self::getInstance()->getValue($itemKey, '');
        
        $replaceName = array();
        foreach ($templateData as $key => $value) {
            $replaceName[] = '{' . $key . '}';
        }

        return str_replace($replaceName, $templateData, $data);
    }
    */
    
    /**
     * 取得配置的实例
     *
     * @return RConfig
     */
    public static function getInstance() {

        if (!(self::$_instance instanceof self)) {
            $className = __CLASS__;
            self::$_instance = new $className();
        }

        return self::$_instance;
    }
    
    /**
     * constructor
     *
     */
    public function __construct() {

        $this->ci = & get_instance();
//        $this->redis = new RRedis();
//        $this->redis->setNameSpace('common');
    }

    public function getValue($key,$default = NULL){
        
        $data = $this->ci->config->item($key);
        
            if($data === false){
            if(!isset($this->ci->set)){
                $this->ci->load->model('Set_model','set');
            }
            $this->ci->set->fields('value');
            $fdata = $this->ci->set->getFieldByWhere('cvalue','ckey="'.$key.'"');
            if (!$fdata) {
                return $default;
            }
            $data = json_decode($fdata['value'], true);
        }
         return $data;
        
    }
    /**
     * 取得配置数据
     * @param string $itemKey
     * @param mixed $default
     * @return mixed
     */
    /**
    public function getValue($itemKey, $default = NULL) {
        
        $data = $this->redis->hget($itemKey, $default);
        
        if (false === $data) {//如果没有数据项则从DB文件中读取
            if(!isset($this->ci->conf)){
                $this->ci->load->model('conf_model','conf');
            }
            $this->ci->conf->fields('config_value');
            $fdata = $this->ci->conf->find($itemKey);
            if (!$fdata) {
                return $default;
            }
            
            $data = json_decode($fdata['config_value'], true);
            $this->redis->hset(self::REDIS_KEY, $itemKey, $fdata['config_value']);
        }
        
        return $data;
    }
    */
    /**
     * 增加配置项
     * @param string $title
     * @param string $itemKey
     * @param mixed $itemValue
     * @param string $remark
     * @return boolean
     */
    /**
    public function add($title, $itemKey, $itemValue = NULL, $remark = NULL, $tag = NULL) {
        
        if (empty($title) || empty($itemKey)) {//必须指定key和名称
            return false;
        }
        
        if ($this->ci->conf->isExists($itemKey)) {//key存在
            return false;
        }
        
        $status = $this->ci->conf->setAttrs(array('config_title' => $title, 'config_key' => $itemKey, 'config_value' => json_encode($itemValue), 'config_remark' => $remark, 'tag' => $tag))
                                  ->setPkValue($itemKey)->save();
        
        if ($status) {
            $this->redis->hset(self::REDIS_KEY, $itemKey, $itemValue);
        } else {
            return false;
        }
        
        return true;
    }
    */
    /**
     * 设置配置值
     * @param string $itemKey
     * @param mixed $itemValue
     * @param string $title
     * @param string $remark
     * @return boolean
     */
    /**
    public function set($itemKey, $itemValue = NULL, $title = NULL, $remark = NULL, $tag = NULL) {

        if (!$this->ci->conf->isExists($itemKey)) {//key不存在
            return false;
        }
        
        $data = array();
        if ($title !== NULL) {
            $data['config_title'] = $title;
        }
        
        if ($remark !== NULL) {
            $data['config_remark'] = $remark;
        }
        
        if ($tag !== NULL) {
            $data['tag'] = $tag;
        }

        $data['config_value'] = json_encode($itemValue, JSON_UNESCAPED_UNICODE);
        $status = $this->ci->conf->setAttrs($data)->setPkValue($itemKey)->save(false);
        
        if ($status !== false) {
            $this->redis->hset(self::REDIS_KEY, $itemKey, $itemValue);
        } else {
            return false;
        }
        
        return true;
    }
    */
    /**
     * 删除配置项
     * @param string $itemKey
     * @return \RConfig
     */
    /**
    public function delete($itemKey) {
        
        $this->ci->conf->delete($itemKey);
        $this->redis->hdel(self::REDIS_KEY, $itemKey);
        return $this;
    }
     */
}