(function($){
  "use strict";
  $(function()
  {
    var kimia1 = {
      moveNavbar : function() {
        if ($(window).width() <= 768) {
          var navbarToggle = $('.menu .navbar-toggle');
          var buttonToggle = $('#header .navbar-toggle');
          navbarToggle.insertAfter('.header-right .login');
          buttonToggle.css({
            "right" : "30%" , 
            "margin-top" : "-8px"
          });
        }
      },
      w3cDisplay : function() {     
        $( ".icon-setting" ).click(function() {
        $( "#w3c-content" ).slideToggle(function() {
          // Animation complete.
        });
      });
      },
      w3cFunction: function() {
            // w3c Color
            var w3cColor = $('.ikon-jkt-w3c-color'),
                w3cFont = $('.ikon-jkt-w3c-font');

            w3cColor.on('click', function() {
                var color = ($(this).prop('class')).replace(/ikon-jkt-w3c-color|ikon-w3c|-| /g, '');
                switch (color) {
                    case 'first':
                        {
                            w3cLoading(w3cColor, 'color', '#FF9902', '#000');
                            break;
                        }
                    case 'second':
                        {
                            w3cLoading(w3cColor, 'color', '#E72323', '#fff');
                            break;
                        }
                    case 'third':
                        {
                            w3cLoading(w3cColor, 'color', '#174E69', '#fff');
                            break;
                        }
                    case 'reset':
                        {
                            w3cLoading(w3cColor, 'reset-color');
                            break;
                        }
                }

            });

            w3cFont.on('click', function() {
                var font = ($(this).prop('class')).replace(/ikon-jkt-w3c-font|ikon-w3c|-| /g, '');
                switch (font) {
                    case 'small':
                        {
                            w3cLoading(w3cFont, 'font', -1);
                            break;
                        }
                    case 'normal':
                        {
                            w3cLoading(w3cFont, 'reset-font');
                            break;
                        }
                    case 'big':
                        {
                            w3cLoading(w3cFont, 'font', +1);
                            break;
                        }
                }
            });
        },
       
    };
    
    kimia1.moveNavbar();
    kimia1.w3cDisplay();
    kimia1.w3cFunction();

  });

   function w3cLoading(con, w3c, t, bg) {
        var place = $('<div id="w3c-loading">Loading...</div>'),
            posLeft = con.offset().left,
            posTop = con.offset().top + 5;

        place.css({
            'left': posLeft,
            'top': posTop
        }).appendTo('body').fadeIn(function() {
            switch (w3c) {
                case 'color':
                    {
                        setColor(t, bg);
                        break;
                    }
                case 'font':
                    {
                        w3cText(t);
                        break;
                    }
                case 'reset-color':
                    {
                        setColor('reset');
                        break;
                    }
                case 'reset-font':
                    {
                        w3cText('reset');
                        break;
                    }
            }
            $('#w3c-loading').remove();
        });
    }

    function setColor(color, bg) {
        var storeListOfElements = ["P", "LI", "A", "H1", "H2", "H3", "H4", "H5", "H6", "SPAN", "TD", "TH", "DT", "DD", "DL"];
        $("*").each(function(i, j) {
            if (($(this).css("color") != undefined) && (storeListOfElements.indexOf($(this).prop("tagName")) != -1)) {
                if (color == 'reset') {
                    $(this).css({
                        "color": "",
                        "background-color": ""
                    });
                } else {
                    if ($(this).html().length && $(this).html() != '&nbsp;') {
                        $(this).css({
                            "color": color,
                            "background-color": bg
                        });                        
                    }
                }
            }
        });
    }

    function w3cText(x) {
        var listOfElements = ["P", "LI", "A", "H1", "H2", "H3", "H4", "H5", "H6", "SPAN", "TD", "TH", "DT", "DD", "DL"];
        $("*").each(function(i, j) {
            if (($(this).css("font-size") != undefined) && (listOfElements.indexOf($(this).prop("tagName")) != -1)) {
                if (x == 'reset') {
                    $(this).css("font-size", "");
                } else {
                    var getSize = $(this).css("font-size");
                    var currentSize = getSize.replace("px", "");
                    if (currentSize >= 9 && currentSize <= 17) {
                        $(this).css("font-size", parseInt(currentSize) + x + "px");
                    }
                }
            }
        });
    }
    
})(jQuery);