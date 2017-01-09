@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="content">
    @if($posts != null)
        @foreach($posts as $post)
            <div class="entry-post">
                <div class="entry-title">
                    <h2><a href="{!! url($post->slug.'/'.$post->id)!!}" title="{!! $post->title !!}">{!! $post->title !!}</a></h3>
                </div>
                <div class="entry-content">
                    <p>{!! $post->excerpt !!}</p>
                </div>
                <div class="entry-datetime">
                    <p class="">sss
                        <span class="pull-right"><i class="fa fa-clock-o"></i> {!! $post->updated_at !!}</span>
                        <span class="pull-right"><i class="fa fa-comment-o"></i>112</span>
                    </p>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
