@extends('layouts.layout')
@section('content')

        <h1>Update Students information </h1>

        <a href="{{route('index')}}" class="btn btn-success">Back</a>

    <form class="form-group" action="{{route('update', ['id' => $student->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <span style="color: red">{{$errors->first('name')}}</span>
            <input  class="form-control" type="text" name="name" value="{{$student->name}}"><br>

            <span style="color: red">{{$errors->first('name')}}</span>
            <input  class="form-control" type="text" name="surname" value="{{$student->surname}}"><br>

        <span style="color: red">{{$errors->first('birth_date')}}</span>
        <input class="form-control" type="date" name="birth_date" value="{{$student->birth_date}}"><br>


        <span style="color: red">{{$errors->first('action')}}</span>
        <select class="form-control" name="action" id="">
            <option value="grand">Budjet</option>
            <option value="kontrakt">Kontrakt</option>
        </select><br>

        <input class="btn btn-primary" type="submit" value="Save">
        </div>


    </form>
@endsection

