<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                
                <div class="card-header">
                    <a href="{{ route('reservations.create') }}" class="btn btn-sm btn-primary float-start">Hotel Reservation</a>
                </div>
        
                @if (session('message'))
                    <p class="text-primary">{{ session('message') }}</p>
                @endif 
        
                <div class="card-body">    
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center">Resort</th>
                                <th class="text-center">Date From</th>
                                <th class="text-center">Date To</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Customer Email</th>
                                <th class="text-center">Customer Phone</th>
                                <th class="text-center">Customer Address</th>
                                <th class="text-center">Is Confirmed</th>
                                <th class="text-center">Notes</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr>
                                
                                <td class="text-center">{{ $reservation->resort_id }}</td>
                                <td class="text-center">{{ $reservation->date_from }}</td>
                                <td class="text-center">{{ $reservation->date_to }}</td>
                                <td class="text-center">{{ $reservation->customer_name }}</td>
                                <td class="text-center">{{ $reservation->customer_email }}</td>
                                <td class="text-center">{{ $reservation->customer_phone }}</td>
                                <td class="text-center">{{ $reservation->customer_address }}</td>
                                <td class="text-center">{{ $reservation->is_confirmed }}</td>
                                <td class="text-center">{{ $reservation->notes }}</td>
                                
                                <td class="text-center d-flex">
                                    <a href="{{ route('reservations.show',$reservation->id) }}" class="btn btn-sm btn-info me-2">Show</a>
                                </td> 
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>