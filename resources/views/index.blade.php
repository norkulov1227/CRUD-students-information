@extends('layouts.layout')
@section('content')

    <h1>Students informations</h1>
    <a href="{{route('create')}}" class="btn btn-success">Create</a>

    <table class="table table-light">
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Tug'ilgan sana</th>
                <th>Ta'lim turi</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>

        @foreach ($student as $value)

                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</a></td>
                    <td>{{$value->surname}}</td>
                    <td>{{$value->birth_date}}</td>
                    <td>{{$value->action}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>
                        <div class="btn-group" role="group">

                        <a href="{{route('edit', ['id' => $value->id])}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('destroy', ['id' => $value->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger " value="Delete">
                        </form>
                        </div>

                    </td>
                </tr>

        @endforeach

    </table>

@endsection
