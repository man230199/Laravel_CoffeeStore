@php
use App\Helpers\Template;
use App\Helpers\URL;
use App\Models\ArticleModel;
$articleModel = new ArticleModel();
$recentItems = $articleModel->listItems(null, ['task' => 'store-list-items-recent']);
@endphp
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Bài viết mới nhất</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($recentItems as $item)
                @php
                    $thumb = Template::showItemBackground('article', $item['thumb']);
                    $articleLink = URL::linkArticle($item['id'], $item['name']);
                @endphp
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ $articleLink }}" class="block-20"
                            style="background-image: url('{{ $thumb }}');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">{{ $item['created'] }}</a></div>
                                <div><a href="#">{{ $item['created_by'] }}</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="{{ $articleLink }}">{{ $item['name'] }}</a></h3>
                            <p>{!! $item['short_content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
