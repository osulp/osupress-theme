<?php
      // We hide the comments and links now so that we can render them later.
      //print render($content);
     //print_r($content);
    ?>
    
    <?php  
        $dirtyUrl = $content['field_press_author_picture']["#items"][0][uri];
        $pattern = 'authors/';
        $cleanURL = str_replace($pattern, "", $dirtyUrl);
        




        $text = strip_tags($content['field_press_author_biography']["#items"][0]['value'],"<style>");

        $substring = substr($text,strpos($text,"<!--"),strpos($text,"-->")+2);
        
        $text = str_replace($substring,"",$text);
        $text = str_replace(array("\t","\r","\n"),"",$text);
        $text = trim($text);


        //print_r( $cleanURL);
    ?>
    

<?php if($content["field_press_author_picture"]):?>
    <div class="span5 sm-12 author-image">
      <img src="<?php print file_create_url($cleanURL); ?>">
    </div>
    <div class="span7 sm-12">
        <?php krumo($content['field_press_author_biography']); ?>
        
        <?php print( $content['field_press_author_biography']["#items"][0]['value'] ) ?>
    </div>
<?php else:?>
    <div class="span10 sm-12">
    <?php print( $text ) ?>
    <h3> this is the real content for the author bio </h3>
    <?php print( $content['field_press_author_biography']["#items"][0]['value'] ) ?>
    </div>
<?php endif?>

