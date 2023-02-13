jQuery(document).ready(function ($) {
  var index = 0;
  var $tabs = $('.js-tabcollapse-panel-heading');

  $tabs.bind({
    // on keydown, determine which tab to select
    keydown: function(ev) {
      var LEFT_ARROW = 37;
      var UP_ARROW = 38;
      var RIGHT_ARROW = 39;
      var DOWN_ARROW = 40;
      var k = ev.which || ev.keyCode;

      // if the key pressed was an arrow key
      if (k >= LEFT_ARROW && k <= DOWN_ARROW) {
        // move left one tab for left and up arrows
        if (k == LEFT_ARROW || k == UP_ARROW) {
          if (index > 0) {
            index--;
          }
          // unless you are on the first tab, in which case select the last tab.
          else {
            index = $tabs.length - 1;
          }
        }

        // move right one tab for right and down arrows
        else if (k == RIGHT_ARROW || k == DOWN_ARROW){
          if (index < ($tabs.length - 1)){
            index++;
          }
          // unless you're at the last tab, in which case select the first one
          else {
            index = 0;
          }
        }

        // trigger a click event on the tab to move to
        $($tabs.get(index)).click();
        ev.preventDefault();
      }
    },

    // just make the clicked tab the selected one
    click: function(ev) {
      index = $.inArray(this, $tabs.get());
      setFocus();
      ev.preventDefault();
    }
  });

  var setFocus = function(){
    // undo tab control selected state, and make them not selectable with the tab key (all tabs)
    $tabs.attr({
      tabindex: '-1',
      'aria-selected': 'false'
    }).removeClass('selected');

    // hide all tab panels.
    $('.tab-panel').removeClass('current');

    // make the selected tab the selected one, shift focus to it
    $($tabs.get(index)).attr({
      tabindex: '0',
      'aria-selected': 'true'
    }).addClass('selected').focus();

    // handle parent <li> current class (for coloring the tabs)
    $($tabs.get(index)).parent().parent().parent().siblings().removeClass('current');
    $($tabs.get(index)).parent().parent().parent().addClass('current');

    // add a current class also to the tab panel controlled by the clicked tab
    $($($tabs.get(index)).attr('href')).addClass('current');
  };

  // init tab collapse functionality for small screens
  $('#searchBarTabs').tabCollapse();

  // build urls and navigate based on search button clicked
  $(".search_form").submit(function(event) {
    event.preventDefault();
    var search_clicked = $(this[1]).data('search');
    var search_value = $(".custom-search-form").find(`input[data-search='${search_clicked}']`).val().trim();

    if (search_value !== '') {
      var search_url = "";
      switch (search_clicked) {
        case 'books':
          search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains," + search_value + "&tab=default_tab&search_scope=default_scope&vid=OUNEW&lang=en_US&offset=0&conVoc=false");
          break;
        case 'dlocal':
          search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains," + search_value + "&tab=default_tab&search_scope=ou_alma&vid=OUNEW&lang=en_US&offset=0");
          break;
        case 'journals':
          search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/jsearch?query=any,contains," + search_value + "&tab=jsearch_slot&vid=OUNEW&lang=en_US&offset=0&journals=any," + search_value);
          break;
        case 'libSite':
          var protocol = location.protocol;
          var domain = location.hostname;
          search_url = encodeURI(protocol + "//" + domain + "/search/node/" + search_value);
          break;
        default:
          search_url = "";
      }

      if (search_url !== "") {
        if (search_clicked === "libSite") {
          window.open(search_url, '_self');
        }
        else {
          window.open(search_url, '_blank');
        }
      }
    }
  });
});