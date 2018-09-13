<a class="flex-grid-child" href="<?php print url('node/' . $node->nid)?>">
  <img height="<?php print $node->field_press_book_cover['und'][0]['height']?>" width="<?php print $node->field_press_book_cover['und'][0]['width']?>" class="book-cover box-shadow" src="<?php print file_create_url($content['field_press_book_cover']['#items'][0]['uri']) ?>">
</a>