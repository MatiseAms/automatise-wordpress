<?php
$button = $args; // Just for clarity
$buttonType = isset($button['type']) ? $button['type'] : 'anchor';
$buttonType = isset($button['url']) && substr($button['url'], 0, 1) == '#' ? 'scrollTo' : $buttonType;
$buttonClasses = isset($button['classes']) ? $button['classes'] : '';
$buttonAttributes = isset($button['attributes']) ? $button['attributes'] : '';
$buttonTarget = isset($button['target']) ? 'target="'.$button['target'].'" rel="noopener"' : '';
$buttonIcon = isset($button['icon']) && $button['icon'] ? '<span class="button__icon">' . svg($button['icon']) . '</span>' : '';
?>

<?php if ($buttonType == 'anchor'): ?>
  <a href="<?=$button['url'];?>" <?=$buttonTarget?> class="button button--<?=$buttonType?> <?=$buttonClasses?>"
    <?=$buttonAttributes?>>
    <span class="button__text">
      <?=$button['title'];?>
    </span>
    <?= $buttonIcon; ?>
  </a>
<?php elseif ($buttonType == 'scrollTo'): ?>
  <button type="button" class="button <?=$buttonClasses?> button--scroll-to button--<?=$buttonType?> "
    <?=$buttonAttributes?> data-scroll-to="<?=$button['url']?>">
    <span>
      <?=$button['title'];?>
    </span>
    <?= $buttonIcon; ?>
  </button>
<?php else: ?>
  <button type="<?=$buttonType;?>" class="button button--<?=$buttonType?> <?=$buttonClasses?>" <?=$buttonAttributes?>>
    <span class="button__text">
      <?=$button['title'];?>
    </span>
    <?= $buttonIcon; ?>
  </button>
<?php endif; ?>