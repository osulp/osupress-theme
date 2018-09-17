<?php

/**
 * @file
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system folder.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['footer']: Items for the footer region.
 * regions[top]                = Top
*  regions[header]             = Header
*  regions[nav]                = Main Menu
*  regions[help]               = Help
*  ;
*  regions[features]           = Features
*  regions[pre_content]        = Pre content
*  regions[content]            = Content
*  regions[post_content]       = Post content
*  regions[sidebar_first]      = Sidebar first
*  regions[sidebar_second]     = Sidebar second
* ;
* regions[pre_footer_100]     = full width above the footer
* regions[footer]             = footer
* ;
*  regions[main_first]         = Main Column1
*  regions[main_second]        = Main Column2
*  regions[main_third]         = Main Column3
*  regions[footer_firstcolumn] = Footer first column
*  regions[footer_secondcolumn] = Footer second column
*  regions[footer_thirdcolumn]  = Footer third column
*  regions[footer_fourthcolumn] = Footer fourth column
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<!-- OSU Top-Hat -->
<?php
  // Calls the Function that grabs appropriate header and title regardless of group or not
  if (!isset($node)) { $node = NULL; }
  $doug_fir_headers = doug_fir_header_set_up($front_page, $node, $site_name, $title);

  // Sets the value of the page title
  $title = $doug_fir_headers->title;

  $container = doug_fir_full_screen();

  $logo_path = $front_page . path_to_theme();

  if (doug_fir_top_hat()) {
    print osu_top_hat_render();
  } else { // Render the new tophat
?>
<div id="osu-top-hat" class="new <?php echo $container ?>">
  <?php echo get_logo($logo_path); ?>
  <span class="mobile-header"><a href="//www.oregonstate.edu">OREGON STATE UNIVERSITY</a></span>
  <a href='<?php echo $base_path; ?>search/osu' id="search-link" class="m-icon-link">
      <i class="icon-search"></i><span class="sr-only">Open search box</span>
  </a>
</div>
  <?php echo $doug_fir_headers->header; ?>
<?php } // end rendering new tophat ?>
<div id="mobile-icon-menu">
  <a href='#' id="toggle-mobile-menu" class="m-icon-link">
      <i class="icon-reorder"></i><span class="sr-only">Toggle menu</span>
  </a>
  <a href='<?php echo $base_path; ?>search/osu' id="mobile-search-link" class="m-icon-link">
      <i class="icon-search"></i><span class="sr-only">Go to search page</span>
  </a>
</div>

<div id='page-wrapper' class='<?php echo $container ?>'>
  <div id="search-overlay">
    <?php print doug_fir_search_overlay(); ?>
    <button class="exit-search">Exit Search</button>
  </div>
<!-- Site Name, parent unit, and group name -->
  <?php if (doug_fir_top_hat()) { ?>
  <div id='header' class='row-fluid'>
    <?php echo $doug_fir_headers->header; ?>
  </div>
  <?php } ?>
<!-- Get all of the menus that could be included in the mobile menu -->
  <?php
      print doug_fir_mobile_menu();
   ?>
   <!-- Main menu navbar -->
   <?php if ($page['nav']): ?>
      <div id='main-menu' role="navigation">
        <?php print render($page['nav']); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>

    <!-- Messages and breadcrumbs -->
    <div id="messages">
      <?php if ($messages){
        print $messages;
      }

      if ($breadcrumb && ! theme_get_setting('hide_breadcrumbs') ) {
        print $breadcrumb;
      }
      ?>
    </div> <!-- messages -->


    <!-- Full width top region -->
    <?php if ($page['full_top']): ?>
      <div class='row-fluid'>
        <div id='full-top' class='span12'>
          <?php print render($page['full_top']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php
       // We split the page into columns so we want to do some calculations
       // We start with 12 columns
       // If there is a right sidebar (sidebar_first) we subtract 3
      $main_cols = 12;
      if ($page['sidebar_first']) {
        $main_cols -= 3;
      }
    ?>

    <!-- Now divide into main column and right sidebar -->
    <div class='row-fluid'>
      <div id="main-column" class='span<?php print $main_cols; ?>' >

        <!-- Features -->
        <?php if ($page['features']): ?>
          <div id='features'>
            <?php print render($page['features']); ?>
          </div> <!-- /features -->
        <?php endif; ?>

        <?php
          // Main column may be further divided if there is a middle sidebar
          // Subtract 3 more columns for middle sidebar (sidebar_second)
        $inner_cols = 12;
          if ($page['sidebar_second']) {
            $inner_cols -= 3;
          }
        ?>
        <div class='row-fluid'>
        <!-- Main content and middle sidebar -->
          <div class='span<?php print $inner_cols; ?>'>

            <!-- Pre-content -->
            <?php if ($page['pre_content']): ?>
              <div id='pre-content'>
                <?php print render($page['pre_content']); ?>
              </div> <!-- /pre-content -->
            <?php endif; ?>

            <!-- Main Content -->
            <?php if ($page['content']): ?>
              <?php print render($title_prefix); ?>
              <?php if ( (($title) && !($is_front)) || $node->type == 'feature_page' ) { ?>
                <h2 class="title" id="page-title">
                  <?php print decode_entities($title); ?>
                </h2>
              <?php } ?>

              <?php print render($title_suffix); ?>


              <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
              <?php endif; ?>

              <div id='content' role="main">
                <?php print render($page['content']); ?>
              </div> <!-- /content -->
            <?php endif; ?>

            <!-- Main page columns  -->
            <?php
              // Calulate the spans depending on the number of columns
              // We will use a fluid row so we'll start with a span of 12
              $cols = 0;
              $span = 'span12';
              if ($page['main_first']) {
                $cols = 1;
              }
              if ($page['main_second']) {
                $cols = 2;
                $span = 'span6';
              }
              if ($page['main_third']) {
                $cols = 3;
                $span = 'span4';
              }

              if ($cols): ?>
                <div class='row-fluid'>

                  <!-- First Column -->
                  <?php if ($page['main_first']): ?>
                    <div id='main-column1' class='<?php print $span ?>'>
                      <?php print render($page['main_first']); ?>
                    </div>
                  <?php endif; ?>

                  <!-- Second Column -->
                  <?php if ($page['main_second']): ?>
                    <div id='main-column2' class='<?php print $span ?>'>
                      <?php print render($page['main_second']); ?>
                    </div>
                  <?php endif; ?>

                  <!-- Third Column -->
                  <?php if ($page['main_third']): ?>
                    <div id='main-column3' class='<?php print $span ?>'>
                      <?php print render($page['main_third']); ?>
                    </div>
                  <?php endif; ?>

              </div> <!-- /row -->
            <?php endif; ?>


            <!-- Post-ontent -->
            <?php if ($page['post_content']): ?>
              <div id='post-content' >
                <div class='content'>
                  <?php print render($page['post_content']); ?>
                </div>
              </div> <!-- /post-content -->
            <?php endif; ?>

          </div> <!-- Content area -->

          <!-- Middle Sidebar -->
          <?php if ($page['sidebar_second']): ?>
            <div id='sidebar-second' class='span3'>
              <div class='content'>
                <?php print render($page['sidebar_second']); ?>
              </div>
            </div>
          <?php endif; ?>

        </div>
      </div> <!-- /Main Columns -->

      <!-- Right Sidebar - sidebar_first -->
      <a name="extras"></a>
      <?php if ($page['sidebar_first']): ?>
        <div id='sidebar-first' class='span3'>
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

    </div> <!-- /main-body-row -->

    <!-- Full width above footer -->
    <?php if ($page['pre_footer']): ?>
      <div class='row-fluid'>
        <div id='pre-footer' class='span12'>
          <?php print render($page['pre_footer']); ?>
        </div>
      </div>
    <?php endif; ?>

  </div> <!-- /container -->

  <!-- Page Footer -->

    <div id='footer'>
      <div class='<?php echo $container ?>'>
        <div class='row-fluid'>
          <div class='span2 contact'>
            <h2>Contact Info</h2>
            <div class="specific-contact">
              <?php echo $footer_message; ?>
            </div>
            <div class="general-contact">
              <a href="//oregonstate.edu/copyright">Copyright</a>
              &copy;<?php echo date("Y"); ?>
              Oregon State University<br />
              <a href="//oregonstate.edu/disclaimer">Disclaimer</a>
            </div>
             <div class="social-media"><?php print doug_fir_social_media(); ?></div>
          </div>
          <div class='span10'>
            <?php if ($page['footer']) {
                print render($page['footer']);
             } ?>
          </div>
        </div>
      </div>
    </div>

</div> <!-- /page-wrapper -->
