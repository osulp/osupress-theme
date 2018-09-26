<?php

/**
 *
 * Variables available:
 * 
 * - $title: title of the author
 * - $field_press_author_last_name: used to alphabetically list authors by last name in another view
 * - $field_press_author_link: link to author's website
 * - $field_press_author_picture: author's picture
 * - $field_press_author_biography: biography of the author
 * 
 */
?>
<div class=" flex-row justify-center flex-wrap ">
  <?php
  /*
  * Display 4-8 column when the press_book_author has a picture
  */
  ?>
  <?php if(!empty($field_press_author_picture)) : ?>
  
    <div class="">
      <div class="">
        <?php print render($content["field_press_author_picture"]); ?>
      </div>
    </div>
    <div class="span8">
      <?php print $field_press_author_biography[0]["value"];?>
    </div>

  <?php
  /*
  * Display a 11 column when the press_book_author has no picture
  */
  ?>
  <?php else :?>
      <div class="span10">
        <?php print $field_press_author_biography[0]["value"];?>
      </div>
    
<?php endif;?>
</div>