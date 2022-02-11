<html>
    <body>
    @extends('layouts.app')
    @section('content')
        <h1>{{$listname}}</h1>
    @if (count($products) > 0)
    <table>
        <!-- Iterate through tasks. -->
        <th>
          ID
        </th>  
        <th>
          Description
        </th> 
        <th>
       Quantity
        </th> 
        <th>
        Price
        </th> 
        @foreach ($products as $product)
        <tr>
            <!-- Show task. -->
            <tr>
                
            </tr>
            <td>
                <div>{{ $product->id }}</div>
            </td>
            <td>
                <div>{{ $product->description }}</div>
            </td>
            <td>
                <div>{{ $product->quantity }}</div>
            </td>
            <td>
                <div>{{ $product->price }}</div>
            </td>
            <td>
               <a href="/product/detail/{{ $product->id }}">detail</a>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    @endsection
    </body>
</html>