<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box page-title-box-alt">
            <div class="page-title-right">
                @unless ($breadcrumbs->isEmpty())
                <ol class="breadcrumb m-0">
                    @foreach ($breadcrumbs as $breadcrumb)
                    @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                    @endif

                    @endforeach
                </ol>
                @endunless
            </div>
            <h4 class="page-title">Starter</h4>
        </div>
    </div>
</div>
<!-- end page title -->
