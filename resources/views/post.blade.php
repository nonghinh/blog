@extends('layouts.app')
@section('title', $post->title)
@section('content')
<div class="post-content">
    @if($post != null)
        <div class="meta-post">
            <div class="meta-post-heading">
                <img src="{!! url('storage/'.$post->image)!!}" alt="" class="meta-image">
                <div class="overlay-image"></div>
                <h1 class="meta-title">{!! $post->title !!}</h1>
            </div>
            <div class="meta-content">
                <div class="meta-excerpt">
                    <p>{!! $post->excerpt !!}</p>
                </div>
                <div class="meta-info">
                    <span class="auth info-item"><i class="fa fa-user-o"></i> admin</span>
                    <span class="view-count info-item"><i class="fa fa-line-chart"></i> 1234</span>
                    <span class="cate info-item"><i class="fa fa-tags"></i> tags</span>
                    <span class="datetime info-item"><i class="fa fa-clock-o"></i> 20/1/2017</span>
                </div>
                <div class="meta-body">
                    {!! $post->body !!}
                </div>
                <div class="meta-comment">
                    <h3>Comment</h3>
                    <div class="fb-comment">
                        
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
