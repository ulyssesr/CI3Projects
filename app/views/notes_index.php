<h1><?php echo $title; ?></h1>
<?php foreach($query as $item):?>
<article>
<h2><?php echo ucwords($item->filename); ?></h2>
<small class="muted">
<?php echo date('F d, Y \a\t g:i a. ',$item->published); ?>
<?php if ($item->status == 'private'): echo '[ private ]'; endif; ?>
</small>
<?php echo '<p>'.$item->content.'</p>'; ?>
</article>
<?php endforeach;?>