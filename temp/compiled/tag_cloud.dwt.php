<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


  <?php echo $this->fetch('library/ur_here.lbi'); ?>


<div class="blank"></div>
<div class="block">
  <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['all_tags']; ?></span></h3>
    <div class="boxCenterList RelaArticle">
      <p class="f_red" style="text-decoration:none;">&nbsp;&nbsp; <?php echo $this->_var['lang']['tag_cloud_desc']; ?> &nbsp;&nbsp;</p>
    <?php if ($this->_var['tags']): ?>
          <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
          <span style="font-size:<?php echo $this->_var['tag']['size']; ?>; line-height:36px;"> <a href="<?php echo $this->_var['tag']['url']; ?>" style="color:<?php echo $this->_var['tag']['color']; ?>">
          <?php if ($this->_var['tag']['bold']): ?>
          <b><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?></b>
          <?php else: ?>
          <?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?>
          <?php endif; ?>
          </a>
          <?php if ($this->_var['tags_from'] == 'user'): ?>
          <a href="user.php?act=act_del_tag&amp;tag_words=<?php echo urlencode($this->_var['tag']['tag_words']); ?>&amp;uid=<?php echo $this->_var['tag']['user_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>"> <img src="themes/ecmoban_zsxn/images/drop.gif" alt="<?php echo $this->_var['lang']['drop']; ?>" /> </a>&nbsp;&nbsp;
          <?php endif; ?>
          </span>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php else: ?>
          <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['no_tag']; ?></span>
          <?php endif; ?>
    </div>
   </div>
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
