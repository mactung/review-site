<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="/demo/wordpress/themes/barta/xmlrpc.php" />
    <script>
        function loadAsync(e, t) {
                var a,
                    n = !1;
                (a = document.createElement("script")),
                    (a.type = "text/javascript"),
                    (a.src = e),
                    (a.onreadystatechange = function () {
                        n ||
                            (this.readyState &&
                                "complete" != this.readyState) ||
                            ((n = !0), "function" == typeof t && t());
                    }),
                    (a.onload = a.onreadystatechange),
                    document.getElementsByTagName("head")[0].appendChild(a);
            }
    </script>
    <title>Barta &#8211; Just another WordPress site</title>
    <meta name="robots" content="max-image-preview:large" />
    <noscript>
        <style>
            #preloader {
                display: none;
            }
        </style>
    </noscript>
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//s.w.org" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Barta &raquo; Feed"
        href="/demo/wordpress/themes/barta/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Barta &raquo; Comments Feed"
        href="/demo/wordpress/themes/barta/comments/feed/" />
    @include('styles')
    <script type="text/javascript" src="/demo/wordpress/themes/barta/wp-includes/js/jquery/jquery.min.js"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="/demo/wordpress/themes/barta/wp-includes/js/jquery/jquery-migrate.min.js"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="/demo/wordpress/themes/barta/wp-json/" />
    <link rel="alternate" type="application/json" href="/demo/wordpress/themes/barta/wp-json/wp/v2/pages/1732" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/demo/wordpress/themes/barta/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="/demo/wordpress/themes/barta/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.7.2" />
    <meta name="generator" content="WooCommerce 5.3.1" />
    <link rel="canonical" href="/demo/wordpress/themes/barta/" />
    <link rel="shortlink" href="/demo/wordpress/themes/barta/" />
    <link rel="alternate" type="application/json+oembed"
        href="/demo/wordpress/themes/barta/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fbarta%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="/demo/wordpress/themes/barta/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fbarta%2F&#038;format=xml" />
    <meta name="framework" content="Redux 4.1.26" />
    <link rel="preload"
        href="/demo/wordpress/themes/barta/wp-content/plugins/elementor/assets/lib/font-awesome/fonts/fontawesome-webfont.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preload"
        href="/demo/wordpress/themes/barta/wp-content/plugins/accesspress-social-counter/webfonts/fa-brands-400.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preload"
        href="/demo/wordpress/themes/barta/wp-content/plugins/accesspress-social-counter/webfonts/fa-solid-900.woff2"
        as="font" type="font/woff2" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="icon" href="/demo/wordpress/themes/barta/wp-content/uploads/2018/10/favicon.png" sizes="32x32" />
    <link rel="icon" href="/demo/wordpress/themes/barta/wp-content/uploads/2018/10/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/demo/wordpress/themes/barta/wp-content/uploads/2018/10/favicon.png" />
    <meta name="msapplication-TileImage" content="/demo/wordpress/themes/barta/wp-content/uploads/2018/10/favicon.png" />
    <style type="text/css" id="wp-custom-css">
        .footer-top-area .widget h3 {
            background: none !important;
        }

        .footer-about {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="
            home
            page-template-default page page-id-1732
            wp-embed-responsive
            theme-barta
            woocommerce-no-js
            header-style-1
            has-topbar
            topbar-style-2
            no-sidebar
            right-sidebar
            product-grid-view
            header-top-banner
            elementor-default
            elementor-kit-4533
            elementor-page
            elementor-page-1732
        ">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        @include('inc.header')
        @yield('content')
        @include('inc.footer')

</div>
<script type="application/ld+json">
    {
                "@context": "http://schema.org/",
                "@type": "WebSite",
                "url": "/demo/wordpress/themes/barta",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "/demo/wordpress/themes/barta/?s={query}",
                    "query-input": "required name=query"
                }
            }
</script>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
<script>
    (function () {
                function maybePrefixUrlField() {
                    if (
                        this.value.trim() !== "" &&
                        this.value.indexOf("http") !== 0
                    ) {
                        this.value = "http://" + this.value;
                    }
                }
                var urlFields = document.querySelectorAll(
                    '.mc4wp-form input[type="url"]'
                );
                if (urlFields) {
                    for (var j = 0; j < urlFields.length; j++) {
                        urlFields[j].addEventListener(
                            "blur",
                            maybePrefixUrlField
                        );
                    }
                }
            })();
</script>
<script type="text/javascript">
    (function () {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                document.body.className = c;
            })();
</script>
<script type="text/javascript" id="wpo_min-footer-0-js-extra">
    var wpcf7 = {
                api: {
                    root: "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/wp-json\/",
                    namespace: "contact-form-7\/v1",
                },
            };
            var wc_add_to_cart_params = {
                ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/wp-admin\/admin-ajax.php",
                wc_ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/?wc-ajax=%%endpoint%%",
                i18n_view_cart: "View cart",
                cart_url:
                    "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/cart\/",
                is_cart: "",
                cart_redirect_after_add: "no",
            };
            var woocommerce_params = {
                ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/wp-admin\/admin-ajax.php",
                wc_ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/?wc-ajax=%%endpoint%%",
            };
            var wc_cart_fragments_params = {
                ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/wp-admin\/admin-ajax.php",
                wc_ajax_url:
                    "\/demo\/wordpress\/themes\/barta\/?wc-ajax=%%endpoint%%",
                cart_hash_key: "wc_cart_hash_9d56bd1cc6564ab501a3268010acf77e",
                fragment_name: "wc_fragments_9d56bd1cc6564ab501a3268010acf77e",
                request_timeout: "5000",
            };
            var ThemeObj = {
                stickyMenu: "1",
                meanWidth: "992",
                day: "Day",
                hour: "Hour",
                minute: "Minute",
                second: "Second",
                extraOffset: "70",
                extraOffsetMobile: "52",
                tickerSpeed: ".10",
                tickerControl: "",
                tickerTitleText: "Top Stories",
                tickerStyle: "reveal",
                tickerDirection: "ltr",
                tickerDelay: "2000",
                rtl: "no",
                ajaxURL:
                    "https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/wp-admin\/admin-ajax.php",
                nonce: "cb84de9a5f",
            };
</script>
<script>
    if (
                !navigator.userAgent.match(
                    /x11.*fox\/54|oid\s4.*xus.*ome\/62|x11.*ome\/62|oobot|ighth|tmetr|eadles|ingdo/i
                )
            ) {
                loadAsync(
                    "/demo/wordpress/themes/barta/wp-content/cache/wpo-minify/1624272448/assets/wpo-minify-footer-3644ac26.min.js",
                    null
                );
            }
</script>
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    media="all" />
</body>

</html>