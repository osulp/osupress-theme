<div class="catalog-preview flex-row align-center">
  <a href="<?php print $GLOBALS["base_url"] . '/node/' . $node->nid?>">
    <img
      height="<?php print $node->field_cover_image['und'][0]['height'] ?>"
      width="<?php print $node->field_cover_image['und'][0]['height'] ?>"
      src="<?php print file_create_url($content['field_cover_image']['#items'][0]['uri']) ?>"
      class="book-cover-lg box-shadow">
  </a>
  <div class="flex-col">
    <h3><a href="<?php print $GLOBALS["base_url"] . '/node/' . $node->nid ?>">Catalog: <?php print $node->title ?></a></h3>
    <a href="<?php print $GLOBALS["base_url"] . '/catalog' ?>">Get a catalog</a>
  </div>
</div>