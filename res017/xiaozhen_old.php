﻿<!--<?php 
$methtml_head  = metlabel_html5();//基于Html5
$met_foot_txt  = metlabel_foot(); 
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}css/xiaozhen.css"/> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6.css"/>
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 --> 
<script type="text/javascript" src="{$img_url}js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="{$img_url}js/xiaozhen.js"></script> 
<script src="{$img_url}src/js/jquery.swipebox.js"></script><!-- 点击幻灯片 -->  
<script type="text/javascript">
  /* $(window).scroll( function() {
      console.log($(this).scrollTop()); 
     });
  */
</script>
 <div class="faer_top" >
            <div class="fixednav">
                 <a href="" title="{$met_webname}">  
				 
            </div>
        </div>
<div style="display:none">
{$met_foot_txt}
</div>
 <!-- 提交需求列表弹框 -->
        <div class="boxbig">
              <div class="box1">
                  <a href="javascript:;" onclick="jQuery('.boxbig').hide()" class="close">×</a>
                  <div class="iptbox">
                          <em>10秒提交设计需求</em>
                          <span>海岸为您推荐最合适的设计师</span>
<!--
EOT;
require template('feed/feedback5'); 
$metfeedback1=metlabel_feedback5(166);
echo <<<EOT
-->
               {$metfeedback1}
                        <p>*我们将严格保护您的隐私，请放心填写</p >
                    </div>
              </div>
        </div>

<!-- xz_start -->
<div id="moquu_wxin" class="moquu_wxin"><a href="javascript:void(0)"><div class="moquu_wxinh"></div></a></div>
<div id="moquu_wshare" class="moquu_wshare"><a href="javascript:void(0)"><div class="moquu_wshareh"></div></a></div>

