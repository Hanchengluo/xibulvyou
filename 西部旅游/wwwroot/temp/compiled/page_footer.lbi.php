<div id="footer">
  <div class="ft-bg">
    <div class="w-ensure mb20">
    	<div class="w-main">
        	<ul>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr1.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr2.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr3.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr4.gif"></a></li>
            </ul>
        </div>
    </div>
    <div class="ft_main">
      <div class="ft_links">
        <div class="ft_nav"> 
          <?php if ($this->_var['navigator_list']['bottom']): ?> 
          <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_46398800_1486456156');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_46398800_1486456156']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
          <a href="<?php echo $this->_var['nav_0_46398800_1486456156']['url']; ?>"  <?php if ($this->_var['nav_0_46398800_1486456156']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if (($this->_foreach['nav_bottom_list']['iteration'] <= 1)): ?> 
          class="noborder" 
          <?php endif; ?> rel="nofollow"><?php echo $this->_var['nav_0_46398800_1486456156']['name']; ?></a> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?> 
          
        </div>
      </div>
      <div class="ft_txt">
        <p>2016-2026 &copy; <?php echo $this->_var['shop_name']; ?> 所有,经营年限：2016-2017</p>
        <p class="ft_contact"> <span>服务时间：09:00-23:00</span> <?php if ($this->_var['service_phone']): ?> 
          <span class="ft_phone">客服热线: <em><?php echo $this->_var['service_phone']; ?></em></span> 
          <?php endif; ?></p>
          
          <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
        <p class="link"> 友情链接： 

        
		    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
        
         </p>
        
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<script>
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){  //距顶部多少像素时，出现返回顶部按钮
				$("#side-bar .gotop").fadeIn();	
			}
			else{
				$("#side-bar .gotop").fadeOut();
			}
		});
		$("#side-bar .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},600); //返回顶部动画 数值越小时间越短
		});
	});
</script>
<ul id="side-bar" class="side-pannel side-bar" >
  <a href="#surprise" >天天惊喜</a>
  <a href="#new_product" >新品上市</a>
  <a href="#best_goods" >今日推荐</a>
  <a href="#1F_goods" >1F</a>
  <a href="#2F_goods" >2F</a>
  <a href="#3F_goods" >3F</a>
  <a href="#4F_goods" >4F</a>
  <a href="javascript:;" class="gotop" style="display:none;"></a>
</ul>

