<?php

//activer la possibilité d'ajoiuter des miniature dans nos articles

// hook =>
add_action("after_setup_theme" , function(){
    add_theme_support("post-thumbnails");
});