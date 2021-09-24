<section
    class="
        elementor-section
        elementor-top-section
        elementor-element
        elementor-element-8e1d57d
        elementor-section-stretched
        elementor-section-boxed
        elementor-section-height-default
        elementor-section-height-default
    "
    data-id="8e1d57d"
    data-element_type="section"
    data-settings='{"stretch_section":"section-stretched"}'
    style="padding: 60px 0 0 0"
>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div
                class="
                    elementor-column
                    elementor-col-100
                    elementor-top-column
                    elementor-element
                    elementor-element-5bbcd1f
                "
                data-id="5bbcd1f"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="
                                elementor-element
                                elementor-widget
                                elementor-widget-rt-news-tab
                            "
                            data-id="8098b37"
                            data-element_type="widget"
                            data-widget_type="rt-news-tab.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="tab-default rt-news-tab-2 general">
                                    <div class="mb-20-r rtin-tab-container">
                                        <div
                                            class="topic-border color-cinnabar"
                                        >
                                            <div class="mb-25p">
                                                <div
                                                    class="
                                                        rt-news-box-title-holder
                                                        style_2
                                                    "
                                                >
                                                    <h2
                                                        class="
                                                            el-rt-news-box-title
                                                            style_2
                                                        "
                                                    >
                                                        {{ $name
                                                        }}<span
                                                            class="titleinner"
                                                        ></span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rt-tab-news-holder">
                                            <div class="blockHalf2">
                                                <div class="blockHalf2 row">
                                                    <div
                                                        class="
                                                            col-xl-4
                                                            col-lg-6
                                                            col-md-12
                                                            mb-30
                                                        "
                                                    >
                                                        <div
                                                            class="
                                                                img-scale-animate h-100
                                                            "
                                                        >
                                                            <a
                                                                class="
                                                                    mg-overlay-70
                                                                "
                                                                href="/reviews/{{ $data['posts'][0]->slug }}"
                                                            >
                                                                <img
                                                                    height="100%"
                                                                    src="{{ $data['posts'][0]->thumbnail }}"
                                                                    class="
                                                                        img-fluid
                                                                        mb-10
                                                                        h-100
                                                                        wp-post-image
                                                                    "
                                                                    alt=""
                                                                    style="object-fit: cover;"
                                                                />
                                                            </a>
                                                            <div
                                                                class="
                                                                    topic-box-top-lg
                                                                "
                                                            >
                                                                <a
                                                                    href="demo/wordpress/themes/barta/category/politics/"
                                                                >
                                                                    <span
                                                                        class="
                                                                            el-rt-cat
                                                                            style_2
                                                                        "
                                                                        style="
                                                                            background: #e53935;
                                                                        "
                                                                    >
                                                                        {{ $data['posts'][0]->category->name }}
                                                                        <span
                                                                            class="
                                                                                titleinner
                                                                            "
                                                                            style="
                                                                                border-top: 8px
                                                                                    solid
                                                                                    #e53935;
                                                                            "
                                                                        >
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="
                                                                    mask-content-lg
                                                                "
                                                            >
                                                                <div
                                                                    class="
                                                                        post-meta-light
                                                                    "
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <span
                                                                                ><i
                                                                                    class="
                                                                                        fa
                                                                                        fa-user
                                                                                    "
                                                                                    aria-hidden="true"
                                                                                ></i></span
                                                                            ><a
                                                                                href="demo/wordpress/themes/barta/author/admin/"
                                                                                title="Posts by admin"
                                                                                rel="author"
                                                                                >{{ $data['posts'][0]->author->name }}</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                ><i
                                                                                    class="
                                                                                        fa
                                                                                        fa-clock-o
                                                                                    "
                                                                                    aria-hidden="true"
                                                                                ></i
                                                                            ></span>
                                                                            {{$data['posts'][0]->created_at->format('M d, Y')}}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2
                                                                    class="
                                                                        title-medium-light
                                                                    "
                                                                >
                                                                    <a
                                                                        href="reviews/{{ $data['posts'][0]->slug }}"
                                                                    >
                                                                        {{ $data['posts'][0]->title }}</a
                                                                    >
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="
                                                            col-xl-8
                                                            col-lg-6
                                                            col-md-12
                                                        "
                                                    >
                                                        <div class="row">
                                                            @for ($i = 1; $i <
                                                            count($data['posts']);
                                                            $i++)
                                                            <div
                                                                class="
                                                                    col-xl-4
                                                                    col-lg-6
                                                                    col-md-4
                                                                    col-sm-6
                                                                    col-12
                                                                    general
                                                                "
                                                            >
                                                                <div
                                                                    class="
                                                                        small-item-img
                                                                    "
                                                                >
                                                                    <a
                                                                        class="
                                                                            img-opacity-hover
                                                                            img-scale-animate
                                                                        "
                                                                        href="/reviews/{{$data['posts'][$i]->slug}}"
                                                                    >
                                                                        <img
                                                                            width="555"
                                                                            height="370"
                                                                            src="{{$data['posts'][$i]->thumbnail}}"
                                                                            class="
                                                                                img-fluid
                                                                                mb-10
                                                                                width-100
                                                                                wp-post-image
                                                                            "
                                                                            alt=""
                                                                            loading="lazy"
                                                                        />
                                                                    </a>
                                                                    <a
                                                                        href="/reviews/{{$data['posts'][$i]->slug}}"
                                                                        ><span
                                                                            class="
                                                                                el-rt-cat
                                                                                style_2
                                                                            "
                                                                            style="
                                                                                background: #e53935;
                                                                            "
                                                                            >{{$data['posts'][$i]->category->name
                                                                            }}<span
                                                                                class="
                                                                                    titleinner
                                                                                "
                                                                                style="
                                                                                    border-top: 8px
                                                                                        solid
                                                                                        #e53935;
                                                                                "
                                                                            ></span></span
                                                                    ></a>
                                                                </div>
                                                                <div
                                                                    class="
                                                                        small-item-meta
                                                                    "
                                                                >
                                                                    <div
                                                                        class="
                                                                            post-meta-dark
                                                                        "
                                                                    >
                                                                        <ul>
                                                                            <li>
                                                                                <span
                                                                                    ><i
                                                                                        class="
                                                                                            fa
                                                                                            fa-clock-o
                                                                                        "
                                                                                        aria-hidden="true"
                                                                                    ></i></span
                                                                                >{{$data['posts'][$i]->created_at->format('M d, Y')}}
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h3
                                                                        class="
                                                                            title-medium-dark
                                                                        "
                                                                    >
                                                                        <a
                                                                            href="/reviews/{{$data['posts'][$i]->slug}}"
                                                                            >{{$data['posts'][$i]->title}}</a
                                                                        >
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="loading"></div>
                                            </div>
                                            <div class="loading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
