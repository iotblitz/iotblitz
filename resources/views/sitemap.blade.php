<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
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
        <loc>https://iotblitz.com/solutions</loc>
        <lastmod>2024-06-20 16:04:16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://iotblitz.com/services</loc>
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
            <loc>https://iotblitz.com/solutions/{{preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($product_key->product_title))) . '-' . $product_key->product_id}}</loc>
            <image:image>
                <image:loc>https://iotblitz.com/public/product_image/{{$product_key->product_image}}</image:loc>
            </image:image>
            <lastmod>{{$product_key->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach

    @foreach ($blogs as $blogdata)
        <url>
            <loc>https://iotblitz.com/blogs/{{preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($blogdata->blog_title))) . '-' . $blogdata->blog_id}}</loc>
            <image:image>
                <image:loc>https://iotblitz.com/public/blog_images/{{$blogdata->blog_image}}</image:loc>
                <image:caption>{{$blogdata->image_caption}}</image:caption>
                <image:title>{{$blogdata->blog_image}}</image:title>
            </image:image>
            <lastmod>{{$blogdata->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach


    @foreach ($case_study as $case_study_data)
        <url>
            <loc>https://iotblitz.com/blogs/{{preg_replace('/[^a-z0-9]+/', '-', strtolower($case_study_data->case_study_title)) . '-' . $case_study_data->case_study_id}}</loc>
            <image:image>
                <image:loc>https://iotblitz.com/public/case_study_images/{{$case_study_data->case_study_image}}</image:loc>
            </image:image>
            <lastmod>{{$case_study_data->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach
    @foreach ($solutions as $solutions_key)
        <url>
            <loc>https://iotblitz.com/services/{{preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($solutions_key->solutions_title))) . '-' . $solutions_key->solutions_id}}</loc>
            <image:image>
                <image:loc>https://iotblitz.com/public/solution_image/{{$solutions_key->solutions_image}}</image:loc>
            </image:image>
            <lastmod>{{$solutions_key->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach



    @foreach ($careers as $careers_data)
        <url>
            <loc>https://iotblitz.com/careers/{{preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($careers_data->title))) . '-' . $careers_data->careers_id}}</loc>
            <lastmod>{{$careers_data->updated_at}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.51</priority>
        </url>
    @endforeach



    @foreach ($careers as $careers_data)
        <url>
            <loc>https://iotblitz.com/apply-job/{{preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($careers_data->title))) . '-' . $careers_data->careers_id}}</loc>
            <lastmod>{{$careers_data->updated_at}}</lastmod>
            <changefreq>never</changefreq>
            <priority>0.51</priority>
        </url>
    @endforeach



    {{-- preg_replace('/[^a-z0-9]+/', '-', $careers_data->title) . '-' . $careers_data->careers_id --}}





    {{-- <url>
        <loc>url</loc>
        <lastmod>datetime</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://www.example.com/contact</loc>
        <image:image>
            <image:loc>https://example.com/image.jpg</image:loc>
        </image:image>
        <lastmod>2024-06-13</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>https://www.example.com/contact</loc>
        <lastmod>2024-06-13</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url> --}}
    {{-- 1.00 --}}
    {{-- 0.80 --}}
    {{-- 0.64 --}}

    {{-- jobs --}}
    {{-- 0.51 --}}

</urlset>
