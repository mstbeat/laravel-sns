<div class="card mt-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
        @if(!empty($user->image))
          <i class="fas fa-3x"><image src="/public/{{ $user->image }}"></i>
        @else
          <i class="fas fa-user-circle fa-3x"></i>
        @endif
      </a>
      @if( Auth::id() !== $user->id )
        <follow-button
          class="ml-auto"
          :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
          :authorized='@json(Auth::check())'
          endpoint="{{ route('users.follow', ['name' => $user->name]) }}"
        >
        </follow-button>
      @endif
      @if( Auth::id() === $user->id )
        <!-- Dropdown -->
        <div class="ml-auto card-text">
          <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route('users.edit', ['name' => $user->name]) }}">
                <i class="fas fa-pen mr-1"></i>ユーザー情報を編集する
              </a>
            </div>
          </div>
        </div>
        <!-- Dropdown -->
      @endif
    </div>
    <h2 class="h5 card-title m-0">
      <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
        {{ $user->name }}
      </a>
    </h2>
  </div>
  <div class="card-body">
    <div class="card-text">
      <a href="{{ route('users.followings', ['name' => $user->name]) }}" class="text-muted">
        {{ $user->count_followings }} フォロー
      </a>
      <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="text-muted">
        {{ $user->count_followers }} フォロワー
      </a>
    </div>
  </div>
</div>
