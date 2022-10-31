<?php

  /**
   * @file
   * Default theme implementation to display a block.
   *
   * Available variables:
   * - $block->subject: Block title.
   * - $content: Block content.
   * - $block->module: Module that generated the block.
   * - $block->delta: An ID for the block, unique within each module.
   * - $block->region: The block region embedding the current block.
   * - $classes: String of classes that can be used to style contextually through
   *   CSS. It can be manipulated through the variable $classes_array from
   *   preprocess functions. The default values can be one or more of the
   *   following:
   *   - block: The current template type, i.e., "theming hook".
   *   - block-[module]: The module generating the block. For example, the user
   *     module is responsible for handling the default user navigation block. In
   *     that case the class would be 'block-user'.
   * - $title_prefix (array): An array containing additional output populated by
   *   modules, intended to be displayed in front of the main title tag that
   *   appears in the template.
   * - $title_suffix (array): An array containing additional output populated by
   *   modules, intended to be displayed after the main title tag that appears in
   *   the template.
   *
   * Helper variables:
   * - $classes_array: Array of html class attribute values. It is flattened
   *   into a string within the variable $classes.
   * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
   * - $zebra: Same output as $block_zebra but independent of any block region.
   * - $block_id: Counter dependent on each block region.
   * - $id: Same output as $block_id but independent of any block region.
   * - $is_front: Flags true when presented in the front page.
   * - $logged_in: Flags true when the current user is a logged-in member.
   * - $is_admin: Flags true when the current user is an administrator.
   * - $block_html_id: A valid HTML ID and guaranteed unique.
   *
   * @see bootstrap_preprocess_block()
   * @see template_preprocess()
   * @see template_preprocess_block()
   * @see bootstrap_process_block()
   * @see template_process()
   *
   * @ingroup templates
   */
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="banner_parent_div container">
    <div class="search_tabs_container">
      <ul id="searchBarTabs" class="nav nav-tabs hidden-xs" style="margin-bottom: 15px;">
        <li class="active">
          <a href="#books" data-toggle="tab" class="books_a_tab js-tabcollapse-panel-heading" data-parent="" aria-expanded="true">Books, Articles & More
            <i class="books_articles_more_btn fa fa-info-circle"></i>
          </a>
        </li>
        <li><a href="#dlocal" data-toggle="tab" class="js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false">Discover Local (Catalog)</a></li>
        <li><a href="#journals" data-toggle="tab" class="js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false">Journals Search</a></li>
        <li><a href="#libSite" data-toggle="tab" class="last_tab_a js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false">Libraries Site Search</a></li>
      </ul>
      <div class="panel-group visible-xs" id="searchBarTabs-accordion"></div>
      <div id="searchBarTabsContent" class="tab-content hidden-xs">
        <div class="tab-pane fade active in" id="books">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" data-search="books">
            <span class="input-group-btn">
                  <button class="btn" type="button">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
          </div>
          <div class="search_link_section">
            <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&mode=advanced">Advanced Search</a>
          </div>
        </div>
        <div class="tab-pane fade" id="dlocal">
          <div class="input-group custom-search-form">
            <input placeholder="Find materials owned by OU Libraries" type="text" class="form-control" data-search="cat">
            <span class="input-group-btn">
              <button class="btn" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
          <div class="search_link_section">
            <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=ou_libguides&vid=OUNEW&lang=en_US&offset=0">Research Guides</a>
            <a href="https://libraries.ou.edu/content/finding-books-shelf">Call Number Locations</a>
            <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=course_reserves&vid=OUNEW&lang=en_US&offset=0">Course Reserves</a>
            <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&search_scope=ou_alma&mode=advanced">Advanced Search</a>
          </div>
        </div>
        <div class="tab-pane fade" id="journals">
          <div class="input-group custom-search-form">
            <input placeholder="Find Journals by title or ISSN" type="text" class="form-control" data-search="journals">
            <span class="input-group-btn">
              <button class="btn" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
          <div class="search_link_section">
            <a href="https://libraries.ou.edu/eresources">Database & E-Reference</a>
            <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=ou_libguides&vid=OUNEW&lang=en_US&offset=0">Research Guides</a>
          </div>
        </div>
        <div class="tab-pane fade" id="libSite">
          <div class="input-group custom-search-form">
            <input placeholder="OU Libraries Site Search" type="text" class="form-control" data-search="lib">
            <span class="input-group-btn">
              <button class="btn" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
           </span>
          </div>
          <div class="search_link_section">
            <a href="https://libraries.ou.edu/locations">Hours & Locations</a>
            <a href="https://libraries.ou.edu/services">Services</a>
            <a style="white-space: nowrap;" href="https://libraries.ou.edu/news-and-events">Libraries Events</a>
            <a href="https://libraries.ou.edu/content/bizzell-memorial-maps">Floor Maps</a>
          </div>
        </div>
      </div>
  <!--    Books, Articles & More-->
  <!--    Discover Local (Catalog)-->
  <!--    Journals Search-->
  <!--    Libraries Site Search-->

  <!--    <div class="input-group custom-search-form">-->
  <!--      <input type="text" class="form-control" data-search="books">-->
  <!--      <span class="input-group-btn">-->
  <!--            <button class="btn" type="button">-->
  <!--              <span class="glyphicon glyphicon-search"></span>-->
  <!--            </button>-->
  <!--          </span>-->
  <!--    </div>-->
  <!--    <div class="search_link_section">-->
  <!--      <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&mode=advanced">Advanced Search</a>-->
  <!--    </div>-->

  <!--    <div class="input-group custom-search-form">-->
  <!--      <input placeholder="Find materials owned by OU Libraries" type="text" class="form-control" data-search="cat">-->
  <!--      <span class="input-group-btn">-->
  <!--            <button class="btn" type="button">-->
  <!--              <span class="glyphicon glyphicon-search"></span>-->
  <!--            </button>-->
  <!--          </span>-->
  <!--    </div>-->
  <!--    <div class="search_link_section">-->
  <!--      <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=ou_libguides&vid=OUNEW&lang=en_US&offset=0">Research Guides</a>-->
  <!--      <a href="https://libraries.ou.edu/content/finding-books-shelf">Call Number Locations</a>-->
  <!--      <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=course_reserves&vid=OUNEW&lang=en_US&offset=0">Course Reserves</a>-->
  <!--      <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&search_scope=ou_alma&mode=advanced">Advanced Search</a>-->
  <!--    </div>-->

  <!--    <div class="input-group custom-search-form">-->
  <!--      <input placeholder="Find Journals by title or ISSN" type="text" class="form-control" data-search="journals">-->
  <!--      <span class="input-group-btn">-->
  <!--            <button class="btn" type="button">-->
  <!--              <span class="glyphicon glyphicon-search"></span>-->
  <!--            </button>-->
  <!--          </span>-->
  <!--    </div>-->
  <!--    <div class="search_link_section">-->
  <!--      <a href="https://libraries.ou.edu/eresources">Database & E-Reference</a>-->
  <!--      <a href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=ou_libguides&vid=OUNEW&lang=en_US&offset=0">Research Guides</a>-->
  <!--    </div>-->

  <!--    <div class="input-group custom-search-form">-->
  <!--      <input placeholder="OU Libraries Site Search" type="text" class="form-control" data-search="lib">-->
  <!--      <span class="input-group-btn">-->
  <!--            <button class="btn" type="button">-->
  <!--              <span class="glyphicon glyphicon-search"></span>-->
  <!--            </button>-->
  <!--         </span>-->
  <!--    </div>-->
  <!--    <div class="search_link_section">-->
  <!--      <a href="https://libraries.ou.edu/locations">Hours & Locations</a>-->
  <!--      <a href="https://libraries.ou.edu/services">Services</a>-->
  <!--      <a href="https://libraries.ou.edu/news-and-events">Libraries Events</a>-->
  <!--      <a href="https://libraries.ou.edu/content/bizzell-memorial-maps">Floor Maps</a>-->
  <!--    </div>-->
    </div>
  </div>
</section>