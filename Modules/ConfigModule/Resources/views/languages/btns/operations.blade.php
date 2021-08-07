<a class="btn text-center btn-primary btn-sm float-left" href="{{route('admin.languages.edit',$row->id)}}"><i class="fa fa-edit"></i></a>

<form class="float-left deleteForm" action="{{route('admin.languages.destroy',$row->id)}}" method="post">
    @csrf
    @method('delete')
    <button onclick="return confirm('are you sure')" class="text-center btn btn-danger btn-sm float-left " type="submit"><i class="fa fa-trash"></i></button>
</form>




