<?php if ( count($addresses) > 0 ) : ?>
<h1>Addresses</h1>
<ul>
<?php foreach( $addresses as $key => $values ) : ?>
    <li><?php echo $values['address']; ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
