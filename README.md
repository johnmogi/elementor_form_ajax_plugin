## this plugin was constructed as a job task...

there are 3 actions that are needed here.

1st - hook into a simple elementor form and apply the calculations attached in the included js file.

2nd - hook into the second elementor form and send it's data to a webhook.


the building process:
1. mkdir plugins/name_of_plugin
2. cd nop + touch name_of_plugin.php
3. plugin info: 
<?php
/**
 * Plugin Name: john mogi elementor form
 * Plugin URI: https://www.johnmogi.com
 * Description: a simple plugin to hook into elementor forms, send data via a webhook and do some demo calculations.
 * Version: 1.0
 * Author: John Mogi
 * Author URI: https://www.johnmogi.com
 */

<!-- ?> -->

 0.  the actual data:
