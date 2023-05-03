<div class="popular-news">
    <div class="popular-news-wrapper">
      <h4 class="popular-news__title">Cамые популярные новости</h4>
      <ul class="popular-news__list">
        <li class="popular-news__item">
          @foreach ($popularPosts as $popularPost)
              <a href="{{ route('postDetail', $popularPost->slug)}}">
                  <p class="popular-news__description">{{ $popularPost['title_'.\App::getLocale()] }}</p>
                  <span class="popular-news__date">{{ $popularPost->created_at->format('H.i / d.m.Y') }}</span>
              </a>
          @endforeach
        </li>
      </ul>
    </div>
    {{-- <div class="ads-placeholder">
        <h4>ADS PLACEHOLDER</h4>
    </div> --}}
    <a href="{{ $ad->url2 ?? ''}}" class="ads-placeholder" style="background-image: url(/site/images/ads/{{ $ad->image2 ?? ''}})">
        <h2>
            {{ $ad->title2 ?? '' }}
        </h2>
    </a>
  </div>
