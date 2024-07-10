<div class="col-lg-3 col-md-6 col-sm-8">
    <div class="product__sidebar">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Últimas notícias</h5>
            </div>
            <div class="filter__gallery">
                @foreach($sidebarPosts as $sidePost)
                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="{{ asset('storage/blog/'. $sidePost->file ) }}">
                    <div class="ep">{{ $sidePost->category->name }}</div>
                    <div class="view">{{ date('d/m', strtotime($sidePost->created_at)) }}</div>
                    <h5>
                        <a href="{{ route('site.post', $sidePost) }}">
                            {{ \Illuminate\Support\Str::limit($sidePost->title , 42, $end='...')}}
                        </a>
                    </h5>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
