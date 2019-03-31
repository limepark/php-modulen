<?php
  $portletContextUtil = new PortletContextUtil();
  $nodeIteratorUtil   = new NodeIteratorUtil();
  $propertyUtil       = new PropertyUtil();
  $currentPage        = $portletContextUtil->getCurrentPage();
  $menuItems          = $nodeIteratorUtil->getMenuItems($currentPage);
?>

<?php if ($menuItems->hasNext()) : ?>
<ul class="env-list">
  <?php foreach ($menuItems as $item) : ?>
    <li class="env-list__item"><a class="env-text" href="<?php echo $propertyUtil->getString($item, 'URI', ''); ?>"><?php echo $propertyUtil->getStringEscaped($item, 'displayName', ''); ?></a></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>