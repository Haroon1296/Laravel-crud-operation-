@foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <th scope="row">{{$product->name}}</th>
      <td>{{date('d-F-Y', strtotime($product->created_at))}}</td>
      <td>
        <a href="{{url('productEdit', $product->id)}}" class="btn btn-primary">
            Edit
        </a>
        <a href="{{url('productShow', $product->id)}}" class="btn btn-success">
            Show
        </a>
        <a href="{{url('productDelete', $product->id)}}" onclick="return confirm('You want to delete product?');" class="btn btn-danger">
            Delete
        </a>
      </td>
    </tr>
    
@endforeach