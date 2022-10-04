    <x-master>
        <x-slot:title>
            Orders
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-file-pdf"></i> pdf</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> excel</button>
                </div>
                <a type="button" href="{{route('orders.orderAdd')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                    Create Order
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Delivery Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $order)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $order->productName }}</td>
                        <td>{{ $order->unitPrice }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->unit }}</td>
                        <td>{{ $order->deliveryDate }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{route('orders.allOrder')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{route('orders.edit',$order->id)}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="{{route('orders.delete',$order->id)}}" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>

        </div>

    </x-master>