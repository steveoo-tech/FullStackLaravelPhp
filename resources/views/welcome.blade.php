<html>
    <body>
    <h1>{{$firstname}}</h1><h1>{{$lastname}}</h1>
    @if (count($products) > 0)
    <table>
        <!-- Iterate through tasks. -->
        @foreach ($products as $product)
        <tr>
            <!-- Show task. -->
            <td>
                <div>{{ $product->id }}</div>
            </td>
            <td>
                <div>{{ $product->description }}</div>
            </td>
            <td>
         <a href="/product/detail/{{ $product->id }}">detail</a>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    </body>
</html>