<!-- img_top -->        
 
  <header>        
    <div class="headercenter">            
      <img src="{$img_url}xiaozhen/bannertop.png" alt="特色小镇规划" >            
        <div class="categorybox">                
          <ul class="category">                    
            <li><i></i>旅游小镇规划</li>                    
            <li><i></i>文旅小镇规划</li>                    
            <li><i></i>生态小镇规划</li>                    
            <li><i></i>产业小镇规划</li>                    
            <li><i></i>科技小镇规划</li>                    
            <li><i></i>历史街区规划</li>                
          </ul>            
        </div>            
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="headerbtn">立即预约</button></a>            
        <span class="headerspan">特色小镇"特"在哪里</span>        
    </div>    
  </header>
  <div class="swot">
    <div class="p1200">
      <div class="swotbor lfswot">
        <h3>特在“产业”</h3>
        <p>特色小镇产业的选择需要立足当地资源禀赋、区位环境以及产业发展历史等基础条件，向新兴产业、传统产业升级、历史经典产业回归三个方向发展。</p>
      </div>
      <div class="swotbor rgtswot">
        <h3>特在“功能”</h3>
        <p>以产业为依托的“生产”或“服务”是特色小镇的核心功能，特色小镇不能只以旅游为核心功能，而旅游的“搬运”功能，可以激发特色小镇内在系统与外部系统的交换融合，也是不可或缺的功能。</p>
      </div>
      <div class="swotbor lfbswot">
        <h3>特在“形态”</h3>
        <p>在于其必须形成独特的风格、风貌和风情。小镇的风格：是小镇的性格和个性。小镇的风情以历史文化、生活方式、风俗习惯等软环境为基础，结合演艺、社区活动、人际交往，成为独特的文化价值。小镇的风貌：是其独特的建筑与外观，都要与文化传承接合，与生态及自然环境一致。</p>
      </div>
      <div class="swotbor rgtbswot">
        <h3>特在“机制”</h3>
        <p>特色小镇的建设不仅是政府的行政行为，而是以政府为主导、市场为主体 、社会共同参与的主办运营商开发模式。政府把控整体方向提供公共服务；企业（小镇开发运营商）通过资源整合以及市场化的运作管理方式， 成为建设中的主角；而与其息息相关的当地居民，参与与社会监督的责任。</p>
      </div>
      <div class="censwot">
      </div>
      <div class="censwotinn">
        <div class="recteng recteng01">s</div>
        <div class="recteng recteng02">w</div>
        <div class="recteng recteng03">o</div>
        <div class="recteng recteng04">t</div>
      </div>
    </div>
  </div>
  <div class="principle">
    <div class="p1200">
      <h2 class="teh2">特色小镇的开发原则</h2>
      <div class="pricinn">
        <div class="pricilf prici001">
          <div class="fanshape fanshape1"><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/markit001.png" ></div>
          <h3>政府引导</h3>
          <hr>
          <p>政府主要通过规划、基础设施建设、创新制度供给等来发挥引导和服务功能，重在搭建平台、提供服务</p>
        </div>
        <div class="pricirgt prici002">
          <div class="fanshape fanshape2"><img  alt="特色小镇旅游规划" src="{$img_url}xiaozhen/markit002.png" ></div>
          <h3>企业主体</h3>
          <hr>
          <p>以企业或者企业联盟为主体，进行小镇的总体开发和投资，土地开发、物业建设、产业经营等</p>
        </div>
        <div class="pricilf prici003">
          <div class="fanshape fanshape3"><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/markit003.png" ></div>
          <h3>市场运作</h3>
          <hr>
          <p>尊重市场规律，充分发挥市场主体作用。以产业发展为重点，依据产业发展确定建设规模，防止盲目造镇</p>
        </div>
        <div class="pricirgt prici004">
          <div class="fanshape fanshape4"><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/markit004.png"></div>
          <h3>动态考核</h3>
          <hr>
          <p>建立动态考核体系，在规划空间、功能内涵、投资建设、扶持政策等严格考核，有奖有罚扶持政策灵活有力</p>
        </div>
      </div>
    </div>
  </div>
  <div class="intension">
    <div class="p1146">
      <h2 class="teh2">特色小镇的内涵特征</h2>
      <div class="intenlf">
        <div class="arrowtp"></div>
        <div class="arrowrgt"></div>
        <div class="arrowbt"></div>
        <div class="arrowlf"></div>
        <div class="tophr"></div>
        <div class="lefthr"></div>
        <div class="intenbor intenbor1">
          <h4 class="zhh4in">产业</h4>
          <h4 class="engh4in">industry</h4>
        </div>
        <div class="intenbor intenbor2">
          <h4 class="zhh4in">功能</h4>
          <h4 class="engh4in">function</h4>
        </div>
        <div class="intenbor intenbor3">
          <h4 class="zhh4in">形态</h4>
          <h4 class="engh4in">Form</h4>
        </div>
        <div class="intenbor intenbor4">
          <h4 class="zhh4in">机制</h4>
          <h4 class="engh4in">mechanism</h4>
        </div>
      </div>
      <div class="intenrgt">
        <ul class="ulinten">
          <li> 
            <h3 class="intenh3">产业“特而强”</h3>
            <p class="intenp">产业创新驱动 <i><img alt="特色小镇乡村规划"  src="{$img_url}xiaozhen/mindayu.png"></i> 产业链接发展 <i><img src="{$img_url}xiaozhen/mindayu.png"></i> 绿色低碳产业 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> <br/>
            产业集群化 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> 共享产业生态圈
            </p>
          </li>
          <li> 
            <h3 class="intenh3">功能“聚而合”</h3>
            <p class="intenp">创新产业功能 <i><img  alt="特色小镇乡村规划"  src="{$img_url}xiaozhen/mindayu.png"></i> 产业结构完整 <i><img src="{$img_url}xiaozhen/mindayu.png"></i> 产业形态复合化 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> <br/>
            生态安全格局 <i><img alt="特色小镇旅游规划"  src="{$img_url}xiaozhen/mindayu.png"></i> 特色业态互为配套
            </p>
          </li>
          <li> 
            <h3 class="intenh3">形态“精而美”</h3>
            <p class="intenp">营造特色景观 <i><img alt="特色小镇乡村规划" src="{$img_url}xiaozhen/mindayu.png"></i> 城镇相貌协调 <i><img src="{$img_url}xiaozhen/mindayu.png"></i> 建设美丽城镇 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> <br/>
            优化投资环境 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> 城乡差距减小
            </p>
          </li>
          <li> 
            <h3 class="intenh3">机制“新而活”</h3>
            <p class="intenp">改革机制体制 <i><img src="{$img_url}xiaozhen/mindayu.png" alt="特色小镇乡村规划" ></i> 创新促进要素 <i><img src="{$img_url}xiaozhen/mindayu.png"></i> 吸纳不同主体 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> <br/>
            收益共享体制 <i><img alt="特色小镇旅游规划" src="{$img_url}xiaozhen/mindayu.png"></i> 流动环境治理制度
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="developemode">
    <div class="p1200">
      <h2 class="teh2">特色小镇的发展模式</h2>
      <div class="page000 page001">
        <span>文化引领</span>
        <h5>为小镇注入灵魂</h5>
        <ul>
          <li>挖掘传统文化</li>
          <li>发扬民俗文化</li>
          <li>植入现代文化</li>
          <li>导入新兴文化</li>
        </ul>
        <img alt="特色小镇规划" src="{$img_url}xiaozhen/001.png">
      </div>
      <div class="page000 page002">
        <span>产业突破</span>
        <h5>为小镇筑实根基</h5>
        <ul>
          <li>传统产业升级</li>
          <li>新兴产业导入</li>
          <li>创业平台提供</li>
          <li>创新环境打造</li>
        </ul>
        <img alt="特色小镇规划"  src="{$img_url}xiaozhen/002.png">
      </div>
      <div class="page000 page003">
        <span>旅游打造</span>
        <h5>为小镇导入消费</h5>
        <ul>
          <li>文化旅游业态</li>
          <li>工业旅游业态</li>
          <li>休闲度假业态</li>
          <li>旅游商业业态</li>
        </ul>
        <img alt="特色小镇规划" src="{$img_url}xiaozhen/003.png">
      </div>
      <div class="page000 page004">
        <span>生活提升</span>
        <h5>为小镇集成功能</h5>
        <ul>
          <li>完善基础设备</li>
          <li>营造品质社区</li>
          <li>健全城镇配套</li>
          <li>提升公共服务</li>
        </ul>
        <img alt="特色小镇规划" src="{$img_url}xiaozhen/004.png">
      </div>
    </div>
  </div>
  <div class="yuanshan">
  <div class="yuanshantop">
    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>我要发布需求</button></a>
    <p>打造具有明确产业定位、文化内涵、旅游特征和一定社区功能的综合开发体系</p >
  </div>
    <div class="p1200">
      <div class="typelog">
        <img  alt="特色小镇规划" src="{$img_url}xiaozhen/typebg.jpg">
        <img class="typelogo" alt="特色小镇规划" src="{$img_url}xiaozhen/typelogo.png">
        <h3>特色小镇的类型</h3>
        <p>特色小镇是具有明确产业定位与文化内涵，生产、生活、旅游、居住等功能叠加融合，呈现产业特色化、功能集成化、环境生态化、机制灵活化，具有明确空间边界的功能载体平台。</p>
        <button><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=113" target="_blank">
  更多案列</a></button>
      </div>
      <div class="typety">
        <div class="typetylist">
          <img alt="特色小镇规划" src="{$img_url}xiaozhen/typety001.png">
          <p>历史文化型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造历史文化型小镇，一是要小镇历史脉络清晰可循；二是小镇文化内涵重点突出、特色鲜明；三是要小镇的规划建设延续历史文脉，尊重历史与传统。</p>
          </div>
        </div>
        <div class="typetylist">
          <img alt="特色小镇规划" src="{$img_url}xiaozhen/typety002.png">
          <p>城郊休闲型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造城郊休闲型小镇，一是要小镇与城市距离较近，位于都市旅游圈之内；二是小镇要根据城市人群的需求进行针对性的开发；三是小镇的基础设施建设与城市差距较小。</p>
          </div>
        </div>
        <div class="typetylist">
          <img alt="特色小镇规划" src="{$img_url}xiaozhen/typety003.png">
          <p>新兴产业型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造新兴产业型小镇，一是位于经济发展程度较高的区域；二是以科技智能等新兴产业为主；三是小镇有一定的新兴产业基础的积累，产业园区集聚效应突出。</p>
          </div>
        </div>
        <div class="typetylist">
          <img alt="特色小镇规划" src="{$img_url}xiaozhen/typety004.png">
          <p>特色产业型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造特色产业型小镇，一是要小镇产业特点以新奇特等产业为主；二是小镇规模不宜过大，应是小而美、小而精、小而特。</p>
          </div>
        </div>
        <div class="typetylist">
          <img alt="特色小镇规划"  src="{$img_url}xiaozhen/typety005.png">
          <p>交通区位型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造交通区位型小镇，一是交通区位条件良好，属于重要的交通枢纽或者中转地区；二是产业建设应该能够联动周边城市资源，成为该区域的网络节点，实现资源合理有效的利用。</p>
          </div>
        </div>
        <div class="typetylist">
          <img alt="特色小镇规划" src="{$img_url}xiaozhen/typety006.png">
          <p>资源禀赋型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造资源禀赋型小镇，一是要小镇资源优势突出，处于领先地位；二是小镇市场前景广阔，发展潜力巨大；三是对小镇的优势资源深入挖掘，充分体现小镇资源特色。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}xiaozhen/typety007.png" alt="特色小镇规划" >
          <p>生态旅游型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造生态旅游型小镇，一是要小镇生态环境良好，宜居宜游;二是产业特点以绿色低碳为主，可持续性较强;三是小镇以生态观光、康体休闲为主。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}xiaozhen/typety008.png" alt="特色小镇规划" >
          <p>高端制造型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造高端制造型小镇，一是要小镇产业以高精尖为主，并始终遵循产城融合理念；二是注重注重高级人才资源的引进，为小镇持续发展增加动力；三是突出小镇的智能化建设。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}xiaozhen/typety009.png" alt="特色小镇规划" >
          <p>金融创新型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造金融创新型小镇，一是经济发展迅速的核心区域，具备得天独厚的优势；二是有一定的财富积累，投融资空间巨大；三是科技金融是此类小镇发展的强大动力和重要支撑。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}xiaozhen/typety010.png" alt="特色小镇规划" >
          <p>时尚创意型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>打造时尚创意型小镇，一是小镇以时尚产业为主导，并与国际接轨；二是小镇应该以文化为深度，实现产业的融合发展；三是小镇应该打造一个时尚产业的平台。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="devframework">
    <div class="p1200">
      <h2 class="teh2">特色小镇的开发架构</h2>
      <div class="frame001">
        <hr>
        <div class="bigbig bigbig1">
          <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt1.png"></div>
            <div class="rgtbig">当地的特色产业，一般以新兴产业或传统<br/>的经典产业为主。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp1 clsplay">特色产业引擎</div>
          <div class="dotdot dot001"></div>
        
        <div class="bigbig bigbig2 cosplay">
          <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt2.png"></div>
            <div class="rgtbig">包括产业的研发、生产、制造等核心功能，是城市特色产业的集中体现。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp2">旅游吸引核</div>
          <div class="dotdot dot002"></div>
        <div class="bigbig bigbig3 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt3.png"></div>
            <div class="rgtbig">吸引外来消费的关键，多个旅游休闲项目，如观光景区、主题乐园、特色街区等。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp3">核心产业园区</div>
          <div class="dotdot dot003"></div>
        <div class="bigbig bigbig4 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt4.png"></div>
            <div class="rgtbig">聚集了各种休闲业态，主要功能是留住人流&nbsp;并扩大其消费。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp4">休闲聚集区</div>
          <div class="dotdot dot004"></div>
        <div class="bigbig bigbig5 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt5.png"></div>
            <div class="rgtbig">围绕特色产业及旅游产业，形成产业延伸的一系列项目，往往环绕中心区，形成辐射或组团分布。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp5">产业延伸环</div>
          <div class="dotdot dot005"></div>
        <div class="bigbig bigbig6 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt6.png"></div>
            <div class="rgtbig">包括原有城镇居民居住，农民城镇化居住，<br/>产业人口聚集居住，外来游客居住等。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp6">居住发展带</div>
          <div class="dotdot dot006"></div>
        <div class="bigbig bigbig7 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}xiaozhen/lfbigtt7.png"></div>
            <div class="rgtbig">服务于居民生活及旅游产业的金融、医疗、<br/>教育、商业等产城一体化的公共配套。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div  class="dotpp dotpp7">社区配套网</div>
          <div class="dotdot dot007"></div>
      </div>
    </div>
  </div>
  <div class="receiptor">
      <img class="receipimg" src="{$img_url}xiaozhen/yuanshan001.png" alt="特色小镇规划" >
    <div class="p1200">
      <h2 class="teh2">特色小镇的收益模式</h2>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip001.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec001.png" alt="特色小镇规划" >
        <h3>工程收益</h3>
        <p>建造收益<br/>是开发的前提</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip002.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec002.png" alt="特色小镇规划" >
        <h3>土地升值</h3>
        <p>区域开发是<br/>城镇开发的基础和核心</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip003.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec003.png" alt="特色小镇规划" >
        <h3>房产收益</h3>
        <p>房地产是产城<br/>一体化中必需的蛋糕</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip004.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec004.png" alt="特色小镇规划" >
        <h3>旅游收益</h3>
        <p>旅游产业<br/>带来现金流的产业</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip005.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec005.png" alt="特色小镇规划" >
        <h3>特色产业收益</h3>
        <p>必需发展成为<br/>现金流聚集的产业</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg1" src="{$img_url}xiaozhen/receip006.png" alt="特色小镇规划" >
        <img class="receipimg2" src="{$img_url}xiaozhen/rec006.png" alt="特色小镇规划" >
        <h3>资本收益</h3>
        <p><br/>资本退出的收益</p>
      </div>
    </div>
  </div>

