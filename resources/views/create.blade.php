@extends('layouts.layout')
@section('content')

        <h1>Enter Students information </h1>

        <a href="{{route('index')}}" class="btn btn-success">Back</a>

    <form class="form-group" action="{{route('store')}}" method="POST">
        @csrf

        <div class="container">
            <span style="color: red">{{$errors->first('name')}}</span>
            <div class="input-group mb-3">
                <input  class="form-control" type="text" name="name" placeholder="Ism">
            </div>


            <span style="color: red">{{$errors->first('surname')}}</span>
            <div class="input-group mb-3">
                <input  class="form-control" type="text" name="surname" placeholder="Familya">
            </div>



        <span style="color: red">{{$errors->first('birth_date')}}</span>
        <div class="input-group mb-3">
            <input class="form-control" type="date" name="birth_date">
        </div>



        <span style="color: red">{{$errors->first('action')}}</span>
        <select class="form-control" name="action" id="">
            <option value="grand">Budjet</option>
            <option value="kontrakt">Kontrakt</option>
        </select>

        <input class="btn btn-success" type="submit" value="Save">
        </div>


    </form>
@endsection

