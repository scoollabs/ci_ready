<?php

define('DEFAULT_DATE_FORMAT', 'Y-m-d H:i:s');

function now() {
  $date = new DateTime();
  return $date->format(DEFAULT_DATE_FORMAT);
}

function month() {
  $month = date('m', strtotime(now()));
  return $month;
}

function year() {
  $year = date('Y', strtotime(now()));
  return $year;
}