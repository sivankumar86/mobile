<?php

/*
$Id: searchform.php 195195 2010-01-19 04:11:37Z jamesgpearce $

$URL: http://plugins.svn.wordpress.org/wordpress-mobile-pack/trunk/themes/mobile_pack_base/searchform.php $

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
<link href="<?php print get_theme_root_uri(); ?>/mobile_pack_base/box.css" rel="stylesheet" type="text/css" />
<div class="lighter">
<form method="get" id="searchform" action="<?php print get_option('home'); ?>/">
	<div class=leftalign> <input type="search"  value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="What can we help you find?" results="0" /></div>
<div class="rightalign">
<input type="image" class="search-round ui-icon ui-icon-delete ui-icon-shadow" name="submit" src="http://img3.targetimg3.com/wcsstore/marketing/com/mobile/images/template/search-icon.png" id="searchsubmit" value="<?php _e('Search', 'wpmp'); ?>"/></div>
</form>
</div>




