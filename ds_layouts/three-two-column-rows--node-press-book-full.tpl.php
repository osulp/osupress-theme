<div>
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <div class="row-fluid responsive">
    <div class="span8 sm-12">
      <h2><?php print render($title); ?></h2>
      <?php // print render(field_view_field('node', $node, 'field_press_book_subtitle')) ?>
      <?php print render($content["field_press_book_subtitle"]); ?>
      <?php print render($content["field_press_book_authors_editors"]) ?>
    </div>
    <div class="span4 sm-12">
      <img src="<?php echo file_create_url($node->field_press_book_cover[und][0][uri]); ?>">
    </div>
  </div>
  <div class="row-fluid responsive">
    <div class="span7 sm-12">
      <?php print render($content["field_press_book_description"]); ?>
    </div>
    <div class="span5 sm-12">
      <?php print render($content["field_press_reviews"]); ?>
    </div>
  </div>
</div>