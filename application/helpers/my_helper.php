<?php

function redirect_if($condition, $url) {
  if ($condition) {
    redirect($url);
  }
}

function guid() {
  if (function_exists('com_create_guid') === true) {
    return trim(com_create_guid(), '{}');
  }

  return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function email_send($from, $to, $subject, $message) {
  if ($from && $to) {
    $obj = &get_instance();
    $obj->load->library('email');

    $obj->email->from($from, '');
    $obj->email->to($to);

    $obj->email->subject($subject);
    $obj->email->message($message);

    $obj->email->send();
  }
}

function session($key, $value = '') {
  $obj = &get_instance();
  if ($value) {
    $obj->session->set_userdata($key, $value);
  }
  return $obj->session->userdata($key);
}

function print_pre($text) {
  echo '<pre>';
  print_r($text);
  echo '</pre>';
}

function trimmed_base_url() {
  return trim(base_url(), '/');
}

function api_get($content, $url) {
  $options = array(
    'http' => array(
      'header' => "Content-type: application/x-www-form-urlencoded\r\n",
      'method' => 'GET',
    ),
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url . '?' . http_build_query($content), false, $context);
  if ($result === false) {
    // Handle error
    //var_dump($result);
  }
  return $result;
}
