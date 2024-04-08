<?php
/**
 * Mnk Function: insertando script de GTM
 */
function mnk_google_gtm_script ()
{
    if (get_bloginfo('url') == 'http://www.flamencos145.com') {
        echo '
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111696975-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag("js", new Date());

              gtag("config", "UA-111696975-1");
            </script>
        ';
    }
    
}
add_action('wp_head', 'mnk_google_gtm_script', 99);