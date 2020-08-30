<?php 
$menus =[
          ['menu-1' , 'menu-1',],
          ['menu-2' , 'menu-2',],
          ['menu-3' , 'menu-3',]
        ];
?>
<ul class="nav flex-column">
    <?php foreach($menus as $m): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url().'/'.$m[0] ?>"> <?= $m[1] ?></a>
    </li>
    <?php endforeach; ?>
</ul>