<!-- cutting point -->
<div class="why001">
<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"> 
    <button>我有疑问</button></a>
    <p>归本主义设计风格缔造者，以九一律为设计指针，对每个项目进行原创设计</p >
  </div>
   <div class="addretown">
      <div class="townover town001">
        <span class="firtownspan">云</span><span class="sectownspan">南</span><span class="thirtownspan">隐逸水镇</span>
      <p>隐逸水镇位于云南省文山州丘北县，由北京海岸倾力打造。整个水镇是集水上乐园、民宿、餐饮、婚礼、野宿于一体的旅行圣地。小溪自上而下流淌，不经意间将安静区和喧闹区分割开来，玩耍与休息在这里互不干扰，如此甚好。纯净的空气、清澈的小溪、原生态的食物，游走于天地间，感受万物灵气，体验那如诗如画的景致，领略那绿色生态的意义，桃花源般的丘北县，桃花源般的隐逸水镇，桃花源般的世外生活。</p>
      <button>详情<img src="{$img_url}xiaozhen/doublegt.png" alt="特色小镇规划" ></button>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}xiaozhen/contcase1.png" alt="特色小镇规划" >
      </div>
      <div class="townover town002">
        <span class="firtownspan">青</span><span class="sectownspan">海</span><span class="thirtownspan">青绿元生态小镇</span>
      <p>青绿元生态小镇位于海拔2295米的青海西宁市，大李段路，规划面积200亩。依托塔尔寺、背靠青海湖的地理特点，形成了文化旅游交汇处，独特的地理位置，依山望水的清幽环境，犹如明珠般点缀在山水间。我们寻找释放压抑依旧的灵魂，感受自己与自然的关系，与陌生人大声招呼，分享路途有意思的事儿，此起彼伏的呼朋引伴，大声对怼，酣畅淋漓，方不辜负这片山林。</p>
      <button>详情<img src="{$img_url}xiaozhen/doublegt.png" alt="特色小镇规划" ></button>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}xiaozhen/contcase2.png" alt="特色小镇规划" >
      </div>
      <div class="townover town003">
        <span class="firtownspan">四</span><span class="sectownspan">川</span><span class="thirtownspan">五山别院</span>
      <p>五山别院，规划面积110亩，攀枝花大田镇的一处休闲度假胜地。在这里，一切风格的呈现都是为了自然流露，深刻挖掘巴蜀山水自然特色，将自然赋予的美景渗透到室内外每个细节中，演绎了一处如虹溪诺雅般的僻静放逐之境。五山别院的魅力一言难尽，无论是大快朵颐一番当地时令佳肴，抑或是悠然地拼上一盏香茗，都将让你蓦然发现，生活不在别处，精致优雅的生活，原来就在当下。</p>
      <button>详情<img src="{$img_url}xiaozhen/doublegt.png" alt="特色小镇规划" ></button>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}xiaozhen/contcase3.png" alt="特色小镇规划" >
      </div>
    <div class="townbtm">
      <div class="verline001"></div>
    </div>
   </div>

 
