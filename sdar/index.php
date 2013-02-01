<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script>
        $(function () {
				$("#js-mainnav li:hover ul").hover(function () {
                                var navwidth = $("#js-mainnav li:hover ul li").css("width");
				$("#js-mainnav li:hover ul li").css({ 'width': navwidth });
				
			});
                        });
        </script>
    </head>
    <body>
        <img class="js-leftnav" src="images/nav-left.png"><ul id="js-mainnav">
            <li>
                News
            </li>
            <li>
                Real Estate Legislation
                <ul>
                    <li>test</li>
                </ul>
            </li>
            <li>
                Statistics
            </li>
            <li class="last">
                About Us
            </li>
        </ul>
        <img class="js-rightnav" src="images/nav-right.png">
    </body>
</html>
