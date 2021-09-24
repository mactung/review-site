<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div id="rt-about-social-4" class="
                                        title-style-2
                                        widget
                                        rt_footer_social_widget
                                    ">
                        <h3 style="background-color: #111" class="widgettitle">
                            About Company
                        </h3>
                        <div class="rt-about-widget">
                            <div class="footer-about">
                                We are the best WordPress Developer
                                Company. We can solve your problem
                                and make the solution nice for you
                                and your company. Support, Service
                                &amp; Development is our main
                                weapon.
                                <br />
                            </div>
                            <div>
                                <ul class="footer-social">
                                    <li>
                                        <a href="#" target="_blank"><i class="
                                                                fa fa-facebook
                                                            "></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="
                                                                fa fa-twitter
                                                            "></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="
                                                                fa fa-linkedin
                                                            "></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="
                                                                fa fa-pinterest
                                                            "></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="
                                                                fa fa-instagram
                                                            "></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="title-style-2 widget widget_categories">
                        <h3 style="background-color: #111" class="widgettitle">
                            Popular Categories
                        </h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li class="cat-item">
                                    <a href="category/{{ $category->slug }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div id="tag_cloud-3" class="title-style-2 widget widget_tag_cloud">
                        <h3 style="background-color: #000000" class="widgettitle">
                            Tags
                        </h3>
                        <div class="tagcloud">
                            <a href="demo/wordpress/themes/barta/tag/action/" class="
                                                tag-cloud-link
                                                tag-link-221
                                                tag-link-position-1
                                            " style="font-size: 16.4pt" aria-label="Action (2 items)">Action</a>
                            <a href="demo/wordpress/themes/barta/tag/animation/" class="
                                                tag-cloud-link
                                                tag-link-220
                                                tag-link-position-2
                                            " style="font-size: 8pt" aria-label="Animation (1 item)">Animation</a>
                            <a href="demo/wordpress/themes/barta/tag/apple/" class="
                                                tag-cloud-link
                                                tag-link-223
                                                tag-link-position-3
                                            " style="font-size: 8pt" aria-label="Apple (1 item)">Apple</a>
                            <a href="demo/wordpress/themes/barta/tag/boxing/" class="
                                                tag-cloud-link
                                                tag-link-203
                                                tag-link-position-4
                                            " style="font-size: 22pt" aria-label="Boxing (3 items)">Boxing</a>
                            <a href="demo/wordpress/themes/barta/tag/computer/" class="
                                                tag-cloud-link
                                                tag-link-224
                                                tag-link-position-5
                                            " style="font-size: 8pt" aria-label="Computer (1 item)">Computer</a>
                            <a href="demo/wordpress/themes/barta/tag/cricket/" class="
                                                tag-cloud-link
                                                tag-link-205
                                                tag-link-position-6
                                            " style="font-size: 8pt" aria-label="Cricket (1 item)">Cricket</a>
                            <a href="demo/wordpress/themes/barta/tag/food/" class="
                                                tag-cloud-link
                                                tag-link-226
                                                tag-link-position-7
                                            " style="font-size: 8pt" aria-label="Food (1 item)">Food</a>
                            <a href="demo/wordpress/themes/barta/tag/games/" class="
                                                tag-cloud-link
                                                tag-link-218
                                                tag-link-position-8
                                            " style="font-size: 16.4pt" aria-label="Games (2 items)">Games</a>
                            <a href="demo/wordpress/themes/barta/tag/health/" class="
                                                tag-cloud-link
                                                tag-link-225
                                                tag-link-position-9
                                            " style="font-size: 8pt" aria-label="Health (1 item)">Health</a>
                            <a href="demo/wordpress/themes/barta/tag/racing/" class="
                                                tag-cloud-link
                                                tag-link-222
                                                tag-link-position-10
                                            " style="font-size: 8pt" aria-label="Racing (1 item)">Racing</a>
                            <a href="demo/wordpress/themes/barta/tag/sports/" class="
                                                tag-cloud-link
                                                tag-link-219
                                                tag-link-position-11
                                            " style="font-size: 16.4pt" aria-label="Sports (2 items)">Sports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="footer-logo">
                    <a class="dark-logo" href="demo/wordpress/themes/barta/"><img width="380" height="180"
                            src="demo/wordpress/themes/barta/wp-content/uploads/2018/11/big-logo_light-1.png"
                            class="attachment-full size-full" alt="" loading="lazy" srcset="
                                            demo/wordpress/themes/barta/wp-content/uploads/2018/11/big-logo_light-1.png         380w,
                                            demo/wordpress/themes/barta/wp-content/uploads/2018/11/big-logo_light-1-300x142.png 300w
                                        " sizes="(max-width: 380px) 100vw, 380px" /></a>
                </div>
                <div class="col-sm-12 col-xs-12">
                    &copy; Copyright Barta 2020. Designed and
                    Developed by
                    <a rel="nofollow" target="_blank" href="#">M.A.C Entertaimain</a>
                </div>
            </div>
        </div>
    </div>
</footer>