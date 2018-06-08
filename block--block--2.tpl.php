<div id="block-block-2" class="block block-block contextual-links-region">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <div class="content">
    <form class="search-bar form-search" _lpchecked="1">
      <input class="search-input" placeholder="Search by Title/ISBN/Author/Keyword" type="text">
      <button class="search-button">
        <i class="icon-search icon-large icon-white"><wbr></i>
      </button>
    </form>
  </div>
</div>