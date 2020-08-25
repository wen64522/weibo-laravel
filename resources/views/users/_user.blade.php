<div class="list-group-item" >
  <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32 >
  <a href="{{ route('users.show',$user) }}">
    {{ $user->name }}
  </a>
  @can('destroy',$user)
  <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="float-lg-right">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-block btn-danger delete-btn" type="submit" name="button">删除</button>
  </form>
  @endcan
</div>