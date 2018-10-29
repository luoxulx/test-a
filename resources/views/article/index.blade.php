@extends('home.master')
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">From the Firehose</h3>
        <!-- /.post list start -->
        @forelse($articles as $item)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $item->title }}</h2>
            <p class="blog-post-meta">{{ date('F d Y D') }} by
                <a href="#">Chris</a></p>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia
                bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac
                cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                <li>Donec id elit non mi porta gravida at eget metus.</li>
                <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta
                <em>sem malesuada magna</em>mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean
                lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        </div>
        @empty
            <cite>NULL</cite>
        @endforelse
        <!-- /.post list end -->
        <nav class="blog-pagination">
            {{ $articles->links() }}
        </nav>
    </div>
    <!-- /.blog-main -->
    @include('home.aside')
@stop
