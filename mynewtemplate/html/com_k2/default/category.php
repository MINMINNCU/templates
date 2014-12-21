<?php

// no direct access
defined('_JEXEC') or die;

?>




<?php $params = K2HelperUtilities::getParams('com_k2'); ?>

<div id="mastwrap" class="sliding">
  <div id="container" class='container con_common'>
    <ul class="grid  effect-2" id="grid">
      <!-- display k2 items -->
      <?php
        $count=count($this->leading);
        $half_count=$count/2;
        $item=$this->leading;
      ?>
      <?php for($x = 1; $x < $half_count; $x++): ?>
        <?php  
          $this->item=$item[$x]; 
          K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);
        ?>
        <li class='ditem'>  
          <div class='mainitem'> 
            {modal <?php echo $this->item->link; ?>}
              <!-- img -->
                <?php if(!empty($this->item->image)): ?>
                  <img src="<?php echo $this->item->image; ?>"/>
                <?php elseif (count($this->item->extra_fields)): ?>
                  <?php $extraFields = json_decode($this->item->extra_fields);?>
                  <img src="<?php echo $extraFields[0]->value; ?>"/>
                <?php endif; ?>
            {/modal}
            <!-- Date created -->
              <?php if($this->item->params->get('itemDateCreated')): ?>
                <span class="itemDateCreated">
                  <?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
                </span>
              <?php endif; ?>
            <!-- Quotation content-->
              <?php  
                jimport( 'joomla.application.module.helper' );
                $module_n = JModuleHelper::getModule( 'qlform','Quotation');
                $params_n = $module_n->params;
               
                require_once(JPATH_ROOT.'/modules/mod_qlform/helper.php');
                $obj_helper = new modQlformHelper($params_n,$module_n);
                $quotations = $obj_helper->getQuotationByPrice($this->item->id);

                if(sizeof($quotations)>0 && sizeof($quotations)>2){
                  $size=3;
                }
                else{
                  $size=sizeof($quotations);
                }
              ?>
           
            <div class="itemTitle">
              {modal <?php echo $this->item->link; ?>}<h3><?php echo $this->item->title; ?></h3>{/modal}
            </div>

             <div class="numOfComments">
              <span>
                <?php echo $size ?>
                <img id="quo" src="/minmin/templates/mynewtemplate/images/quotation.png" align="left" height="16" width="16" alt="quotation"/>
              </span> 
            </div>

            <!-- Item introtext -->
              <div class="introtext sp">
                <?php if($this->item->params->get('itemIntroText')): ?>
                  <?php echo $this->item->introtext; ?>
                <?php endif; ?>
              </div>

            <!-- tag -->
              <div class='tagbox'>
                <?php if(count($this->item->tags)):?>
                  <?php foreach ($this->item->tags as $tag): ?>
                    <span class='tag'>
                      {modal <?php echo $tag->link; ?>}<?php echo $tag->name; ?>{/modal}
                    </span>
                  <?php endforeach; ?>
                <?php endif;?>
              </div>

            </div><!--end main item-->

            <!-- K2 Comments -->
            <!-- 
              <?php 
              $limit = $this->item->params->get('commentsLimit');
              $limitstart = JRequest::getInt('limitstart', 0);
              $model = new K2ModelItem;
              $comments = $model->getItemComments($this->item->id, $limitstart, $limit, true);
            ?>
            -->
            <div class='comments'>
              <!-- 
              <?php for ($i = 0; $i < sizeof($comments); $i++): ?>

                <span class="commentDate">
                  <?php echo JHTML::_('date', $comments[$i]->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?>
                </span>
                <?php $comments[$i]->userImage = K2HelperUtilities::getAvatar($comments[$i]->userID, $comments[$i]->commentEmail, $params->get('commenterImgWidth')); ?>
                <?php if($comments[$i]->userImage):?>
                  <img src="<?php echo $comments[$i]->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comments[$i]->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" id="userimg"/>
                <?php endif; ?>
                <p><?php echo $comments[$i]->commentText; ?></p>

              <?php endfor; ?> -->
              <!-- Quotation number-->
              <?php if($size>0): ?>
                <?php for($i = 0; $i < $size; $i++): ?>
                    <h3>$<?php echo $quotations[$i]->quotation; ?></h3>
                    <?php echo $quotations[$i]->description; ?>
                <?php endfor; ?>
              <?php endif; ?>
            </div>
        </li>  
      <?php endfor; ?>
      <!-- end display k2 items -->        
    </ul>
  </div>
  <div id="container" class='container con_uncommon'>
    <ul class="grid grid2 effect-2" id="grid2">
      <!-- display k2 items -->
      <?php for($z = $count-1 ; $z >$half_count ; $z--): ?>
        <?php  
          $this->item=$item[$z]; 
          K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);
        ?>
        <li class='ditem'>  
          <div class='mainitem'> 
            {modal <?php echo $this->item->link; ?>}
              <!-- img -->
                <?php if(!empty($this->item->image)): ?>
                  <img src="<?php echo $this->item->image; ?>"/>
                <?php elseif (count($this->item->extra_fields)): ?>
                  <?php $extraFields = json_decode($this->item->extra_fields);?>
                  <img src="<?php echo $extraFields[0]->value; ?>"/>
                <?php endif; ?>
            {/modal}
            <!-- Date created -->
              <?php if($this->item->params->get('itemDateCreated')): ?>
                <span class="itemDateCreated">
                  <?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
                </span>
              <?php endif; ?>
            <!-- Quotation content-->
              <?php  
                jimport( 'joomla.application.module.helper' );
                $module_n = JModuleHelper::getModule( 'qlform','Quotation');
                $params_n = $module_n->params;
               
                require_once(JPATH_ROOT.'/modules/mod_qlform/helper.php');
                $obj_helper = new modQlformHelper($params_n,$module_n);
                $quotations = $obj_helper->getQuotationByPrice($this->item->id);

                if(sizeof($quotations)>0 && sizeof($quotations)>2){
                  $size=3;
                }
                else{
                  $size=sizeof($quotations);
                }
              ?>
           
            <div class="itemTitle">
              {modal <?php echo $this->item->link; ?>}<h3><?php echo $this->item->title; ?></h3>{/modal}
            </div>
            
            <div class="numOfComments">
              <span>
                <?php echo $size ?>
                <img id="quo" src="/minmin/templates/mynewtemplate/images/quotation.png" align="left" height="16" width="16" alt="quotation"/>
              </span> 
            </div>
            <!-- Item introtext -->
              <div class="introtext sp">
                <?php if($this->item->params->get('itemIntroText')): ?>
                  <?php echo $this->item->introtext; ?>
                <?php endif; ?>
              </div>

            <!-- tag -->
              <div class='tagbox'>
                <?php if(count($this->item->tags)):?>
                  <?php foreach ($this->item->tags as $tag): ?>
                    <span class='tag'>
                      {modal <?php echo $tag->link; ?>}<?php echo $tag->name; ?>{/modal}
                    </span>
                  <?php endforeach; ?>
                <?php endif;?>
              </div>

            </div><!--end main item-->

            <!-- K2 Comments -->
            <!-- 
              <?php 
              $limit = $this->item->params->get('commentsLimit');
              $limitstart = JRequest::getInt('limitstart', 0);
              $model = new K2ModelItem;
              $comments = $model->getItemComments($this->item->id, $limitstart, $limit, true);
            ?>
            -->
            <div class='comments'>
              <!-- 
              <?php for ($i = 0; $i < sizeof($comments); $i++): ?>

                <span class="commentDate">
                  <?php echo JHTML::_('date', $comments[$i]->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?>
                </span>
                <?php $comments[$i]->userImage = K2HelperUtilities::getAvatar($comments[$i]->userID, $comments[$i]->commentEmail, $params->get('commenterImgWidth')); ?>
                <?php if($comments[$i]->userImage):?>
                  <img src="<?php echo $comments[$i]->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comments[$i]->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" id="userimg"/>
                <?php endif; ?>
                <p><?php echo $comments[$i]->commentText; ?></p>

              <?php endfor; ?> -->
              <!-- Quotation number-->
              <?php if($size>0): ?>
                <?php for($i = 0; $i < $size; $i++): ?>
                    <h3>$<?php echo $quotations[$i]->quotation; ?></h3>
                    <?php echo $quotations[$i]->description; ?>
                <?php endfor; ?>
              <?php endif; ?>
            </div>
        </li>  
      <?php endfor; ?>
      <!-- end display k2 items -->        
    </ul>
  </div>
  <!-- center -->
  <div id="centerBlock"  >
      <!-- search -->
      <div id='k2SearchBlock'>
       {modulepos search}
      </div>
      <img id='searchBtn' class='centerBtn' src='<?php echo JURI::base(true); ?>/images/search-01.png' alt='search'/>
      <!-- home   -->
      <img id='homeBtn' class='centerBtn' src='<?php echo JURI::base(true); ?>/images/DtLogo-01.png' alt='home'/>  
      <!-- post -->
      <?php $user = JFactory::getUser();?>
      <?php if($user->guest):?>
      <img id='centerPost' class='centerBtn' src='<?php echo JURI::base(true); ?>/images/post-01.png' alt='post'/>
      <script language="javascript">
        var $K2 = jQuery.noConflict();
        $K2(document).ready(function(){
          "use strict";
          
         $K2(document).on('click', '#centerPost', function() {
          $K2('#sm-trigger').toggleClass('active');
            $K2('#sm-trigger').toggleClass('arrow-close');
            $K2('#sm-trigger').toggleClass('arrow-open');
            $K2('#mastwrap').toggleClass('sliding-toright');
            $K2('#mastwrap').toggleClass('mastwrap-open');
            $K2('#sm').toggleClass('menu-open');
            $K2('#mastwrap').addClass('nav-opened');
          });
           });
      </script>
      <?php else: ?>
      {modal index.php/post-demand}
        <img id='centerPost' class='centerBtn' src='<?php echo JURI::base(true); ?>/images/post-01.png' alt='post'/>
      {/modal}
      <?php endif; ?> 
  </div>
<!-- end center -->
</div>




<!-- sidebar -->

  <nav class="sidebarmenu" id="sm">
    <!--slidingmenu-->
    <div class="sm-wrap">
      {modulepos sidebar-menu}
    </div>
    <!--slidingtrigger-->
    <div id="sm-trigger" class="arrow-close"></div>   
  </nav>





<!-- scroll animate  -->
<script type="text/javascript">
      new AnimOnScroll( document.getElementById( 'grid' ), {
              minDuration : 0.4,
              maxDuration : 0.7,
              viewportFactor : 0.2
            } );
      new AnimOnScroll( document.getElementById( 'grid2' ), {
              minDuration : 0.4,
              maxDuration : 0.7,
              viewportFactor : 0.2
            } );
</script>
