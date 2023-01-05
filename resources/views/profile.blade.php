<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')
    <h2 class="text-center my-4">Profile</h2>
    <div class="row w-100 d-flex flex-column align-items-center">
        <div class="col-5">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->name }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->email }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->gender }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Date of Birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->date_of_birth }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Country</h6>
                        </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->country }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <form method="POST" action="{{ route('logout') }}">
                                <div class="col-sm-12">
                                @csrf
                                <a href="{{ route('logout') }}" style="color: inherit;"><button type="button" class="btn btn-secondary w-100 text-white" onclick="event.preventDefault(); this.closest('form').submit();" >Logout</a></button>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <h2 class="text-center my-4">Transaction History</h2>
    <div class="row w-100 d-flex flex-column align-items-center">
        <table class="table table-bordered w-75">
            <tr>
                <th>Transaction Date</th>
                <th>Product Name</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
            @foreach ($histories as $history)
            <tr>
                <td>{{ $history->created_at }}</td>
                <td>{{ $history->item_id }}</td>
                <td>{{ $history->size }}</td>
                <td><input type="number" class="qty-input" id="qty" value="{{ $history->quantity }}"></td>
                <td>Rp. <input type="number" class="price-input" id="price" value="{{ $history->item->price }}"></td>
                <td>Rp. <input type="number" class="total-input" id="total" value=""></td>
            </tr>
            @endforeach

            
        </table>

        <table class="table table-bordered w-75">
            <tr>
                <th>Sum transaction</th>
            </tr>
            <tr>
                <td>Rp. <input type="number" class="sum-input" id="total" value=""></td>
            </tr>    
        </table>
    </div>


    


<script>
    let $sum = 0;
        let $total = 0;
        $('.qty-input').each(function(){
            let $price = $(this).parent().siblings().find('.price-input').val();
            let $qty = $(this).val();
            $sum += Math.floor($price*$qty);
            $total_price = Math.floor($price*$qty);
            $(this).parent().siblings().find('.total-input').val($total_price);
        });
        // $tax = Math.floor($sum/10/100);
        // $total += $sum+$tax;
        $('.sum-input').val($sum);
        // $('.input-tax').text($tax);
</script>

</body>
</html>