{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ route('news.index') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ route('about') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ route('privacy') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>

    @foreach ($news as $new)
        <url>
            <loc>{{ route('news.show', $new) }}</loc>
            <lastmod>{{ $new->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach

    @foreach ($products as $product)
        <url>
            <loc>{{ route('product.show', $product->slug) }}</loc>
            <lastmod>{{ $new->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach

    @foreach ($categories as $category)
        <url>
            <loc>{{ route('category.lists', $category->slug) }}</loc>
            <lastmod>{{ $new->updated_at->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1</priority>
        </url>

        @foreach (\App\Models\Category::where('parent_id', $category->id)->get() as $cat)
            <url>
                <loc>{{ route('category.show', [ $category->slug, $cat->slug ]) }}</loc>
                <lastmod>{{ $new->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach
    @endforeach
</urlset>
