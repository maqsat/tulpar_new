<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <!--  created with Free Online Sitemap Generator www.xml-sitemaps.com  -->
    <url>
        <loc>https://neurorehab.kz/</loc>
        <lastmod>2024-06-25T16:06:01+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://neurorehab.kz/neurorehab</loc>
        <lastmod>2024-06-25T16:06:01+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @foreach($methods as $item)
    <url>
        <loc>https://neurorehab.kz/methods/{{$item->url}}</loc>
        <lastmod>{{\Carbon\Carbon::parse($item->updated_at)->toIso8601String()}}</lastmod>
        <priority>0.64</priority>
    </url>
    @endforeach
</urlset>
