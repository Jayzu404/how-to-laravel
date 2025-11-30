<?php

function findArrayByKey(array $arr, $id) {
  foreach ($arr as $data) {
    if ($data['id'] == $id) {
      return $data;
    }
  }

  return null;
}