
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/</loc>
    </url>
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/about</loc>
    </url>
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/web-service</loc>
    </url>
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/web-gallery</loc>
    </url>
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/web-blogs</loc>
    </url>
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/contact</loc>
    </url>
    @foreach($blogs as $blog)
        <url>
            <loc>http://khalliej-gardens.senior-consultingco.com/single-blog/{{ $blog->id }}</loc>
        </url>
    @endforeach

    @foreach($services as $service)
    <url>
        <loc>http://khalliej-gardens.senior-consultingco.com/single-service/{{ $service->id }}</loc>
    </url>
@endforeach
</urlset>
