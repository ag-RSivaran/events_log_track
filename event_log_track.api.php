<?php

/**
 * @file
 * Documentation for the Event Log module.
 */

/**
 * Returns event log handlers.
 *
 * @return array
 *   An associative array, keyed by event type, and valued by handler info:
 *   - {string} title
 *     The title that describes the events logged by this handler.
 *     This handler's 'form_submit_callback' callback will be notified when a
 *     form is submitted that has an id as specified in this array. Optional.
 *   - {array} form_ids_regexp
 *     The same as form_ids, but instead of identical matches regular
 *     expressions can be specified.
 *   - {string} form_submit_callback
 *     Callback that's called when a form is submitted with a form id as
 *     specified in form_ids. The callback function profile:
 *
 *   Optional. Notice that events can also be manually created using the
 *   event_log_track_save function.
 */
function hook_event_log_track_handlers() {
  $handlers = array();

  return $handlers;
}
