<?php

define('DEFAULT_DATETIME_FORMAT', 'Y-m-d H:i:s');
define('DEFAULT_DATE_FORMAT', 'Y-m-d');
define('READABLE_DATETIME_FORMAT', 'M,d Y g:i A');

function now($format = DEFAULT_DATETIME_FORMAT) {
  $date = new DateTime();
  return $date->format($format);
}

function yesterday() {
  return date(DEFAULT_DATETIME_FORMAT, strtotime('-1 days', strtotime(now())));
}

function month() {
  $month = date('m', strtotime(now()));
  return $month;
}

function year() {
  $year = date('Y', strtotime(now()));
  return $year;
}
