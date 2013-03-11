<?php
function computerdocs_theme_preprocess_page(&$variables) {
  if (isset($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $variables['node']->type);
  }
}
?>