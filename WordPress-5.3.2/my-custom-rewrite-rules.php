<?php

add_action('init', function () {
    add_rewrite_rule(
        '^mypost/([^/]*)',
        'index.php?p=$matches[1]',
        'top'
    );

    add_rewrite_rule(
        'hello/([^/]*)/([^/]*)?',
        'my-page.php?name=$1&email=$2',
        'top'
    );
    // FIXME
    // should not always enable, since it will write rules to .htaccess
    flush_rewrite_rules();
});

