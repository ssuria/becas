<?php die();?>

Server Variables
    SERVER_SOFTWARE = Apache/2.4.18 (Ubuntu)
    DOCUMENT_ROOT = /var/www/html/wordpress

LSCache Plugin Options
    version = 1.1.2.1
    enabled = 1
    radio_select = 1
    purge_upgrade = 1
    cache_commenters = 1
    cache_login = 1
    cache_favicon = 1
    cache_resources = 1
    mobileview_enabled = 
    mobileview_rules = 
    login_cookie = 
    tag_prefix = 
    check_advancedcache = 1
    debug = 0
    admin_ips = 127.0.0.1
    test_ips = 
    public_ttl = 604800
    front_page_ttl = 604800
    feed_ttl = 0
    403_ttl = 3600
    404_ttl = 3600
    500_ttl = 3600
    purge_by_post = A.F.H.M.PGS.PGSRP.PT.T
    excludes_uri = 
    excludes_cat = 
    excludes_tag = 
    nocache_cookies = 
    nocache_useragents = 
    crawler_include_posts = 1
    crawler_include_pages = 1
    crawler_include_cats = 1
    crawler_include_tags = 1
    crawler_excludes_cpt = 
    crawler_order_links = date_desc
    crawler_usleep = 500
    crawler_run_duration = 400
    crawler_run_interval = 600
    crawler_crawl_interval = 302400
    crawler_threads = 3
    crawler_load_limit = 1
    crawler_domain_ip = 
    crawler_custom_sitemap = 
    crawler_cron_active = 

Wordpress Specific Extras
    wordpress version = 4.8
    locale = es_ES
    active theme = Hydrogen
    active plugins = Array
(
    [0] => file-manager/file-manager.php
    [1] => formidable/formidable.php
    [2] => gantry5/gantry5.php
    [3] => hide-admin-bar/hide_admin_bar.php
    [4] => ip-geo-block/ip-geo-block.php
)


/var/www/html/wordpress/.htaccess contents:
# BEGIN LSCACHE
## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##

<IfModule LiteSpeed>

RewriteEngine on
CacheLookup Public on

### marker CACHE RESOURCE start ###
RewriteRule wp-content/.*/[^/]*(responsive|css|js|dynamic|loader|fonts)\.php - [E=cache-control:max-age=3600]
### marker CACHE RESOURCE end ###

### marker FAVICON start ###
RewriteRule favicon\.ico$ - [E=cache-control:max-age=86400]
### marker FAVICON end ###

</IfModule>

## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##
# END LSCACHE

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress

