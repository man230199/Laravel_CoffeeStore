@extends('store.main')

@php
use App\Helpers\Template;
use App\Helpers\URL;
$item['name'] = 'Bài viết';
@endphp
@include('store.blocks.breadcrumb_article',['item' => $item])
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach ($itemCategoryArticle['articles'] as $item)
                @php
                    $articleLink = URL::linkArticle($item['id'], $item['name']);
                    $articleThumb = Template::showItemBackground('article', $item['thumb']);
                    $shortContent = Template::showContent($item['short_content'], 300);
                @endphp
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ $articleLink }}" class="block-20"
                            style="background-image: url('{{ $articleThumb }}');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">{{ $item['created'] }}</a></div>
                                <div><a href="#">{{ $item['created_by'] }}</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ $articleLink }}">{{ $item['name'] }}</a></h3>
                            <p>{!! $shortContent !!}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        @include('store.templates.pagination',['items' => $itemCategoryArticle['articles']])

    </div>
</section>
