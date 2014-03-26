<?php
/*
 * Original Gist by krisanalfa
 * https://gist.github.com/krisanalfa/8315091
 *
 * Customized for use in BackEndManager by Reina Sison-Gagno
 * https://github.com/reine/BackEndManager
 */
?>

<div style="font-size: 0.8em;">
    <?php
        function phpinfo_array() {
            ob_start();
            phpinfo();
            $info_arr = array();
            $info_lines = explode("\n", strip_tags(ob_get_clean(), "<tr><td><h2>"));
            $cat = "General";
            foreach($info_lines as $line) {
                // new cat?
                preg_match("~<h2>(.*)</h2>~", $line, $title) ? $cat = $title[1] : null;
                if(preg_match("~<tr><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td></tr>~", $line, $val)) {
                    $info_arr[$cat][$val[1]] = $val[2];
                } elseif(preg_match("~<tr><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td></tr>~", $line, $val)) {
                    $info_arr[$cat][$val[1]] = array("local" => $val[2], "master" => $val[3]);
                }
            }
            return $info_arr;
        }

        function myprint_r($my_array) {
            if (is_array($my_array)) {
                echo "<table border=1 cellspacing=0 cellpadding=3 width=100%>";
                echo '<tr><td colspan=2 style="background-color:#333333;"><strong><font color=white>&nbsp;</font></strong></td></tr>';
                foreach ($my_array as $k => $v) {
                        echo '<tr><td valign="top" style="width:40px;background-color:#F0F0F0;">';
                        echo '<strong>' . $k . "</strong></td><td>";
                        myprint_r($v);
                        echo "</td></tr>";
                }
                echo "</table>";
                return;
            }
            echo $my_array;
        }

        echo myprint_r(phpinfo_array());
    ?>
</div>