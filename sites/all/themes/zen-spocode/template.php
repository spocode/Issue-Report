<?php

// Page alter
function zen_spocode_preprocess_page(&$variables) {
  if (arg(0) == 'node' && arg(1) == 'add' && arg(2) == 'issue') {
    drupal_set_title(t('Submit an issue'));
  }
}