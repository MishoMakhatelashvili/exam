@extends('layouts.app')

<a href="{{route('categories.create')}}">add caregories</a>

@foreach($category as $category)
	<ul>
   
    <li class="list-group-item">სახელი:{{$category->name}}_სტატუსი:{{$category->status}}
    <a href="{{route('categories.edit', $category->id)}}">edit</a>
    </li>
    </ul>

@endforeach
