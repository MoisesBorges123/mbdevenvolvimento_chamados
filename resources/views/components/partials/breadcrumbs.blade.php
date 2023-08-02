@unless ($breadcrumbs->isEmpty())
<ol class="breadcrumb breadcrumb-arrow mt-3">
    @foreach ($breadcrumbs as $breadcrumb)

        @if (!is_null($breadcrumb->url) && !$loop->last)
            <li class=""><a href="{{ $breadcrumb->url }}">{!! $breadcrumb->title !!}</a></li>
        @else
            <li class="active"><span>{{ $breadcrumb->title }}</span></li>
        @endif

    @endforeach
</ol>
@endunless