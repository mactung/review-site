<section class="
        elementor-section
        elementor-top-section
        elementor-element
        elementor-element-4952283
        elementor-section-stretched
        elementor-section-boxed
        elementor-section-height-default
        elementor-section-height-default
    " data-id="4952283" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="
                    elementor-column
                    elementor-col-100
                    elementor-top-column
                    elementor-element
                    elementor-element-f938a74
                " data-id="f938a74" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="
                                elementor-element
                                elementor-element-542af01
                                elementor-widget
                                elementor-widget-rt-news-grid
                            " data-id="542af01" data-element_type="widget" data-widget_type="rt-news-grid.default">
                            <div class="elementor-widget-container">
                                <div class="
                                        grid-default
                                        row
                                        tab-space1
                                        rt-news-grid-6
                                    ">
                                    @foreach ($categories as $category)
                                    <div class="
                                        col-lg-4 col-md-6 col-sm-6 col-12
                                    ">
                                        <div class="
                                            grid-content-middle
                                            overlay-dark-level-2
                                            img-scale-animate
                                            text-center
                                            mb-2
                                        ">
                                            <img width="555" height="370"
                                                src="{{$category->image_url}}"
                                                class="
                                                img-fluid
                                                mb-10
                                                width-100
                                                wp-post-image
                                            " alt="" loading="lazy" />
                                            <div class="content p-30-r">
                                                {{-- <a href="/category/{{ $category->slug }}"><span class="
                                                        el-rt-cat
                                                        style_2
                                                    " style="
                                                        background: #e53935;
                                                    ">{{ $category->name }}<span class="titleinner" style="
                                                            border-top: 8px
                                                                solid
                                                                #e53935;
                                                        "></span></span></a> --}}
                                                <h3 class="title-regular-light">
                                                    <a
                                                        href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>