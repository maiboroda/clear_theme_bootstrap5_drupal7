<?php

function ctbd_preprocess_page(&$variables, $hook) {
	if (isset($variables['node'])) { 
	    $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
	    $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
	}
}
