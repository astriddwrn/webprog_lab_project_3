<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')

    <div class="container">
         @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <div class=" text-center mt-5 ">
            <h1 >Add Product</h1>
        </div>

        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class = "container">
                            <form id="contact-form" role="form" action="{{ route('dashboard.store') }}" method="POST">
                            @csrf
                            
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Product Name</label>
                                                <input id="form_name" type="text" name="id" class="form-control" required >                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Choose Category</label>
                                                <select id="form_need" name="category_id" class="form-control" required>
                                                    <option value="" selected disabled>--Select Category--</option>
                                                    <option value="women">Women</option>
                                                    <option value="men">Men</option>
                                                </select>                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Rating (1-5)</label>
                                                <input id="form_name" type="number" name="rating" class="form-control" required>                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Price (Rp)</label>
                                                <input id="form_name" type="number" name="price" class="form-control" required>                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Discount (%)</label>
                                                <input id="form_name" type="number" name="discount" class="form-control" required>                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Description</label>
                                                <div><textarea id="description" name="description" rows="4" cols="50" required></textarea></div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Add Product" >        
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>