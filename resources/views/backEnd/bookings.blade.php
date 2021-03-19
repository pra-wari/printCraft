<div class="main-content">
    <div>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Product Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Size (cm)</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->mobile}}</td>
                    <td>{{$booking->size}}</td>
                    <td>{{$booking->address}}</td>
                    <td>{{$booking->status}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>