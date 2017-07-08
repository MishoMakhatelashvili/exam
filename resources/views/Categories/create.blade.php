<form action="{{route('categories.create')}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<p>
	კატეგორიის დასახელება:
	<input type="text" name="name" value="{{ old('name') }}">
	</p>
	{{$errors->first('number')}}
	<p>
	<input type="hidden" name="status" value="true">
	</p>
	
	<p>
	ნუმერაცია
	<input type="number" name="number" value="3">
	</p>


	<button type="submit">save</button>
</form>