<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>


<!-- OU Global Header -->
<div class="global_header">
    <div class="global_header-wrapper">
        <ul>
            <li><a class="tip home" href="http://www.ou.edu/web.html" alt="OU Home link"><span>OU Homepage</span></a></li>
            <li><a class="tip search" href="http://www.ou.edu/content/ousearch.html" alt="OU Search link"><span>Search OU</span></a></li>
            <li><a class="tip social" href="http://www.ou.edu/web/socialmediadirectory.html" alt="OU Social Media link"><span>OU Social Media</span></a></li>
            <li class="wordmark">The University of Oklahoma</li>
        </ul>
        <div style="clear:both;"></div>
     </div>
</div>






<div id="top_regions">
<div class="container-fluid">
<div class="row">
	<?php if (!empty($page['logo'])): ?>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<?php print render($page['logo']); ?>
		</div>
	<?php endif; ?>
	

	<?php if (!empty($page['discover'])): ?>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<?php print render($page['discover']); ?>	
		</div>
	<?php endif; ?>

</div>
</div>
</div>


<div class="carousel_inner hidden-xs">
    <?php print render($page['header']); ?>
  </div> <!-- /#Main Carousel -->

<!-- Menu -->
<div class="container-fluid">
	<div class="row">
		<div class="main-menu-container">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> 
					
				</div> <!-- /.navbar-header -->
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<!-- Region for Main Menu -->
					<ul class="nav navbar-nav main-menu">
						<?php if (!empty($page['menu'])): ?>				
							<?php print render($page['menu']); ?>
						<?php endif; ?>	
					</ul>
					
					<!-- Ask Us Chat -->
					<!-- <div class="needs-js">Chat requires JavaScript.</div> -->

					<!-- <div class="libraryh3lp" jid="oulibrarian@chat.libraryh3lp.com" style="display: none;"><a href="#" onclick="window.open('https://us.libraryh3lp.com/chat/oulibrarian@chat.libraryh3lp.com?skin=16224', 'chat', 'resizable=1,width=320,height=200'); return false;"><img class="img-responsive" src="/sites/all/themes/oulib_bootstrap/img/sm_askus.png" /></a></div> -->
					
					<a href="/askus"><img class="img-responsive" src="/sites/all/themes/oulib_bootstrap/img/sm_askus.png" /></a>

					<!-- <div class="libraryh3lp" style="display: none;"><a href="askus"><img class="img-responsive" src="/sites/all/themes/oulib_bootstrap/img/sm_askus_offline.png" /></a></div> -->

				</div> <!-- /.collapse .navbar-collapse -->
				
			</nav>
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->
</div> <!-- /.container-fluid -->

 

<div id="holder">
<div class="container whitebg">
 


<!-- body tag for stick footer -->

<div id="body">

<div class="main-container">

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  
</div>
</div>

<!-- end body tag -->
</div>
 <!-- Library Footer Detail-->
<div class="libfooter_detail">
		<?php if (!empty($page['libfooter_detail'])): ?>				
			<?php print render($page['libfooter_detail']); ?>
		<?php endif; ?>
	</div>

<!-- Library Footer -->
<div class="libfooter">


	<div class="container-fluid">
		<div class="row">
			
			<?php if (!empty($page['libfooter_first'])): ?>
				<div class="col-md-4">
				  <?php print render($page['libfooter_first']); ?>
				</div> <!-- /#libfooter_first -->
			<?php endif; ?> 
			
			<?php if (!empty($page['libfooter_second'])): ?>
				<div class="col-md-4">
				  <?php print render($page['libfooter_second']); ?>
				</div> <!-- /#libfooter_first -->
			<?php endif; ?> 
			  
			<?php if (!empty($page['libfooter_third'])): ?>
				<div class="col-md-4">
				  <?php print render($page['libfooter_third']); ?>
				</div> <!-- /#libfooter_first -->
			<?php endif; ?> 
		   
		</div>
	</div>
</div>


<!-- ou global nav footer -->
  <div class="footer">

<div class="container-fluid">

            <div class="row" style="padding-top: 20px;">

                <div class="col-md-3" style="padding-bottom: 30px;">

                    <img src="/sites/all/themes/oulib_bootstrap/img/footerlogo.png" alt="footerLogo" style="float: left; padding-right: 1em;" />

                    <a href="http://libraries.ou.edu" target="_blank">University Libraries</a><br />

                    401 W. Brooks St<br />

                    Norman, OK 73019<br />

                    (405) 325-3341

                </div>

                <div class="col-md-4">

                    <span style="width: 50%; float: left;">

                        <ul>

                            <li><a href="/contact" title="Contact Us">Contact Us</a></li>

                            <li><a href="/aboutsite" title="About This Site">About This Site</a></li>

                            <li><a href="http://www.ou.edu/publicaffairs/WebPolicies/accessstatement.html" title="Accessibility" target="_blank">Accessibility</a></li>
							
							<li><a href="http://libraries.ou.edu/legacy" title="Accessibility" target="_blank">Legacy Site</a></li>

                        </ul>

                    </span>

                    <div style="width: 50%; float: right;">

                        <ul>

                            

                            <li><a href="http://www.ou.edu/content/publicaffairs/WebPolicies/copyright.html" title="Copyright" target="_blank">Copyright</a></li>

                            <li><a href="http://www.ou.edu/content/web/landing/policy.html" title="Policies" target="_blank">Policies</a></li>

                            <!-- <li><a href="http://ouhsc.edu/hipaa/" title="HIPAA">HIPAA</a></li> -->

                            <li><a href="http://www.ou.edu/content/web/landing/legalnotices.html" title="Legal Notice" target="_blank">Legal Notice</a></li>

                        </ul>

                    </div>

                    <div style="clear: both; padding-bottom: 30px;"></div>

                </div>

                <div class="col-md-3">

                    <div class="social">

                        <ul>

                            <li><a href="https://www.facebook.com/oulibraries" class="facebook" title="facebook" target="_blank"></a></li>

                            <li><a href="https://twitter.com/OU_Libraries" class="twitter" title="twitter" target="_blank"></a></li>

                            <li><a href="https://www.youtube.com/channel/UCvRR9Wy7ECUS0DQbOp2dnbg" class="youtube" title="youtube" target="_blank"></a></li>

                            <li><a href="https://www.instagram.com/oulibraries/" class="instagram" title="instagram" target="_blank"></a></li>

                        </ul>

                    </div>

                </div>


            </div>

            

        </div>



</footer>

<!-- footer -->
</div>


<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0022/3733.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