<div class="why001">
<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"> 
    <button>我要发布需求</button></a>
    <p>海岸涵盖文旅产业、园区规划、酒店、商业体、咖啡馆、餐饮、办公空间等。海岸的客户群涵盖了业界众多知名企业以及一大批极具实力的财团</p >
  </div>
 

 
<div class="haianfaqi">
  <div class="faqileft">
    <!-- < img src="" alt="北京海岸设计"> -->
    <div class="borderlineshow"></div>
    <div class="haianintroduced">
      <em>海岸设计</em>
      <span>haian design</span>
      <p>北京海岸设计由郭准先生创立于1999年<br>
      是一家以归本主义设计理论为指导<br>
      专注于咖啡厅装修设计、施工、监理一体化服务的专业化企业<br>
      经过十余年漫长设计岁月的洗礼、积累与沉淀<br>
      海岸创始人郭准先生创立了属于海岸独有的设计风格<br>
      归本主义<br>
      海岸将致力于把归本主义流派与学说发扬光大<br>
      为人类的生活环境增加一道不同的风景<br>
      也籍此赢得客户、造福员工、发展海岸</p >
    </div>
  </div>
  <ul class="faqiright">
    <li>
      <i><img src="{$img_url}xiaozhen/faqibgguozhun.png" alt="北京海岸设计郭准"></i>
      <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人<br>
      1999年创立北京海岸<br>
      他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的<br>
      因为目的不在于追求耀眼的视觉效果<br>
      而是追求表现生活在其中人的活动本身
      </p >
    </li>
    <li>
      <i><img src="{$img_url}xiaozhen/faqibgguiben.png" alt="北京海岸设计归本主义"></i>
      <p>  归本主义是华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、<br>
      发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻<br>
      在生活体验中<br>
      不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考<br>
      </p >
    </li>
  </ul>
