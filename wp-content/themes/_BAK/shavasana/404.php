<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<?php
echo "<!DOCTYPE html>\n"; 
echo "<html lang=\"en\">\n"; 
echo "    <head>\n"; 
echo "        <meta charset=\"utf-8\">\n"; 
echo "        <title>Page Not Found :(</title>\n"; 
echo "        <style>\n"; 
echo "            ::-moz-selection {\n"; 
echo "                background: #b3d4fc;\n"; 
echo "                text-shadow: none;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            ::selection {\n"; 
echo "                background: #b3d4fc;\n"; 
echo "                text-shadow: none;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            html {\n"; 
echo "                padding: 30px 10px;\n"; 
echo "                font-size: 20px;\n"; 
echo "                line-height: 1.4;\n"; 
echo "                color: #737373;\n"; 
echo "                background: #f0f0f0;\n"; 
echo "                -webkit-text-size-adjust: 100%;\n"; 
echo "                -ms-text-size-adjust: 100%;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            html,\n"; 
echo "            input {\n"; 
echo "                font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            body {\n"; 
echo "                max-width: 500px;\n"; 
echo "                _width: 500px;\n"; 
echo "                padding: 30px 20px 50px;\n"; 
echo "                border: 1px solid #b3b3b3;\n"; 
echo "                border-radius: 4px;\n"; 
echo "                margin: 0 auto;\n"; 
echo "                box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;\n"; 
echo "                background: #fcfcfc;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            h1 {\n"; 
echo "                margin: 0 10px;\n"; 
echo "                font-size: 50px;\n"; 
echo "                text-align: center;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            h1 span {\n"; 
echo "                color: #bbb;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            h3 {\n"; 
echo "                margin: 1.5em 0 0.5em;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            p {\n"; 
echo "                margin: 1em 0;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            ul {\n"; 
echo "                padding: 0 0 0 40px;\n"; 
echo "                margin: 1em 0;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            .container {\n"; 
echo "                max-width: 380px;\n"; 
echo "                _width: 380px;\n"; 
echo "                margin: 0 auto;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            /* google search */\n"; 
echo "\n"; 
echo "            #goog-fixurl ul {\n"; 
echo "                list-style: none;\n"; 
echo "                padding: 0;\n"; 
echo "                margin: 0;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-fixurl form {\n"; 
echo "                margin: 0;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-wm-qt,\n"; 
echo "            #goog-wm-sb {\n"; 
echo "                border: 1px solid #bbb;\n"; 
echo "                font-size: 16px;\n"; 
echo "                line-height: normal;\n"; 
echo "                vertical-align: top;\n"; 
echo "                color: #444;\n"; 
echo "                border-radius: 2px;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-wm-qt {\n"; 
echo "                width: 220px;\n"; 
echo "                height: 20px;\n"; 
echo "                padding: 5px;\n"; 
echo "                margin: 5px 10px 0 0;\n"; 
echo "                box-shadow: inset 0 1px 1px #ccc;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-wm-sb {\n"; 
echo "                display: inline-block;\n"; 
echo "                height: 32px;\n"; 
echo "                padding: 0 10px;\n"; 
echo "                margin: 5px 0 0;\n"; 
echo "                white-space: nowrap;\n"; 
echo "                cursor: pointer;\n"; 
echo "                background-color: #f5f5f5;\n"; 
echo "                background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);\n"; 
echo "                background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);\n"; 
echo "                background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);\n"; 
echo "                background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);\n"; 
echo "                -webkit-appearance: none;\n"; 
echo "                -moz-appearance: none;\n"; 
echo "                appearance: none;\n"; 
echo "                *overflow: visible;\n"; 
echo "                *display: inline;\n"; 
echo "                *zoom: 1;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-wm-sb:hover,\n"; 
echo "            #goog-wm-sb:focus {\n"; 
echo "                border-color: #aaa;\n"; 
echo "                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);\n"; 
echo "                background-color: #f8f8f8;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            #goog-wm-qt:hover,\n"; 
echo "            #goog-wm-qt:focus {\n"; 
echo "                border-color: #105cb6;\n"; 
echo "                outline: 0;\n"; 
echo "                color: #222;\n"; 
echo "            }\n"; 
echo "\n"; 
echo "            input::-moz-focus-inner {\n"; 
echo "                padding: 0;\n"; 
echo "                border: 0;\n"; 
echo "            }\n"; 
echo "        </style>\n"; 
echo "    </head>\n"; 
echo "    <body>\n"; 
echo "        <div class=\"container\">\n"; 
echo "            <h1>Not found <span>:(</span></h1>\n"; 
echo "            <p>Sorry, but the page you were trying to view does not exist.</p>\n"; 
echo "            <p>It looks like this was the result of either:</p>\n"; 
echo "            <ul>\n"; 
echo "                <li>a mistyped address</li>\n"; 
echo "                <li>an out-of-date link</li>\n"; 
echo "            </ul>\n"; 
echo "            <script>\n"; 
echo "                var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;\n"; 
echo "            </script>\n"; 
echo "            <script src=\"//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js\"></script>\n"; 
echo "        </div>\n"; 
echo "    </body>\n"; 
echo "</html>\n"; 
echo "\n";
?>

<?php get_footer(); ?>


