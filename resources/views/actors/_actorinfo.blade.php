<div class="row">
    <div class="col-md-4">
      <img src="http://placehold.it/350x350" alt="{{ $actor->present()->fullname()}}" title="{{ $actor->present()->fullname()}}" class="img-responsive">
    </div>
    <div class="col-md-8">
        <h1>{{ $actor->present()->fullname()}}</h1>

        {{ $actor->biography }}

        {{ $actor->birthname }}

        {{ $actor->birthday }}
    </div>
</div>