</div>
  <div class="chain03">
  <h2 class="teh2">最专业的设计服务管家</h2>
  <div class="walkalong">
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-fuwu1"></i><p>为客户提供<span> 一站式全程服务</span></p></div></div>
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
    <div class="walkbox"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
  </div>
  <div class="redborbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
    懒得看了？直接找规划师吧</a>
    <hr class="hrtopright">
    <hr class="hrtopleft">
    <hr class="hrdownright">
    <hr class="hrdownleft">
    <hr class="hrright">
    <hr class="hrleft">
  </div>
</div>
 
 

<div class="boxcont3">
<h2>海岸服务案例</h2>            
  <div class="cont3">
     <div class="cont3btnbox">
          <img class="ct3lft" src="{$img_url}pic/xiaoz/btnleft.png" alt="特色小镇规划" />
     </div>
     
     <div class="cont3mainbox">
        <div class="ct3maincasp">
              <img src="{$img_url}pic/xiaoz/bigcase2.png" alt="特色小镇规划" />
        </div>
        <a href="{$index_url}product/showproduct.php?lang=cn&id=212" target="_blank"><div class="ct3maindetails">
         详 &nbsp;情
        </div></a>
        <div class="ct3mainexplain">
              <div class="c3casetitle"><h2>隐逸水镇</h2><i></i></div>
              <div class="c3casemiaoshu">作为电视剧《三生三世十里桃花》的取景基地<br/>
              隐藏于山水之间<br />
              犹如世外桃源般的普者黑景区也位于丘北县境内<br />
              隐逸水镇的设计材料以最原始的钢筋、水泥、原木为主<br />
              回归自然享受自然
              </div>
              <p>
                项目地址：云南省丘北县<br />
                使用面积：50亩<br />
                项目类型：室内外建筑<br />
                主创团队：北京海岸设计<br />
                总设计师：郭准先生<br />
                设计风格：归本主义<br />
              <p>
        </div>
     </div>
     <div class="cont3mainbox clsplay">
        <div class="ct3maincasp">
              <img src="{$img_url}pic/xiaoz/bigcase1.png" alt="特色小镇规划" />
        </div>
        <a href="{$index_url}product/showproduct.php?lang=cn&id=79" target="_blank"><div class="ct3maindetails">
         详 &nbsp;情
        </div></a>
        <div class="ct3mainexplain">
              <div class="c3casetitle"><h2>六度别院</h2><i></i></div>
              <div class="c3casemiaoshu">项目地处云南西双版纳告庄西双景<br />
              坐拥360°的自然美景<br />
              在改造前保留了一些自然树木<br />
              通过原始的设计材料将自然与家融为一体<br />
              最终诞生了如今这个质朴、幽静、精致的六度别院
              </div>
              <p>
                项目地址：云南西双版纳<br />
                使用面积：1000㎡<br />
                项目类型：景观规划<br />
                主创团队：北京海岸设计<br />
                总设计师：郭准先生<br />
                设计风格：归本主义<br />
              <p>
        </div>
     </div>
     <div class="cont3mainbox  clsplay">
        <div class="ct3maincasp">
              <img src="{$img_url}pic/xiaoz/bigcase3.jpg" alt="特色小镇规划" />
        </div>
        <a href="{$index_url}product/showproduct.php?lang=cn&id=80" target="_blank"><div class="ct3maindetails">
         详 &nbsp;情
        </div></a>
        <div class="ct3mainexplain">
              <div class="c3casetitle"><h2>五山别院</h2><i></i></div>
              <div class="c3casemiaoshu">深刻挖掘巴蜀山水自然特色<br />
              将自然赋予的美景渗透到室内外每个细节中<br />
              演绎了一处如虹溪诺雅般的僻静放逐之境<br />
              五山别院的魅力一言难尽<br />
              精致优雅的生活原来就在当下
              </div>
              <p>
                项目地址：四川攀枝花 <br />
                使用面积：110亩<br />
                项目类型：室内外建筑<br />
                主创团队：北京海岸设计<br />
                总设计师：郭准先生<br />
                设计风格：归本主义<br />
              <p>
        </div>
     </div>
     <div class="cont3mainbox  clsplay">
        <div class="ct3maincasp">
              <img src="{$img_url}pic/xiaoz/bigcase4.jpg" alt="特色小镇规划" />
        </div>
        <a href="{$index_url}product/showproduct.php?lang=cn&id=44" target="_blank"><div class="ct3maindetails">
         详 &nbsp;情
        </div></a>
        <div class="ct3mainexplain">
              <div class="c3casetitle"><h2>青绿元生态小镇</h2><i></i></div>
              <div class="c3casemiaoshu">依托塔尔寺、背靠青海湖地理特点形成了文化旅游交汇处<br />
              独特的地理位置依山望水般的清幽环境<br/>
              如明珠般点缀于山水间<br />
              走进小镇一切都显得那么的平静与淡然<br />
              生产、生活、生态的自然景观宛如画卷在眼前
              </div>
              <p>
                项目地址：青海西宁 <br />
                使用面积：200亩<br />
                项目类型：室内外建筑<br />
                主创团队：北京海岸设计<br />
                总设计师：郭准先生<br />
                设计风格：归本主义<br />
              <p>
        </div>
     </div>
     <div class="cont3mainbox  clsplay">
        <div class="ct3maincasp">
              <img src="{$img_url}pic/xiaoz/bigcase5.png" alt="特色小镇规划" />
        </div>
        <a href="{$index_url}product/showproduct.php?lang=cn&id=81" target="_blank"><div class="ct3maindetails">
         详 &nbsp;情
        </div></a>
        <div class="ct3mainexplain">
              <div class="c3casetitle"><h2>塞北小镇</h2><i></i></div>
              <div class="c3casemiaoshu">如果说洋溢着青春可爱气息的雪人代表着塞北的冬天<br />
              那草坪和玻璃幕相结合的建筑便天生属于这片草地<br />
              塞北小镇将在全新的规划设计中<br />
              重新恢复生态让人与自然和谐共处
              </div>
              <p>
                项目地址：河北张家口<br />
                项目面积：约300平方公里<br />
                项目类型：城市规划<br />
                主创团队：北京海岸设计<br />
                总设计师：郭准先生<br />
                设计风格：归本主义<br />
              <p>
        </div>
     </div>
     <div class="cont3btnbox">
          <img class="ct3rgt" src="{$img_url}pic/xiaoz/btnright.png" alt="特色小镇规划" />
     </div>
           
