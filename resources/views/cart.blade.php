<x-app-layout>
    <div class="py-12">
        <div class="container mx-auto px-sm-4 px-lg-5">
            <section class="h-100">
                <div class="container py-5">
                    <div class="row d-flex justify-content-center my-4">
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">Cart - 3 items</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="cod-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded">
                                                <img class="w-100" src="" alt="">
                                                <a href="#">
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <p><strong>Product Name</strong></p>
                                            <p>Color: red</p>
                                            <p>Size: M</p>
                                            <a href="#" class="btn btn-sm btn-danger mb-2 mt-3">remove</a>
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <div class="d-flex mb-4">
                                                <a href="#" class="btn btn-primary me-2">&#43;</a>
                                                <input type="number" name="quantity" min="0">
                                                <a href="#" class="btn btn-primary ms-2">&#8722;</a>
                                            </div>
                                            <p class="text-start text-md-center">Product Price</p>
                                        </div>

                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">Summary</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-grout-item d-flex justify-content-between align-items-center border-0">
                                           Products
                                           <span>$78.45</span> 
                                        </li>
                                        <li class="list-grout-item d-flex justify-content-between align-items-center border-0">
                                           Shipping
                                           <span>Free</span> 
                                        </li>
                                        <hr class="mx-1">
                                        <li class="list-grout-item d-flex justify-content-between align-items-center border-0  mb-3">
                                           
                                           <div>
                                            <strong>Total Amount</strong>
                                            <strong>
                                                <p class="mb-0">(Excluding VAT)</p>
                                            </strong>
                                           </div> 
                                           <span><strong>$78.45</strong></span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-success">Go to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</x-app-layout>