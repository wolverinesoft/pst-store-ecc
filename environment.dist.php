<?php
define('ENVIRONMENT', '');
define('WEBSITE_HOSTNAME', '');
define('DATABASE_HOSTNAME', '');
define('DATABASE_NAME', '');
define('DATABASE_USER', '');
define('DATABASE_PASS', '');
define('USE_PORTAL_WS', true);
define('WS_HOST', 'portal.powersporttechnologies.com');
define('STORE_NAME', '');
define('MOTORCYCLE_SHOP_NEW', true);
define('FROM_EMAIL_ADDRESS', '');
define('REPLY_TO_EMAIL', FROM_EMAIL_ADDRESS);
define('REPLY_TO_NAME', 'noreply');
define('STYLED_HOSTNAME', '');
define('STORE_DIRECTORY', __DIR__);
define('SEARCH_NOINDEX', true);
define('CORE_DIRECTORY', '');
define('EBAY_TOKEN', '');
define('STORE_BANNER_LIBRARY', __DIR__.'/html/bannerlibrary');

// These are top level category numbers.
// They were factored out of the code. The defaults are probably correct except for VTwin
define('TOP_LEVEL_CAT_STREET_BIKES', 20409);
define('TOP_LEVEL_CAT_ATV_PARTS', 20419);
define('TOP_LEVEL_CAT_UTV_PARTS', 20422);
define('TOP_LEVEL_CAT_VTWIN_PARTS', 69597);
define('TOP_LEVEL_CAT_DIRT_BIKES', 20416);

// These are page IDs. They are referenced at the top of the controllers.
define('TOP_LEVEL_PAGE_ID_VTWIN', 17);
define('TOP_LEVEL_PAGE_ID_ATV', 2);
define('TOP_LEVEL_PAGE_ID_DIRT', 1);
define('TOP_LEVEL_PAGE_ID_STREET', 3);
define('TOP_LEVEL_PAGE_ID_UTV', 4);
define('TOP_LEVEL_PAGE_ID_HOME', 0);


// This disables all the motorcycle functionality and instead it just reverts to a parts store.
define('MOTORCYCLE_SHOP_DISABLE', false);

// this defaults to 8 if not set otherwise
define('FOOTER_PAGE_LIMIT', 8);

// this lets you disable the whole front navigation
define('DISABLE_FRONT_MOTORCYCLE_NAV', false);
define('MOTORCYCLE_SHOP_USED', true);

// this lets you disable this button, or not.
define('ENABLE_OEMPARTS_BUTTON', false);
