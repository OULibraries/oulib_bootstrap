jQuery(document).ready(function ($) {
  var index = 0;
  var $tabs = $('.js-tabcollapse-panel-heading');

  $tabs.bind({
    // on keydown,
    // determine which tab to select
    keydown: function(ev){
      var LEFT_ARROW = 37;
      var UP_ARROW = 38;
      var RIGHT_ARROW = 39;
      var DOWN_ARROW = 40;
      var k = ev.which || ev.keyCode;

      // if the key pressed was an arrow key
      if (k >= LEFT_ARROW && k <= DOWN_ARROW){
        // move left one tab for left and up arrows
        if (k == LEFT_ARROW || k == UP_ARROW){
          if (index > 0) {
            index--;
          }
          // unless you are on the first tab,
          // in which case select the last tab.
          else {
            index = $tabs.length - 1;
          }
        }

        // move right one tab for right and down arrows
        else if (k == RIGHT_ARROW || k == DOWN_ARROW){
          if (index < ($tabs.length - 1)){
            index++;
          }
          // unless you're at the last tab,
          // in which case select the first one
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
    click: function(ev){
      index = $.inArray(this, $tabs.get());
      setFocus();
      ev.preventDefault();
    }
  });

  var setFocus = function(){
    // undo tab control selected state,
    // and make them not selectable with the tab key
    // (all tabs)
    $tabs.attr(
      {
        tabindex: '-1',
        'aria-selected': 'false'
      }).removeClass('selected');

    // hide all tab panels.
    $('.tab-panel').removeClass('current');

    // make the selected tab the selected one, shift focus to it
    $($tabs.get(index)).attr(
      {
        tabindex: '0',
        'aria-selected': 'true'
      }).addClass('selected').focus();

    // handle parent <li> current class (for coloring the tabs)
    $($tabs.get(index)).parent().parent().parent().siblings().removeClass('current');
    $($tabs.get(index)).parent().parent().parent().addClass('current');

    // add a current class also to the tab panel
    // controlled by the clicked tab
    $($($tabs.get(index)).attr('href')).addClass('current');
  };

  // init tab collapse functionality for small screens
  $('#searchBarTabs').tabCollapse();

  // called when tabs are collapsed to accordions
  // $('#searchBarTabs').on('shown-accordion.bs.tabcollapse', function() {});

  // touch screen device
  // if(window.matchMedia("(pointer: coarse)").matches) {
  //   $('[data-toggle="tooltip"]').tooltip({
  //     trigger: 'click'
  //   });
  // } else {
  //   $('[data-toggle="tooltip"]').tooltip({});
  // }

  // $(document).on('click', '#searchBarTabs-accordion a#tab_books', function(e){
  //   if (e.target.className == "fa fa-info-circle") {
  //     e.preventDefault();
  //     e.stopPropagation();
  //   }
  // })

  // build urls and navigate based on search button clicked
  $('.search_btn').click(function(event) {
    // event.stopPropagation();
    // event.preventDefault();
    var search_clicked = $(this).data('search');
    var search_value = $(".custom-search-form").find(`input[data-search='${search_clicked}']`).val();

    var search_url = "";
    switch (search_clicked) {
      case 'books':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains,"+search_value+"&tab=default_tab&search_scope=default_scope&vid=OUNEW&lang=en_US&offset=0&conVoc=false");
        break;
      case 'dlocal':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains,"+search_value+"&tab=default_tab&search_scope=ou_alma&vid=OUNEW&lang=en_US&offset=0");
        break;
      case 'journals':
        search_url = encodeURI("https://ou-primo.hosted.exlibrisgroup.com/primo-explore/jsearch?query=any,contains,"+search_value+"&vid=OUNEW&lang=en_US");
        break;
      case 'libSite':
        search_url = encodeURIComponent("/search/node/"+search_value);
        break;
      default:
        search_url = "";
    }

    if (search_url !== "") {
      $('<a href="'+search_url+'" target="blank"></a>')[0].click();
    }
  });
});