<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$_defaultConfig = array(
  'default_license' => 'by-nc-sa',
);

function themeConfig($form) {

    $logoText = new Typecho_Widget_Helper_Form_Element_Text('logoText', NULL, NULL, _t('Title文字'), _t('阅读页面左上角的按钮文字'));
    $form->addInput($logoText);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('Title 地址'), _t('当点击阅读页面左上角的按钮时跳转到的位置'));
    $form->addInput($logoUrl);

    $logoPic = new Typecho_Widget_Helper_Form_Element_Text('logoPic', NULL, NULL, _t('首页图片'), _t('自定义首页顶部的图片'));
    $form->addInput($logoPic);
    
    
    $favIcon = new Typecho_Widget_Helper_Form_Element_Text('favIcon', NULL, NULL, _t('Favicon'), _t('网站图标，显示在收藏夹和网页标题旁'));
    $form->addInput($favIcon);
    
    /**
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('showMenu', 
    array('ShowPosts' => _t('显示最新文章'),
    'ShowCategories' => _t('显示分类'),
    'ShowFriends' => _t('显示友情链接')),
    array('ShowPosts', 'ShowCategories', 'ShowFriends'), _t('导航'), _t('如果全都不选，则隐藏菜单'));
    
    $form->addInput($sidebarBlock->multiMode());
**/

		$showRocket = new Typecho_Widget_Helper_Form_Element_Checkbox('showRocket', 
    array('ShowRocket' => _t('显示返回到顶部小火箭')),
    array('ShowRocket'), _t('交互'));
    
    $form->addInput($showRocket->multiMode());

    $linkAbout = new Typecho_Widget_Helper_Form_Element_Text('linkAbout', NULL, NULL, _t('关于链接'), _t('每页底部的关于链接'));
    $form->addInput($linkAbout);


    $name = new Typecho_Widget_Helper_Form_Element_Select('default_license',array('no' => '不保留权利' , 'by' => '署名（BY）','by-nd' => '署名（BY）- 禁止演绎（ND）','by-nc' => '署名（BY）- 非商业性使用（NC）','by-sa' => '署名（BY）- 相同方式共享（SA）','by-nc-nd' => '署名（BY）- 非商业性使用（NC）- 禁止演绎（ND）','by-nc-sa' => '署名（BY）- 非商业性使用（NC）- 相同方式共享（SA）' , 'all' => '保留所有权利'),$defaultConfig->default_license,_t('默认证书'),_t('所有没有单独注明的文章均会自动采用该协议进行授权'));
    $form->addInput($name);

}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
