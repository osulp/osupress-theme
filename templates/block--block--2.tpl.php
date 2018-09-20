<div id="block-block-2" class="block block-block contextual-links-region">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <div class="content">
    <form class="search-bar form-search" _lpchecked="1" onSubmit="return search();">
      <input id="search" class="search-input" type="text">
      <label for="search" class="show-large">Search by Title/ISBN/Author/Keyword</label>
      <label for="search" class="show-small">Search . . .</label>
      <button class="search-button">
        <i class="icon-search icon-large icon-white"><wbr></i>
      </button>
    </form>
  </div>
</div>