
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>elFinder 2.0</title>

        <!-- jQuery and jQuery UI (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="elfinder/css/elfinder.min.css">
        <link rel="stylesheet" type="text/css" href="elfinder/css/theme.css">

        <!-- elFinder JS (REQUIRED) -->
        <script src="elfinder/js/elfinder.min.js"></script>

        <!-- elFinder translation (OPTIONAL) -->
        <script src="elfinder/js/i18n/elfinder.ru.js"></script>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript" charset="utf-8">
            // $(document).ready(function() {
            //     $('#elfinder').elfinder({
            //         url : 'php/connector.minimal.php'  // connector URL (REQUIRED)
            //         // , lang: 'ru'                    // language (OPTIONAL)
            //     });
            // });



    // Helper function to get parameters from the query string.
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }

    $().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');

        var elf = $('#elfinder').elfinder({
            url : "elfinder/php/connector.php?folder=files",
            getFileCallback : function(file) {
                window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                window.close();
            },
            resizable: false
        }).elfinder('instance');
    });
</script>
    </head>
    <body>

        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>

    </body>
</html