<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php if(isset($crumbs)):?>
      <?php foreach($crumbs as $crumb):?>
        <li class="breadcrumb-item">
          <a href="<?=ROOT?><?=$crumb[1]?>">
            <?=$crumb[0]?>
          </a>
        </li>
      <?php endforeach;?>
    <?php endif;?>
  </ol>
</nav>