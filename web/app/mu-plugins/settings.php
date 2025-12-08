<?php

/**
 * Put things here that should have been settings in WP Admin but isn't.
 */

add_filter("Municipio/Hook/showSiteNameInSearchResult", "__return_false");

add_filter("Municipio/Helper/Post/EmptyExcerpt", "__return_null");
