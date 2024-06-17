<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://iotblitz.com</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://iotblitz.com/about</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://iotblitz.com/contact</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>2024-06-20 16:04:16</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://iotblitz.com/products</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://iotblitz.com/blogs</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>


    <url>
        <loc>https://iotblitz.com/case_study</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>



    @foreach ($products as $product_key)
        <url>
            <loc>https://iotblitz.com/products/{{str_replace(' ', '-', $product_key->product_title) . '-' . $product_key->product_id}}</loc>
            <lastmod>{{$product_key->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach

    @foreach ($blogs as $blogdata)
        <url>
            <loc>https://iotblitz.com/blogs/{{str_replace(' ', '-', $blogdata->blog_title) . '-' . $blogdata->blog_id}}</loc>
            <lastmod>{{$blogdata->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach


    @foreach ($case_study as $case_study_data)
        <url>
            <loc>https://iotblitz.com/blogs/{{str_replace(' ', '-', $case_study_data->case_study_title) . '-' . $case_study_data->case_study_id}}</loc>
            <lastmod>{{$case_study_data->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach
    @foreach ($solutions as $solutions_key)
        <url>
            <loc>https://iotblitz.com/solutions/{{str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id}}</loc>
            <lastmod>{{$solutions_key->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach



    @foreach ($careers as $careers_data)
        <url>
            <loc>https://iotblitz.com/careers/{{str_replace(' ', '-', $careers_data->title) . '-' . $careers_data->careers_id}}</loc>
            <lastmod>{{$careers_data->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach



    @foreach ($careers as $careers_data)
        <url>
            <loc>https://iotblitz.com/apply-job/{{str_replace(' ', '-', $careers_data->title) . '-' . $careers_data->careers_id}}</loc>
            <lastmod>{{$careers_data->updated_at}}</lastmod>
            <changefreq>never</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach



    {{-- str_replace(' ', '-', $careers_data->title) . '-' . $careers_data->careers_id --}}





    <url>
        <loc>url</loc>
        <lastmod>datetime</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://www.example.com/contact</loc>
        <lastmod>2024-06-13</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>https://www.example.com/contact</loc>
        <lastmod>2024-06-13</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    {{-- 1.00 --}}
    {{-- 0.80 --}}
    {{-- 0.64 --}}

    {{-- jobs --}}
    {{-- 0.51 --}}

</urlset>
