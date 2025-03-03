<?php 
  if( isset($_COOKIE['setCookieHinweis']) ) { 
    $showPopup = false;
  } else {
    $showPopup = true;
  }
?>

<?php if($showPopup) { ?>
  <div id="cookie-popup">
    <div class="hinweis">
      <p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
    </div> 
    <span class="more">
      <a href="datenschutz.php">Details</a>
    </span>
    <button onclick='cookieOk()'>OK, ich bin einverstanden.</button>
  </div>
<?php  }; ?>
