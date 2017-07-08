<form action="{{route('categories.update',$category->id)}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<input type="hidden" name="_method" value="PUT">
	<p>
	კატეგორიის დასახელება:
	<input type="text" name="name" value="{{$category->name}}">
	</p>
	{{$errors->first('number')}}
	<p>
	სტატუსი
	<input type="status" name="status" value="{{$category->status}}">
	</p>
	
	<p>
	ნუმერაცია
	<input type="number" name="number" value="{{$category->number}}">
	</p>


	<button type="submit">save</button>
</form>