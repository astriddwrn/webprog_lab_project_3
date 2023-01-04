<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')

<div class="d-flex flex-column align-items-center">
    <div class="row">
        <div class="margin-tb ">
            <div class="">
                <h2>Dashboard</h2>
            </div>
            <div class="my-4">
                <a class="btn btn-success" href="{{ route('dashboard.create') }}"> Create New item</a>
            </div>
        </div>
    </div>
    @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered w-75">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Catgory</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Discount</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->category->id }}</td>
            <td>{{ $item->rating }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}%</td>
            <td>
                <form action="{{ route('dashboard.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('dashboard.edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>