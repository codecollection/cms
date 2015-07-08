<?php 

/**
 * 图像处理配置
 */


$config['image'] = array(
    'image_library' => 'gd2',
    
    //缩略图
    'create_thumb' => TRUE,
    'maintain_rato' => true,
    'width' => 124,
    'height' => 124,
   
    //水印
//    'wm_text' => "Copyright Crane",
//    'wm_type' => 'text',
//    //'wm_font_path' => '',
//    'wm_font_size' => '12',
//    'wm_font_color' => 'ffffff',
//    'wm_vrt_alignment' => 'bottom',
//    'wm_hor_alignment' => 'right',
//    'wm_padding' => '10',
);
