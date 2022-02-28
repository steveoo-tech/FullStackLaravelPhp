<html>
    <body>
    @extends('layouts.app')
    @section('content')
        <h1>{{$listname}}</h1>

           <!-- Show link to form for creating Todo object. -->
        <p>
        <a href="/home/create">Create New Todo Item</a>
        </p>

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
            <td>
            <form action="/home/delete" method="POST">
            <input type="hidden" name="id" value="{{$todo->id}}"/>
            <!-- For safety, the csrf token ensures the post request is 
                    from the current application and not a 3rd party -->
            {{ csrf_field() }}
            <input type="submit" value="Delete"/>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    @endsection
    </body>
</html>