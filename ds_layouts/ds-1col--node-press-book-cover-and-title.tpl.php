<div class="press-book-cover-and-title flex-column">
  <div class="image">
    <img height="<?php print $node->field_press_book_cover['und'][0]['height']?>" width="<?php print $node->field_press_book_cover['und'][0]['width']?>" class="book-cover" src="<?php print file_create_url($content['field_press_book_cover']['#items'][0]['uri']) ?>">
  </div>
  <?php print l($node->title, '/node/' . $node->nid); ?>
</div>