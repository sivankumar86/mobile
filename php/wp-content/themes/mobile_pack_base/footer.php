<?php

/*
$Id: footer.php 195195 2010-01-19 04:11:37Z jamesgpearce $

$URL: http://plugins.svn.wordpress.org/wordpress-mobile-pack/trunk/themes/mobile_pack_base/footer.php $

Copyright (c) 2009 James Pearce & friends, portions mTLD Top Level Domain Limited, ribot, Forum Nokia

Online support: http://wordpress.org/extend/plugins/wordpress-mobile-pack/

This file is part of the WordPress Mobile Pack.

The WordPress Mobile Pack is Licensed under the Apache License, Version 2.0
(the "License"); you may not use this file except in compliance with the
License.

You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed
under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
CONDITIONS OF ANY KIND, either express or implied. See the License for the
specific language governing permissions and limitations under the License.
*/

?>

<div id="footer">
<div id="footernavcontainer">
<ul id="footernavlist"><li>
<a href="https://www.facebook.com/pages/FacialsAndWaxcom/142917895770339?ref=hl" id="current"><img class='fb' src='<?php print get_theme_root_uri(); ?>/mobile_pack_base/img/fb.png'/></a></li>
<li><a href="https://twitter.com/FacialsandWax"><img class='tw'  src='<?php print get_theme_root_uri(); ?>/mobile_pack_base/img/tw.png'/></a></li>
<li><a href="https://www.youtube.com/user/FacialsandWax"><img  class="youtube" src='<?php print get_theme_root_uri(); ?>/mobile_pack_base/img/youtube.png'/></a></li>
<li><a href="http://pinterest.com/facialsandwax/boards/"><img class='ping' src='<?php print get_theme_root_uri(); ?>/mobile_pack_base/img/pin.png'/></a></li> 
<?php
$slug = basename(get_permalink());
 if($slug !="fhome"){
?>
<li><a class='lets' href='https://clients.mindbodyonline.com/ASP/home.asp?studioid=33113' target='_blank'><img class='lets-image' src='<?php print get_theme_root_uri(); ?>/mobile_pack_base/img/lets-btn.png'/></a></li>
<?php
}
?>
</ul>
</div>
      </div>
    </div>

  </body>
</html>
