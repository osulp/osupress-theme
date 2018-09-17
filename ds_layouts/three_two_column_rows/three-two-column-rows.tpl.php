<?php
/**
 * @file
 * Display Suite Three two column rows template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $top_left: Rendered content for the "Top Left" region.
 * - $top_left_classes: String of classes that can be used to style the "Top Left" region.
 *
 * - $top_right: Rendered content for the "Top Right" region.
 * - $top_right_classes: String of classes that can be used to style the "Top Right" region.
 *
 * - $mid_left: Rendered content for the "Mid Left" region.
 * - $mid_left_classes: String of classes that can be used to style the "Mid Left" region.
 *
 * - $mid_right: Rendered content for the "Mid Right" region.
 * - $mid_right_classes: String of classes that can be used to style the "Mid Right" region.
 *
 * - $bottom_left: Rendered content for the "Bottom Left" region.
 * - $bottom_left_classes: String of classes that can be used to style the "Bottom Left" region.
 *
 * - $bottom_right: Rendered content for the "Bottom Right" region.
 * - $bottom_right_classes: String of classes that can be used to style the "Bottom Right" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <div class="row-fluid">
      <<?php print $top_left_wrapper; ?> class="ds-top-left<?php print $top_left_classes; ?>">
        <?php print $top_left; ?>
      </<?php print $top_left_wrapper; ?>>

      <<?php print $top_right_wrapper; ?> class="ds-top-right<?php print $top_right_classes; ?>">
        <?php print $top_right; ?>
      </<?php print $top_right_wrapper; ?>>
    </div>

    <div class="row-fluid">
      <<?php print $mid_left_wrapper; ?> class="ds-mid-left<?php print $mid_left_classes; ?>">
        <?php print $mid_left; ?>
      </<?php print $mid_left_wrapper; ?>>

      <<?php print $mid_right_wrapper; ?> class="ds-mid-right<?php print $mid_right_classes; ?>">
        <?php print $mid_right; ?>
      </<?php print $mid_right_wrapper; ?>>
    </div>

    <div class="row-fluid">
      <<?php print $bottom_left_wrapper; ?> class="ds-bottom-left<?php print $bottom_left_classes; ?>">
        <?php print $bottom_left; ?>
      </<?php print $bottom_left_wrapper; ?>>

      <<?php print $bottom_right_wrapper; ?> class="ds-bottom-right<?php print $bottom_right_classes; ?>">
        <?php print $bottom_right; ?>
      </<?php print $bottom_right_wrapper; ?>>
    </div>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
