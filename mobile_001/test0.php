<!--
EOT;
}
if($lang_Column1_ok == 0 && $lang_Column2_ok == 0 && $lang_Column3_ok == 0 && $lang_Column4_ok == 0 && $lang_Column4_ok == 0 && $lang_Column4_ok == 0 && $lang_Column7_ok == 0 && $lang_Column8_ok == 0 && $lang_Column9_ok == 0){$Column_ok = false ;}else{$Column_ok = true ;}
if($Column_ok){
echo <<<EOT
-->
   
<ul class="poroduct_list madeprdsshowul">

	<p class="madeprdsshowp">{$lang_title1}</p>
<!--
EOT;

foreach(methtml_getarray($lang_godlist1,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
	<li > 
	<a href="{$val[url]}" style="">
		<img  src="{$val[imgurls]}" alt="" title="" />
		<p class="madeprdsshowlip">{$val[title]}</p>
	</a>
	</li>
<!--
EOT;
}
echo <<<EOT
-->

</ul>	


<ul class="poroduct_list madeprdsshowul">
  <p class="madeprdsshowp">{$lang_title2}</p>
<!--
EOT;
foreach(methtml_getarray($lang_godlist2,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
  <li > 
  <a href="{$val[url]}" style="">
    <img  src="{$val[imgurls]}" alt="" title="" />
    <p class="madeprdsshowlip">{$val[title]}</p>
  </a>
  </li>
<!--
EOT;
}
echo <<<EOT
-->
      </ul> 
			
			<ul class="poroduct_list  madeprdsshowul" >
	<p class="madeprdsshowp">{$lang_title3}</p>
<!--
EOT;
foreach(methtml_getarray($lang_godlist3,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
	<li> 
	<a href="{$val[url]}" style="">
		<img style="" src="{$val[imgurls]}" alt="" title="" />
		<p class="madeprdsshowlip">{$val[title]}</p>
	</a>
	</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>	
			
			<ul class="poroduct_list madeprdsshowul" >
	<p class="madeprdsshowp">{$lang_title4}</p>
<!--
EOT;
foreach(methtml_getarray($lang_godlist4,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
	<li > 
	<a href="{$val[url]}" style="">
		<img  src="{$val[imgurls]}" alt="" title="" />
		<p class="madeprdsshowlip">{$val[title]}</p>
	</a>
	</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>	
			<ul class="poroduct_list  madeprdsshowul">
	<p class="madeprdsshowp">{$lang_title5}</p>
<!--
EOT;
foreach(methtml_getarray($lang_godlist5,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
	<li > 
	<a href="{$val[url]}" style="">
		<img  src="{$val[imgurls]}" alt="" title="" />
		<p  class="madeprdsshowlip">{$val[title]}</p>
	</a>
	</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>	
<ul class="poroduct_list  madeprdsshowul">
	<p class="madeprdsshowp">{$lang_title6}</p>
<!--
EOT;
foreach(methtml_getarray($lang_godlist6,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->
	<li > 
	<a href="{$val[url]}" style="">
		<img  src="{$val[imgurls]}" alt="" title="" />
		<p  class="madeprdsshowlip">{$val[title]}</p>
	</a>
	</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>	 
  <section style="margin:5px 0 7px 0;clear: both;">
 
<!--
EOT;
 
    require_once template('block/block_one');
    require_once template('block/block_two');
    require_once template('block/block_three');
echo <<<EOT
-->
         </section> 
<!--
EOT;
}
}
echo <<<EOT
-->
</div>