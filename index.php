<?php defined('_JEXEC') or die;
// Load template framework
include_once JPATH_THEMES . '/' . $this->template . '/framework.php';
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
	<jdoc:include type="head" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <!-- Included CSS Files -->
  <?php if ($customCSS > "0") : ?>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $customCSS ?>">
  <?php endif; ?>

  <?php if ($setWidth) : //TODO only add if not default?>
  <style>
  .row {
    width: <?php echo $setWidth ?>px;
}
</style>
 <?php endif; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $analytics ?>']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
    <?php if ($offCanvas > 0) { ?>
<body class="off-canvas hide-extras slide-nav">
<?php } else {?>
<body>
<?php }?>


<?php
// Load template layout
include_once JPATH_THEMES . '/' . $this->template . '/layouts/'.$templateLayout.'';
?>

  <!-- Initialize JS Plugins -->
  <?php echo join($deferTags, "\n  ");?>

  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/app.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/siegeengine.js"></script>
<?php if ($orbit > 0) : ?>
  <script type="text/javascript">
        $(window).load(function() {
          $('#orbit > div > div').orbit({
             animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
             animationSpeed: 800,                // how fast animtions are
             timer: true,        // true or false to have the timer
             resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
             advanceSpeed: 4000,     // if timer is enabled, time between transitions
             pauseOnHover: false,      // if you hover pauses the slider
             startClockOnMouseOut: false,    // if clock should start on MouseOut
             startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
             directionalNav: true,     // manual advancing directional navs
             captions: true,       // do you want captions?
             captionAnimation: 'fade',     // fade, slideOpen, none
             captionAnimationSpeed: 800,   // if so how quickly should they animate in
             bullets: false,       // true or false to activate the bullet navigation
             bulletThumbs: false,    // thumbnails for the bullets
             bulletThumbLocation: '',    // location from this file where thumbs will be
             afterSlideChange: function(){},   // empty function
             fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
          });
        });
  </script>
<?php endif; ?>

</body>

</html>
