
<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>/css/navmenu.css" />

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav nav-menu" role="navigation">
        <li class="active dropdown ">
        	<a id="dropBrush" href="<?php echo $base_url ?>/index.php/brush" role="button" class="dropdown-toggle" data-hover="dropdown" data-delay="500" data-close-others="true">刷卡系統</a>
    	    <ul class="dropdown-menu" role="menu" aria-labelledby="dropBrush">
		        <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/brush">上課</a></li>
		        <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/brush/finish">下課</a></li>
		       	<li class="divider"></li>
		        <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/brush/manual">手動輸入</a></li>
		    </ul>
        </li>
        <li><a href="<?php echo $base_url ?>/index.php/inquiry">查詢系統</a></li>
        <li><a href="<?php echo $base_url ?>/index.php/attend">出席系統</a></li>        
        <li class="dropdown">
        	<a id="dropConfig" href="<?php echo $base_url ?>/index.php/config" role="button" class="dropdown-toggle" data-hover="dropdown" data-delay="500" data-close-others="true">系統設定</a>
        	<ul class="dropdown-menu" role="menu" aria-labelledby="dropConfig">		        
            <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/config/semester">活動/課程設定</a></li>            
		        <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/config/memo">備註</a></li>		        
		        <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/config/college">院系</a></li>
		        <li><a tabindex="-1" href="<?php echo $base_url ?>/index.php/config/identity">身分別</a></li>
		    </ul>
        </li>
        <li><a href="<?php echo $base_url ?>/index.php/passport">護照資料</a></li>
      </ul>
    </div>
  </div>
</div><!-- /.navbar -->
