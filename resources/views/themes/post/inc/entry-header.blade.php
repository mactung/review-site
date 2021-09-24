<div class="entry-header">
    <div class="entry-thumbnail-area overimage">
        <img
            src="{{$post->thumbnail}}"
            alt="{{$post->title}}"
        />
    </div>
    
    <div class="entry-meta">
        <div class="entry-category">
            <div class="entry-cat-tag">
                <div class="ui-cat">
                    <div class="ui-cat-tag" style="background: #0089ff">
                        <span class="amount"
                            ><a
                                href="/category/{{$post->category->slug}}"
                                >{{$post->category->name}}</a
                            ></span
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="entry-date">
            <ul>
                <li>
                    <span class="fa fa-clock-o" aria-hidden="true"></span>
                    <span class="published updated">{{$post->created_at->format('M d, Y')}}</span>
                </li>
            </ul>
        </div>
        <div class="entry-post-meta row">
            <div class="col-sm-8 col-xs-12 pull-left text-left post-author">
                <img
                    alt="admin"
                    src="https://secure.gravatar.com/avatar/20947e665211ab91db569a6f7fbe44ac?s=35&amp;d=mm&amp;r=g"
                    srcset="
                        https://secure.gravatar.com/avatar/20947e665211ab91db569a6f7fbe44ac?s=70&amp;d=mm&amp;r=g 2x
                    "
                    class="avatar avatar-35 photo"
                    height="35"
                    width="35"
                    loading="lazy"
                />By
                <a href="/demo/wordpress/themes/barta/author/admin/"
                    ><span class="vcard author author_name"
                        ><span class="fn">admin</span></span
                    ></a
                >
                -
                <a
                    target="_blank"
                    class="author-social"
                    href="mailto:radiustheme@gmail.com"
                    title="admin"
                    ><i class="fa fa-envelope" aria-hidden="true"></i
                ></a>
                <span
                    ><span class="date meta-item"
                        ><span class="fa fa-clock-o" aria-hidden="true"></span>
                        <span>3 years ago</span></span
                    ></span
                >
            </div>
            <div class="col-sm-4 col-xs-12 pull-left text-right">
                <span
                    ><i class="fa fa-comments-o" aria-hidden="true"></i> 0</span
                >
                <span class="meta-views meta-item"
                    ><span class="meta-views meta-item very-high"
                        ><i class="fa fa-fire" aria-hidden="true"></i> 7,357
                    </span>
                </span>
                <span class="meta-reading-time meta-item">
                    <span class="meta-reading-time meta-item"
                        ><i class="fa fa-eye" aria-hidden="true"></i> 2 minutes
                        read</span
                    >
                </span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
