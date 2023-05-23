<?php
/**
 * @package Pgncoments
 */
/*
Plugin Name: Pgncoments
Plugin URI: https://github.com/bm33m/coments.git
Description: Plugin to save the post comments.
Version: 1.0.0
Author: Bm33m
Author URI: https://github.com/bm33m/
License: GPLv2 or later
Text Domain: Pgncoments
*/


function wppgn_comments($content) {
  $apiaddress = "http://localhost:8000/comments";
  $content .= '<hr>
  <b>Comments:</b>
  <div class="dvregister">
    <form class="frmreg" action="http://127.0.0.1:8000/gcomments" method="get">
      <input type="hidden" name="_token" id="token">
      <input type="text" name="token2" id="token2">
      <div id="token3">
      </div>
      <div class="dvreg">
          <label>Username:</label><br>
          <input class="cinpt" type="text" id="username" name="username" placeholder="username" value="" maxlength="30" required/>
      </div>
      <div class="dvreg">
          <label>Email:</label><br>
          <input class="cinpt" type="email" id="email" name="email" placeholder="email" value="" maxlength="30" required />
      </div>
      <div class="dvreg">
          <label>Topic:</label><br>
          <input class="cinpt" type="text" id="topic" name="topic" placeholder="topic" value="" maxlength="255"/>
      </div>
      <div class="dvreg">
          <label>Comment:</label><br>
          <textarea id="comment" name="comment" placeholder="comment." value="" required></textarea>
      </div>
      <p><input type="submit" value="OK"/></p>
    </form>
  </div>
  <hr>';
  return $content;
}

add_filter('the_content', 'wppgn_comments');

function add_pluggin_scripts() {
  $url_pluginx = plugins_url();
  wp_enqueue_script('app', $url_pluginx.'/pgncoments/js/app.js', array(), 0.1, true);
}
add_action('wp_enqueue_scripts', 'add_pluggin_scripts');
