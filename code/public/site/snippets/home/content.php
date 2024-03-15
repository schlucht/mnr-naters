<?php

echo '<pre>';
    print_r($page->children()->listed());
    print_r($page->children()->children()->listed());
echo '</pre>';