<?php
$media_type = $args['type'];
$media = '';
$ratio = 'auto';
$size = isset($args['size']) ? $args['size'] : 'large';
if ($media_type == 'video') {
  $media = $args['url'];
  $ratio = $args['height'] / $args['width'];
} else {
  $media = $args['sizes'][$size];
  $ratio = $args['height'] / $args['width'];
}
?>

<?php if ($media_type == 'video'): ?>
  <video data-src="<?= $media; ?>" data-lazy-load muted autoplay playsinline loop <?= $ratio ? 'style="--ratio:'.$ratio.'"': '';?>></video>
<?php elseif ($media_type == 'image'): ?>
  <img data-src="<?= $media; ?>" data-lazy-load alt="<?= $args['alt']; ?>" <?= $ratio ? 'style="--ratio:'.$ratio.'"': '';?>>
<?php endif; ?>