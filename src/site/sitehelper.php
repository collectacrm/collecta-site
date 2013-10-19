<?php
namespace site;

function to_roman($year) {
  $n = new \RomanNumber\Formatter;
  return $n->formatNumber((int)$year);
}

function output_date($date) {
  $part = date("l jS F ", strtotime($date));
  return $part.to_roman((int)date("Y", strtotime($date)));
}