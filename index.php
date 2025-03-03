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
      <p>Diese Seite verwendet keine Cookies. Wir können dennoch nicht ausschliessen, dass der Provider technisch notwendige Cookies einfordert. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung zu.</p>
    </div> 
    <span class="more">
      <a href="dsvgo.html">Details</a>
    </span>
    <button onclick='cookieOk()'>OK, ich bin einverstanden.</button>
  </div>
<?php  }; ?>
