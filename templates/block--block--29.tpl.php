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
      <ul role='tablist' id="searchBarTabs" class="nav nav-tabs hidden-xs">
        <li class="active">
          <a id="tab_books" role='tab' aria-controls="books" href="#books" data-toggle="tab" class="books_a_tab js-tabcollapse-panel-heading" data-parent="" aria-expanded="true" aria-selected="true">Discover
          </a>
        </li>
        <li><a id="tab_dlocal" role='tab' aria-controls="dlocal" href="#dlocal" data-toggle="tab" class="js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false" aria-selected="false" tabindex='-1'>Local Catalog</a></li>
        <li><a id="tab_journals" role='tab' aria-controls="journals" href="#journals" data-toggle="tab" class="js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false" aria-selected="false" tabindex='-1'>Journals Search</a></li>
        <li><a id="tab_libSite" role='tab' aria-controls="libSite" href="#libSite" data-toggle="tab" class="last_tab_a js-tabcollapse-panel-heading collapsed" data-parent="" aria-expanded="false" aria-selected="false" tabindex='-1'>Libraries Site Search</a></li>
      </ul>
      <div class="panel-group visible-xs" id="searchBarTabs-accordion"></div>
      <div id="searchBarTabsContent" class="tab-content hidden-xs">
        <div aria-labelledby="tab_books" role='tabpanel' class="tab-pane fade active in" id="books">
          <div class="input-group grid-container custom-search-form">
            <form role='search' action="/" method="get" class="search_form">
              <label for='book-search' class="input-group-label">
                <span class='visually-hidden'>Search for books articles and more</span>
              </label>
              <input placeholder="Find books, articles, and more" type='search' data-search="books" id='book-search' class="search_box_input input-group-field form-control">
              <span class="input-group-btn">
                <button class="btn search_btn" data-search="books" type="submit">
                  <span class='visually-hidden'>submit search for books articles and more</span>
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </form>
          </div>
          <div class="search_link_section">
            <a aria-label="Advanced Search for Books Articles and More (external link)" target="_blank" href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&mode=advanced">Advanced Search</a>
          </div>
        </div>
        <div aria-labelledby="tab_dlocal" role='tabpanel' class="tab-pane fade" id="dlocal">
          <div class="input-group grid-container custom-search-form">
            <form role='search' action="/" method="get" class="search_form">
              <label for='dlocal-search' class="input-group-label">
                <span class='visually-hidden'>Search for materials owned by ou libraries</span>
              </label>
              <input placeholder="Find materials owned by OU Libraries" type='search' data-search="dlocal" id='dlocal-search' class="search_box_input input-group-field form-control">
              <span class="input-group-btn">
                <button class="btn search_btn" data-search="dlocal" type="submit">
                  <span class='visually-hidden'>Search for materials owned by ou libraries</span>
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </form>
          </div>
          <div class="search_link_section">
            <a aria-label="OU Research Guides (external link)" target="_blank" href="https://guides.ou.edu/home">Research Guides</a>
            <a aria-label="Book Call Number Locations" href="https://libraries.ou.edu/content/finding-books-shelf">Call Number Locations</a>
            <a aria-label="Advanced Search for Discover Local (external link)" target="_blank" href="https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=OUNEW&openExplore=true&lang=en_US&search_scope=ou_alma&mode=advanced">Advanced Search</a>
          </div>
        </div>
        <div aria-labelledby="tab_journals" role='tabpanel' class="tab-pane fade" id="journals">
          <div class="input-group grid-container custom-search-form">
            <form role='search' action="/" method="get" class="search_form">
              <label for='journals-search' class="input-group-label">
                <span class='visually-hidden'>Search for Journals and Newspapers by title or ISSN</span>
              </label>
              <input placeholder="Find journals and newspapers by title or ISSN" type='search' data-search="journals" id='journals-search' class="search_box_input input-group-field form-control">
              <span class="input-group-btn">
                <button class="btn search_btn" data-search="journals" type="submit">
                  <span class='visually-hidden'>Search for Journals and Newspapers by title or ISSN</span>
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </form>
          </div>
          <div class="search_link_section">
            <a aria-label="OU Libraries Database & E-Reference Search page" href="https://libraries.ou.edu/eresources">Database & E-Reference</a>
            <a aria-label="OU Research Guides (external link)" target="_blank" href="https://guides.ou.edu/home">Research Guides</a>
          </div>
        </div>
        <div aria-labelledby="tab_libSite" role='tabpanel' class="tab-pane fade" id="libSite">
          <div class="input-group grid-container custom-search-form">
            <form role='search' action="/" method="get" class="search_form">
              <label for='libSite-search' class="input-group-label">
                <span class='visually-hidden'>Search for content on the OU libraries Site</span>
              </label>
              <input placeholder="OU Libraries site search" type='search' data-search="libSite" id='libSite-search' class="search_box_input input-group-field form-control">
              <span class="input-group-btn">
                <button class="btn search_btn" data-search="libSite" type="submit">
                  <span class='visually-hidden'>Search for content on the OU libraries Site</span>
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </form>
          </div>
          <div class="search_link_section">
            <a href="https://libraries.ou.edu/locations">Hours & Locations</a>
            <a href="https://libraries.ou.edu/services">Services</a>
            <a style="white-space: nowrap;" href="https://libraries.ou.edu/news-and-events">Libraries Events</a>
            <a href="https://libraries.ou.edu/content/bizzell-memorial-maps">Floor Maps</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>