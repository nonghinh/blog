<div class="new-post">
	<h3 class="sidenav-title">New post</h3>
	<div class="list-new-post">
		<?php $newposts = DB::table('posts')->orderBy('id', 'DESC')->skip(0)->take(5)->get(); ?>
		@foreach ($newposts as $newpost)
				<div class="item-post">
					<div class="item-post-header">
						<a href="" title="">
							<img src="{!! url('storage/'.$newpost->image)!!}" alt="$newpost->title">
						</a>
					</div>
					<div class="item-post-content">
						<h4>
							<a href="{{ url($newpost->slug.'/'.$newpost->id) }}" title="{!! $newpost->title !!}">{{ $newpost->title }}</a>
						</h4>
						<div class="meta-post">
							<span><i class="fa fa-clock-o fa-fw"></i> 20/10/2017</span>
						</div>
					</div>
				</div>
		@endforeach
	</ul>
</div>