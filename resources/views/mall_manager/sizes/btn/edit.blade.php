@if(isManager() && $owner == auth()->guard('web')->user()->id)
<a href="{{ url('mall-manager/sizes/' . $id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
@endif