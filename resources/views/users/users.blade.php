@if(count($users) > 0)
    <ul class="list-unstyled">
      @foreach($users as $user)
      <li class="media">
        <!--ユーザのメールアドレスをもとにGravatarを取得して表示-->
        <img src="{{ Gravatar::get($user->email, ['size' => 50]) }}" class="mr-2 rounded" alt="...">
        <div class="media-body">
          {{ $user->name }}
          <p>{!! link_to_route('users.show', 'View profile', ['user' => $user->id]) !!}</p>
        </div>
      </li>
      @endforeach
    </ul>
    <!--ページネーション-->
    {{ $users->links() }}
@endif