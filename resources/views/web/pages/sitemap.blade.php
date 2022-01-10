
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://gulfgardens.net/</loc>
    </url>
    <url>
        <loc>http://gulfgardens.net/about</loc>
    </url>
    <url>
        <loc>http://gulfgardens.net/web-service</loc>
    </url>
    <url>
        <loc>http://gulfgardens.net/web-gallery</loc>
    </url>
    <url>
        <loc>http://gulfgardens.net/web-blogs</loc>
    </url>
    <url>
        <loc>http://gulfgardens.net/contact</loc>
    </url>
    @foreach($blogs as $blog)
        <url>
            <loc>http://gulfgardens.net/single-blog/{{ $blog->id }}</loc>
        </url>
    @endforeach

    @foreach($services as $service)
    <url>
        <loc>http://gulfgardens.net/single-service/{{ $service->id }}</loc>
    </url>
@endforeach
</urlset>
