
<div class="col-md-8">
<?php

if(isset($post->post_image)){
    printf("<div class='text-center'><img src='%s' width='400px'></div>",$this->link($post->post_image),);
}
printf("<h1 class='text-center'>%s</h1>",$post->post_title);
printf("<p>%s</p>",$post->post_details);
?>
</div>

<?php include "sidebar.php"; ?>
<?php include "footer.php"; ?>