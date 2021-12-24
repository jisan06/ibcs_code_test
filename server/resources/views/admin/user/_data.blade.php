@forelse($users as $user)
   <tr>
      <td class="center">{{$user->user_id}}</td>
      <td class="center" >{{ $user->name }}</td>
      <td class="center">{{ $user->email }}</td>
      <td class="center">
         @if($user->getRoleNames()->count() > 0)
            @foreach($user->getRoleNames() as $role)
               <label class="badge badge-success">{{ $role }}</label>
            @endforeach
         @else
            <label class="badge badge-grey">--</label>
         @endif
      </td>
      <td class="center">{{ $user->created_at }}</td>
      <td class="center">
         <div class=" btn-group">
            <form>
               <a class="btn btn-warning btn-xs click_me" title="Edit"
                  href="{{ route('user.edit',$user->user_id ) }}">
                  <i class="ace-icon fa fa-pencil bigger-120"></i>
               </a>
                @if($user->user_id != auth()->user()->user_id)
                   <button class="btn btn-sm btn-danger delete_user" title="Delete" data-id="{{ $user->user_id  }}">
                      <i class="ace-icon fa fa-trash-o bigger-120"></i>
                   </button>
                @endif
            </form>
         </div>
      </td>
   </tr>
@empty
   <tr>
      <td colspan="6">No Data</td>
   </tr>
@endforelse
