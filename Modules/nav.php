
<nav class="nav navbar navbar-default">
<!--Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

<!--Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
// Create the navigation bar here meeting the requirements listed in step 2
 $links = array('Meet the Staff', 'Services', 'Hours and Directions', 'Payment/Insurance', 'Forms');
 sort($links);
 array_unshift($links,"Home");
 $navbar = "<ul class='nav navbar-nav navcenter'>";
 foreach ($links as $link){
     $navbar .= "<li><a href ='.?action=$link' class='navbar-default btn btn-primary'>$link</a></li>";
 }
 $navbar .= '</ul>';
 echo $navbar;
?>
</div><!--    /  .navbar-collapse -->
</nav>