</div> 
<footer>
  <div class="ftmain">
      <div class="fttop">
            <div class="fotlianxibox">
                  <div class="ftphone">
                        <img src="{$img_url}pic/xiaoz/phoneicon.png" alt="特色小镇规划" />
                        <span>400-879-1110</span>
                  </div>
                  <div class="ftdress">
                      <p> 地址：北京市朝阳区北汽双井文创园3号楼E座108车间
                          <br />
                          预约热线 ：010-5290-6570<br/>
                          E-mail：ceo@beijinghaian.com 
                      </p>
                  </div>
            </div>
            <ul class="foterweimabox">  
                      <li><img src="{$img_url}pic/xiaoz/erweima1.jpg" alt="特色小镇规划" /><span>扫一扫 免费通话</span></li>
                      <li><img src="{$img_url}pic/xiaoz/erweima2.jpg" alt="特色小镇规划" /><span>微信公众号</span></li>
            </ul>
      </div>
      <div class="ftdown"> 
            <hr />
            <div class="fotsmaltxt">
                <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved. </p>
                <p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
                <p>京ICP备13049424号</p>
            </div>
      </div>
      <div class="cnzz"> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262177712'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D1262177712%26show%3Dpic' type='text/javascript'%3E%3C/script %3E"));</script></div>
  </div>
</footer>       
<!-- 提交需求列表底部 -->
<div class="downtable">
      <div id="lforder" class="order" hidden>立即预约</div>
        <div class="close0"><i>×</i></div>
            <div class="downtbctn">
                      <div class="tableimg"><img src="{$img_url}pic/smallhand.png" alt="" /><span>10秒提交设计需求</span></div>
                      <div class="tablemain">
<!--
EOT;
require template('feed/feedback6'); 
$metfeedback2=metlabel_feedback6(166);
echo <<<EOT
-->
             {$metfeedback2}
                        </div>
                        <div class="tablergt">
                              <span>免费热线电话</span>
                              <em><a href=" ">400-879-1110</a></em>
                        </div>
              </div>
        </div> 
 <script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
          
<!--
EOT;
 
?>