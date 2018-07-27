<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved.

defined('IN_MET') or exit('No permission');

define ('TEM_INSTALL_VER', '1.000');

class install {
	function dosql(){
		global $_M;		
		
$sql = array (
  0 => 'pos =\'0\',no_order=\'1\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'Banner下方电话设置\',tips=\'\'',
  1 => 'pos =\'1\',no_order=\'1\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'产品模块设置\',tips=\'\'',
  2 => 'pos =\'0\',no_order=\'2\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'phone_OK\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  3 => 'pos =\'1\',no_order=\'2\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist1\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目1\',tips=\'\'',
  4 => 'pos =\'0\',no_order=\'3\',type=\'2\',style=\'0\',selectd=\'\',name =\'phone\',value=\'8008800080\',defaultvalue=\'8008800080\',valueinfo =\'电话号码\',tips=\'\'',
  5 => 'pos =\'1\',no_order=\'3\',type=\'2\',style=\'3\',selectd=\'\',name =\'title1\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称1\',tips=\'\'',
  6 => 'pos =\'0\',no_order=\'4\',type=\'9\',style=\'0\',selectd=\'\',name =\'phone_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'电话背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  7 => 'pos =\'1\',no_order=\'4\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist2\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目2\',tips=\'\'',
  8 => 'pos =\'0\',no_order=\'5\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'九宫格设置\',tips=\'\'',
  9 => 'pos =\'1\',no_order=\'5\',type=\'2\',style=\'3\',selectd=\'\',name =\'title2\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称2\',tips=\'\'',
  10 => 'pos =\'0\',no_order=\'6\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column1_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  11 => 'pos =\'1\',no_order=\'6\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist3\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目3\',tips=\'\'',
  12 => 'pos =\'0\',no_order=\'7\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column1\',value=\'41-cm\',defaultvalue=\'41-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  13 => 'pos =\'1\',no_order=\'7\',type=\'2\',style=\'3\',selectd=\'\',name =\'title3\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称3\',tips=\'\'',
  14 => 'pos =\'0\',no_order=\'8\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column1_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  15 => 'pos =\'1\',no_order=\'8\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist4\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目4\',tips=\'\'',
  16 => 'pos =\'0\',no_order=\'9\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column1_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  17 => 'pos =\'1\',no_order=\'9\',type=\'2\',style=\'3\',selectd=\'\',name =\'title4\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称4\',tips=\'\'',
  18 => 'pos =\'0\',no_order=\'10\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column2_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  19 => 'pos =\'1\',no_order=\'10\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist5\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目5\',tips=\'\'',
  20 => 'pos =\'0\',no_order=\'11\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column2\',value=\'40-cm\',defaultvalue=\'40-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  21 => 'pos =\'1\',no_order=\'11\',type=\'2\',style=\'3\',selectd=\'\',name =\'title5\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称5\',tips=\'\'',
  22 => 'pos =\'0\',no_order=\'12\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column2_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  23 => 'pos =\'1\',no_order=\'12\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist6\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目6\',tips=\'\'',
  24 => 'pos =\'0\',no_order=\'13\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column2_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  25 => 'pos =\'1\',no_order=\'13\',type=\'2\',style=\'3\',selectd=\'\',name =\'title6\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称6\',tips=\'\'',
  26 => 'pos =\'0\',no_order=\'14\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column3_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  27 => 'pos =\'1\',no_order=\'14\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist7\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目7\',tips=\'\'',
  28 => 'pos =\'0\',no_order=\'15\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column3\',value=\'39-cm\',defaultvalue=\'39-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  29 => 'pos =\'1\',no_order=\'15\',type=\'2\',style=\'3\',selectd=\'\',name =\'title7\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称7\',tips=\'\'',
  30 => 'pos =\'0\',no_order=\'16\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column3_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  31 => 'pos =\'1\',no_order=\'16\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist8\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目8\',tips=\'\'',
  32 => 'pos =\'0\',no_order=\'17\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column3_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  33 => 'pos =\'1\',no_order=\'17\',type=\'2\',style=\'3\',selectd=\'\',name =\'title8\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称8\',tips=\'\'',
  34 => 'pos =\'0\',no_order=\'18\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column4_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  35 => 'pos =\'1\',no_order=\'18\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist9\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目9\',tips=\'\'',
  36 => 'pos =\'0\',no_order=\'19\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column4\',value=\'38-cm\',defaultvalue=\'38-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  37 => 'pos =\'1\',no_order=\'19\',type=\'2\',style=\'3\',selectd=\'\',name =\'title9\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称9\',tips=\'\'',
  38 => 'pos =\'0\',no_order=\'20\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column4_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  39 => 'pos =\'1\',no_order=\'20\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist10\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目10\',tips=\'\'',
  40 => 'pos =\'0\',no_order=\'21\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column4_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  41 => 'pos =\'1\',no_order=\'21\',type=\'2\',style=\'3\',selectd=\'\',name =\'title10\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称10\',tips=\'\'',
  42 => 'pos =\'0\',no_order=\'22\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column5_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  43 => 'pos =\'1\',no_order=\'22\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist11\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目11\',tips=\'\'',
  44 => 'pos =\'0\',no_order=\'23\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column5\',value=\'37-cm\',defaultvalue=\'37-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  45 => 'pos =\'1\',no_order=\'23\',type=\'2\',style=\'3\',selectd=\'\',name =\'title11\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称11\',tips=\'\'',
  46 => 'pos =\'0\',no_order=\'24\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column5_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  47 => 'pos =\'1\',no_order=\'24\',type=\'6\',style=\'3\',selectd=\'\',name =\'godlist12\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目12\',tips=\'\'',
  48 => 'pos =\'0\',no_order=\'25\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column5_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  49 => 'pos =\'1\',no_order=\'25\',type=\'2\',style=\'3\',selectd=\'\',name =\'title12\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目名称12\',tips=\'\'',
  50 => 'pos =\'0\',no_order=\'26\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column6_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  51 => 'pos =\'1\',no_order=\'26\',type=\'6\',style=\'3\',selectd=\'\',name =\'m_canyin\',value=\'\',defaultvalue=\'\',valueinfo =\'手机_餐饮\',tips=\'餐饮栏目\'',
  52 => 'pos =\'0\',no_order=\'27\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column6\',value=\'36-cm\',defaultvalue=\'36-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  53 => 'pos =\'1\',no_order=\'27\',type=\'2\',style=\'3\',selectd=\'\',name =\'m_titc\',value=\'咖啡餐饮设计\',defaultvalue=\'咖啡餐饮设计\',valueinfo =\'栏目名称\',tips=\'\'',
  54 => 'pos =\'0\',no_order=\'28\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column6_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  55 => 'pos =\'1\',no_order=\'28\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'海岸动态模块设计\',tips=\'\'',
  56 => 'pos =\'0\',no_order=\'29\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column6_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  57 => 'pos =\'1\',no_order=\'29\',type=\'4\',style=\'3\',selectd=\'\',name =\'m_sj\',value=\'1\',defaultvalue=\'1\',valueinfo =\'测试开关\',tips=\'\'',
  58 => 'pos =\'0\',no_order=\'30\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column7_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  59 => 'pos =\'0\',no_order=\'31\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column7\',value=\'33-cm\',defaultvalue=\'33-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  60 => 'pos =\'0\',no_order=\'32\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column7_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  61 => 'pos =\'0\',no_order=\'33\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column7_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  62 => 'pos =\'0\',no_order=\'34\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column8_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  63 => 'pos =\'0\',no_order=\'35\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column8\',value=\'32-cm\',defaultvalue=\'32-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  64 => 'pos =\'0\',no_order=\'36\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column8_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  65 => 'pos =\'0\',no_order=\'37\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column8_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  66 => 'pos =\'0\',no_order=\'38\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'Column9_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  67 => 'pos =\'0\',no_order=\'39\',type=\'6\',style=\'4\',selectd=\'\',name =\'Column9\',value=\'3-cm\',defaultvalue=\'3-cm\',valueinfo =\'链接地址\',tips=\'标题将显示您选择的栏目标题\'',
  68 => 'pos =\'0\',no_order=\'40\',type=\'2\',style=\'0\',selectd=\'\',name =\'Column9_title\',value=\'\',defaultvalue=\'\',valueinfo =\'自定义标题\',tips=\'如果为空则显示上面选择的栏目名称\'',
  69 => 'pos =\'0\',no_order=\'41\',type=\'9\',style=\'0\',selectd=\'\',name =\'Column9_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景\',tips=\'输入十六进制颜色值，图标文字都为白色，建议背景不为白\'',
  70 => 'pos =\'0\',no_order=\'42\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'首页全局设置\',tips=\'\'',
  71 => 'pos =\'0\',no_order=\'43\',type=\'9\',style=\'0\',selectd=\'\',name =\'body_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'背景颜色\',tips=\'九宫格后面背景颜色，输入十六进制颜色值，不设置则默认为白色\'',
  72 => 'pos =\'0\',no_order=\'44\',type=\'4\',style=\'0\',selectd=\'隐藏$T$1$M$显示$T$0\',name =\'headnav_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'首页顶部开关\',tips=\'\'',
  73 => 'pos =\'0\',no_order=\'45\',type=\'6\',style=\'0\',selectd=\'横向可内滚$T$1$M$普通导航$T$2$M$下拉式导航$T$3\',name =\'columnshow\',value=\'3\',defaultvalue=\'3\',valueinfo =\'导航展示方式\',tips=\'\'',
  74 => 'pos =\'0\',no_order=\'46\',type=\'6\',style=\'0\',selectd=\'1$T$1$M$2$T$2$M$3$T$3$M$4$T$4\',name =\'columnshowsize\',value=\'4\',defaultvalue=\'4\',valueinfo =\'每行数量\',tips=\'用于平均宽度，作用于导航展示方式中的“横向可内滚”和“普通导航”\'',
  75 => 'pos =\'0\',no_order=\'47\',type=\'9\',style=\'0\',selectd=\'\',name =\'footer_textbg\',value=\'\',defaultvalue=\'\',valueinfo =\'底部文字颜色\',tips=\'输入十六进制颜色值，不设置则默认为深灰色\'',
  76 => 'pos =\'0\',no_order=\'48\',type=\'9\',style=\'0\',selectd=\'\',name =\'footer_bg\',value=\'\',defaultvalue=\'\',valueinfo =\'底部背景颜色\',tips=\'输入十六进制颜色值，不设置则默认为灰色\'',
  77 => 'pos =\'0\',no_order=\'49\',type=\'4\',style=\'0\',selectd=\'显示$T$1$M$隐藏$T$0\',name =\'wap_powered\',value=\'1\',defaultvalue=\'1\',valueinfo =\'底部版权信息\',tips=\'\'',
  78 => 'pos =\'0\',no_order=\'50\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'产品模块设置\',tips=\'\'',
  79 => 'pos =\'0\',no_order=\'51\',type=\'6\',style=\'0\',selectd=\'展示方式一$T$1$M$展示方式二$T$2\',name =\'prolitype\',value=\'2\',defaultvalue=\'2\',valueinfo =\'展示方式\',tips=\'展示方式一为左图右标题加描述，展示方式二为每行两个图片\'',
  80 => 'pos =\'0\',no_order=\'52\',type=\'2\',style=\'0\',selectd=\'\',name =\'descsubstr\',value=\'20\',defaultvalue=\'20\',valueinfo =\'描述文字长度\',tips=\'图文列表中的描述文字长度\'',
  81 => 'pos =\'0\',no_order=\'53\',type=\'2\',style=\'0\',selectd=\'\',name =\'promaximgY\',value=\'300\',defaultvalue=\'300\',valueinfo =\'图片高度\',tips=\'内容页展示图片高度\'',
  82 => 'pos =\'0\',no_order=\'54\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'图片模块设置\',tips=\'\'',
  83 => 'pos =\'0\',no_order=\'55\',type=\'6\',style=\'0\',selectd=\'展示方式一$T$1$M$展示方式二$T$2\',name =\'imglitype\',value=\'2\',defaultvalue=\'2\',valueinfo =\'展示方式\',tips=\'展示方式一为左图右标题加描述，展示方式二为每行两个图片\'',
  84 => 'pos =\'0\',no_order=\'56\',type=\'2\',style=\'0\',selectd=\'\',name =\'imgmaximgY\',value=\'300\',defaultvalue=\'300\',valueinfo =\'图片高度\',tips=\'内容页展示图片高度\'',
  85 => 'pos =\'0\',no_order=\'57\',type=\'1\',style=\'0\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'字体大小设置\',tips=\'\'',
  86 => 'pos =\'0\',no_order=\'58\',type=\'6\',style=\'0\',selectd=\'小$T$14$M$中$T$15$M$大$T$16\',name =\'wapfontsize\',value=\'14\',defaultvalue=\'14\',valueinfo =\'字体大小\',tips=\'控制页面内容展示部分的文字大小\'',
  87 => 'pos =\'0\',no_order=\'59\',type=\'6\',style=\'3\',selectd=\'\',name =\'c_canyin\',value=\'16\',defaultvalue=\'16\',valueinfo =\'餐饮——手机\',tips=\'\'',
  88 => 'pos =\'0\',no_order=\'60\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'咖啡馆内容\',tips=\'\'',
  89 => 'pos =\'0\',no_order=\'61\',type=\'6\',style=\'3\',selectd=\'\',name =\'productsfivec\',value=\'\',defaultvalue=\'\',valueinfo =\'咖啡馆栏目\',tips=\'\'',
  90 => 'pos =\'0\',no_order=\'62\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'服务流程\',tips=\'\'',
  91 => 'pos =\'0\',no_order=\'63\',type=\'7\',style=\'3\',selectd=\'\',name =\'productstwot\',value=\'\',defaultvalue=\'\',valueinfo =\'标题图\',tips=\'\'',
  92 => 'pos =\'0\',no_order=\'64\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo1t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题1\',tips=\'\'',
  93 => 'pos =\'0\',no_order=\'65\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo1d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述1\',tips=\'\'',
  94 => 'pos =\'0\',no_order=\'66\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo2t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题2\',tips=\'\'',
  95 => 'pos =\'0\',no_order=\'67\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo2d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述2\',tips=\'\'',
  96 => 'pos =\'0\',no_order=\'68\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo3t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题3\',tips=\'\'',
  97 => 'pos =\'0\',no_order=\'69\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo3d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述3\',tips=\'\'',
  98 => 'pos =\'0\',no_order=\'70\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo4t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题4\',tips=\'\'',
  99 => 'pos =\'0\',no_order=\'71\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo4d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述4\',tips=\'\'',
  100 => 'pos =\'0\',no_order=\'72\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo5t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题5\',tips=\'\'',
  101 => 'pos =\'0\',no_order=\'73\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo5d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述5\',tips=\'\'',
  102 => 'pos =\'0\',no_order=\'74\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo6t\',value=\'\',defaultvalue=\'\',valueinfo =\'标题6\',tips=\'\'',
  103 => 'pos =\'0\',no_order=\'75\',type=\'2\',style=\'3\',selectd=\'\',name =\'productstwo6d\',value=\'\',defaultvalue=\'\',valueinfo =\'描述6\',tips=\'\'',
  104 => 'pos =\'0\',no_order=\'76\',type=\'3\',style=\'3\',selectd=\'\',name =\'prod1\',value=\'\',defaultvalue=\'\',valueinfo =\'底部文字\',tips=\'\'',
  105 => 'pos =\'0\',no_order=\'77\',type=\'2\',style=\'3\',selectd=\'\',name =\'prod2\',value=\'\',defaultvalue=\'\',valueinfo =\'按钮文字\',tips=\'\'',
  106 => 'pos =\'0\',no_order=\'78\',type=\'2\',style=\'3\',selectd=\'\',name =\'prod3\',value=\'\',defaultvalue=\'\',valueinfo =\'按钮链接\',tips=\'\'',
  107 => 'pos =\'0\',no_order=\'79\',type=\'7\',style=\'3\',selectd=\'\',name =\'top1_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题1图片\',tips=\'\'',
  108 => 'pos =\'0\',no_order=\'80\',type=\'7\',style=\'3\',selectd=\'\',name =\'top2_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题2图片\',tips=\'\'',
  109 => 'pos =\'0\',no_order=\'81\',type=\'7\',style=\'3\',selectd=\'\',name =\'top3_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题3图片\',tips=\'\'',
  110 => 'pos =\'0\',no_order=\'82\',type=\'7\',style=\'3\',selectd=\'\',name =\'top4_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题4图片\',tips=\'\'',
  111 => 'pos =\'0\',no_order=\'83\',type=\'7\',style=\'3\',selectd=\'\',name =\'top5_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题5图片\',tips=\'\'',
  112 => 'pos =\'0\',no_order=\'84\',type=\'7\',style=\'3\',selectd=\'\',name =\'top6_pic\',value=\'\',defaultvalue=\'\',valueinfo =\'标题6图片\',tips=\'\'',
  113 => 'pos =\'0\',no_order=\'85\',type=\'6\',style=\'3\',selectd=\'\',name =\'lan\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目选择\',tips=\'\'',
  114 => 'pos =\'0\',no_order=\'86\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'首页文章栏目\',tips=\'\'',
  115 => 'pos =\'0\',no_order=\'87\',type=\'6\',style=\'3\',selectd=\'\',name =\'home_news_id\',value=\'\',defaultvalue=\'\',valueinfo =\'1文章栏目id\',tips=\'默认调用设计动态栏目图文内容列表\'',
  116 => 'pos =\'0\',no_order=\'88\',type=\'6\',style=\'3\',selectd=\'\',name =\'home_design_id\',value=\'\',defaultvalue=\'\',valueinfo =\'2文章栏目id\',tips=\'默认调用设计动态栏目图文内容列表\'',
  117 => 'pos =\'0\',no_order=\'89\',type=\'6\',style=\'3\',selectd=\'\',name =\'home_haianNews_id\',value=\'\',defaultvalue=\'\',valueinfo =\'3文章栏目id\',tips=\'默认调用设计动态栏目图文内容列表\'',
  118 => 'pos =\'0\',no_order=\'90\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'咖啡馆栏目\',tips=\'\'',
  119 => 'pos =\'0\',no_order=\'91\',type=\'6\',style=\'3\',selectd=\'\',name =\'cofe\',value=\'\',defaultvalue=\'\',valueinfo =\'文章模块\',tips=\'获取文章列表\'',
  120 => 'pos =\'0\',no_order=\'92\',type=\'2\',style=\'3\',selectd=\'\',name =\'cofe_num\',value=\'8\',defaultvalue=\'8\',valueinfo =\'文章数量\',tips=\'显示文章数量\'',
  121 => 'pos =\'0\',no_order=\'93\',type=\'2\',style=\'3\',selectd=\'\',name =\'cofe_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'模块控制\',tips=\'\'',
  122 => 'pos =\'0\',no_order=\'94\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'栏目跳转\',tips=\'\'',
  123 => 'pos =\'0\',no_order=\'95\',type=\'6\',style=\'3\',selectd=\'\',name =\'shudian\',value=\'\',defaultvalue=\'\',valueinfo =\'书店栏目\',tips=\'书店\'',
  124 => 'pos =\'0\',no_order=\'96\',type=\'6\',style=\'3\',selectd=\'\',name =\'jiudian\',value=\'\',defaultvalue=\'\',valueinfo =\'酒店栏目\',tips=\'酒店\'',
  125 => 'pos =\'0\',no_order=\'97\',type=\'6\',style=\'3\',selectd=\'\',name =\'shang\',value=\'\',defaultvalue=\'\',valueinfo =\'商业栏目\',tips=\'\'',
  126 => 'pos =\'0\',no_order=\'98\',type=\'6\',style=\'3\',selectd=\'\',name =\'jizhuang\',value=\'\',defaultvalue=\'\',valueinfo =\'集装箱栏目\',tips=\'\'',
  127 => 'pos =\'0\',no_order=\'99\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'开关\',tips=\'\'',
  128 => 'pos =\'0\',no_order=\'100\',type=\'2\',style=\'3\',selectd=\'\',name =\'shang_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  129 => 'pos =\'0\',no_order=\'101\',type=\'2\',style=\'3\',selectd=\'\',name =\'shang_num\',value=\'4\',defaultvalue=\'4\',valueinfo =\'文章\',tips=\'\'',
  130 => 'pos =\'0\',no_order=\'102\',type=\'2\',style=\'3\',selectd=\'\',name =\'gui_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'\'',
  131 => 'pos =\'0\',no_order=\'103\',type=\'2\',style=\'3\',selectd=\'\',name =\'gui_num\',value=\'4\',defaultvalue=\'4\',valueinfo =\'文章\',tips=\'\'',
  132 => 'pos =\'0\',no_order=\'104\',type=\'4\',style=\'3\',selectd=\'开启$T$1$M$$M$关闭$T$0\',name =\'jizhuang_ok\',value=\'1\',defaultvalue=\'1\',valueinfo =\'开关\',tips=\'集装箱\'',
  133 => 'pos =\'0\',no_order=\'105\',type=\'1\',style=\'3\',selectd=\'\',name =\'\',value=\'\',defaultvalue=\'\',valueinfo =\'公用代码\',tips=\'\'',
  134 => 'pos =\'0\',no_order=\'106\',type=\'3\',style=\'3\',selectd=\'\',name =\'head_one\',value=\'\',defaultvalue=\'\',valueinfo =\'头部\',tips=\'\'',
);
$no='mobile_001';
$devices='1';
		$re['sql'] = $sql;
		$re['no'] = $no;
		$re['devices'] = $devices;
		return $re;
	}
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>