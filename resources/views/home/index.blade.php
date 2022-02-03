<html>
    <body>
    @extends('layouts.app')
    @section('content')
        <h1>{{$listname}}</h1>
    @if (count($todos) > 0)
    <table>
        <!-- Iterate through tasks. -->
        <th>
          ID
        </th>  
        <th>
          Date
        </th> 
        <th>
       Todo Item
        </th> 
        <th>
        Detail
        </th> 
        @foreach ($todos as $todo)
        <tr>
            <!-- Show task. -->
            <tr>
                
            </tr>
            <td>
                <div>{{ $todo->id }}</div>
            </td>
            <td>
                <div>{{ $todo->created_at->format('Y-m-d') }}</div>
            </td>
            <td>
                <div>{{ $todo->description }}</div>
            </td>
            <td>
               <a href="/home/detail/{{ $todo->id }}">detail</a>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    @endsection
    </body>
</html>