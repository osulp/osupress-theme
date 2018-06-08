<div>
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <div class="row-fluid responsive">
    <div class="span4 sm-12">
      <img src="<?php print file_create_url($content['field_press_book_cover']['#items'][0][uri]); ?>">
    </div>
    <div class="span7 sm-12">
      <h2 class="main-page-header"><?php print render($title); ?></h2>
      <div class="row-fluid">
        <div class="span6">
          <?php print render($content["field_press_book_subtitle"]); ?>
          <?php print render($content["field_press_book_authors_editors"]) ?>
        </div>
        <div class="span6">
          <p><?php print ($content['field_press_trim_size']['#items'][0]['value']
                          . ". " . $content['field_press_inclusion_data_list']['#items'][0]['value']
                          . " " . $content['field_press_pages']['#items'][0]['value'] . " pages.") ?> </p>
          <?php if ($content["field_press_book_hardcover_isbn"]): ?>
            <p><?php print "Hardcover ISBN: " . $content['field_press_book_hardcover_isbn']['#items'][0]['value']
                           . ". $" . $content['field_press_book_hc_price']['#items'][0]['value'] ?></p>
          <?php endif ?>
          <?php if ($content["field_press_book_paper_isbn"]): ?>
            <p><?php print "Hardcover ISBN: " . $content['field_press_book_paper_isbn']['#items'][0]['value']
                           . ". $" . $content['field_press_book_paper_price']['#items'][0]['value'] ?></p>
          <?php endif ?>
          <?php if ($content["field_press_book_ebook_isbn"]): ?>
            <p><?php print "Hardcover ISBN: " . $content['field_press_e_book_isbn']['#items'][0]['value']
                           . ". $" . $content['field_press_e_book_price']['#items'][0]['value'] ?></p>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid responsive">
    <div class="span7 sm-12">
      <?php print render($content["field_press_book_description"]); ?>
    </div>
    <?php if (isset($content["field_press_reviews"])): ?>
    <div class="span5 sm-12">
        <div class="side-box box-shadow">
          <div class="side-box-title">
            <h2>Reviews</h2>
          </div>
          <div class="side-box-item">
            <?php print render($content["field_press_reviews"]); ?>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>