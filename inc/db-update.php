<?php
/**
 * Contains the code to install and update the wp_options fields
 * @return boolean
 * @todo global var for version number
 * @since 2.1.4
 */
function jqu_db_outdated() {
  if ( version_compare( get_option( 'jqu_db_version' ), '2.1.4', '<=' ) ) {
    return true;
  }
  else {
    return false; 
  }
}
/**
 * If database is outdated, run update
 * @since 2.1.4
 */ 
if ( jqu_db_outdated ) { 
  jqu_db_update();
}

/**
 * Is database up to date?
 * @return boolean
 * @since 2.1.4
 */ 
function jqu_db_up2date() {
  if ( version_compare( get_option( 'jqu_db_version' ), '2.1.4', '<=' ) ) {
    return true;
  }
}

/**
 * On Install
 * @todo do something if no version option was detected
 */
if ( !get_option( 'jqu_db_version' ) ) {
  add_option( 'jqu_db_version', '2.1.4' );
}

/**
 * On Update
 * @return void
 */
 function jqu_db_update() {
   update_option( 'jqu_db_version', '2.1.4' );
 }
