    <a name="top"></a>
    <?php print displayStatus();?>
    <?php print (isset($content)) ? $content : NULL; ?>
    <?php
    if( isset($page)){
    if( isset($module)){
            $this->load->view($module.'/'.$page);
        } else {
            $this->load->view($page);
        }}
    ?>