<div class="book_content">
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
        <div class="span12">
          <h3><?php print render($content["field_press_book_subtitle"]); ?></h3>
          <?php print render($content["field_press_series"]); ?>
          
          <?php print render($content["field_press_book_authors_editors"]) ?>
        </div>  
          <div class="span" id="details">
            <!-- If status description or field press status is set, display the status description, and disable the buy option. -->
            <?php if ($content["field_press_status_description"] || $content["field_press_status"]):?>
                  <div class="span10">
                    <?php print render($content["field_press_status_description"]); ?>
                    <?php print render($content["field_press_status"]); ?>
                  </div>
            <!-- Else, display ISBN info, and the shopping cart button. -->
            <?php else:?>
              <!-- If Hardcover ISBN is set, then show buy information, but if the Publishing status of the book is unavailavle, disable the buy button. -->
              <?php if ($content["field_press_book_hardcover_isbn"]): ?>
                <div class="span10">
                    <p><?php print "<strong>Hardcover</strong> ISBN: " . $content['field_press_book_hardcover_isbn']['#items'][0]['value'] . ". $" . $content['field_press_book_hc_price']['#items'][0]['value'] ?></p>        
                </div>
                <div class="span1">
                    <p><?php print "<a href ='https://cdcshoppingcart.uchicago.edu/Cart2/Cart?ISBN=" . $content['field_press_book_hardcover_isbn']['#items'][0]['value'] . "&PRESS=orsu'><button type='button' class='btn btn-primary buy'>Buy</button></a>" ?></p>       
                </div>                 
              <?php endif ?>

              <!-- If Paper ISBN is set, then show buy information, but if the Publishing status of the book is unavailavle, disable the buy button. -->
              <?php if ($content["field_press_book_paper_isbn"]): ?>
                <div class="span10">
                    <p><?php print "<strong>Paper</strong> ISBN: " . $content['field_press_book_paper_isbn']['#items'][0]['value'] . ". $" . $content['field_press_book_paper_price']['#items'][0]['value'] ?></p>
                </div>
                <div class="span1">
                    <p><?php print "<a href ='https://cdcshoppingcart.uchicago.edu/Cart2/Cart?ISBN=" . $content['field_press_book_paper_isbn']['#items'][0]['value'] . "&PRESS=orsu'><button type='button' class='btn btn-primary buy'>Buy</button></a>" ?></p>       
                </div> 
              <?php endif ?>    

              <!-- If Ebbok ISBN is set, then show buy information, but if the Publishing status of the book is unavailavle, disable the buy button. -->
              <?php if ($content["field_press_book_ebook_isbn"]): ?>
                <div class="span10">
                  <?php if ($content["field_press_book_ebook_isbn"]): ?>
                    <p><?php print "<strong>E Book</strong> ISBN: " . $content['field_press_e_book_isbn']['#items'][0]['value'] . ". $" . $content['field_press_e_book_price']['#items'][0]['value'] ?></p>
                </div>
                <div class="span1">
                    <p><?php print "<a href ='https://cdcshoppingcart.uchicago.edu/Cart2/Cart?ISBN=" . $content['field_press_e_book_isbn']['#items'][0]['value'] . "&PRESS=orsu'><button type='button' class='btn btn-primary buy'>Buy</button></a>" ?></p>
                  <?php endif ?>
                </div>  
              <?php endif ?>
 
              <!-- Only show this span if the Trim Size OR dInclusion Data List OR Pages is set, otherwise don't display it. -->
              <?php if ($content["field_press_book_ebook_isbn"] or $content["field_press_trim_size"] || $content["field_press_pages"]): ?>
                <div class="span12" id="pressbook_meta">        
                  <em>
                    <?php if ($content["field_press_trim_size"]): ?>
                      <?php print ($content['field_press_trim_size']['#items'][0]['value'] )?>
                    <?php endif ?>
                    <?php if ($content["field_press_inclusion_data_list"]): ?>
                      <?php print ($content['field_press_inclusion_data_list']['#items'][0]['value'] )?>
                    <?php endif ?>
                    <?php if ($content["field_press_pages"]): ?>
                      <?php print ($content['field_press_pages']['#items'][0]['value'] . " pages.")?>
                    <?php endif ?>
                  </em>
                </div> 
              <?php endif ?>

            <?php endif ?>
          </div>
      </div>
    </div>
  </div>
  <div class="row-fluid responsive">
    <!-- If reviews is set, make the book description smaller, else, have it span9 -->
    <?php if (isset($content["field_press_reviews"])): ?>
      <div class="span7 sm-12">
        <?php print render($content["field_press_book_description"]); ?>
      </div>
      <div class="span5 sm-12">
        <div class="side-box box-shadow">
          <div class="side-box-title">
            <h2 id="reviews">Reviews</h2>
          </div>
          <div class="side-box-item">
            <?php print render($content["field_press_reviews"]); ?>
          </div>
        </div>
      </div>    
    <?php else: ?>
      <div class="span10 sm-12" id="widerBookDescription">
        <?php print render($content["field_press_book_description"]); ?>
      </div> 
    <?php endif ?>
  </div>
</div>