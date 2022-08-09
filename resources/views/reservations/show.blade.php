<div class="container">
    <div class="row">
        <div class="col-12">
         <a href="{{ route('reservations.index') }}" class="btn btn-sm btn-info mb-2 float-end">Back to Reservations List</a>
                 
         
 
         <table class="table table-striped table-bordered">
             <tr class="text-center">
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
     
             <tr class="text-center">
                 <td class="text-center">{{ $resort->resort_id ?? ''}}</td>
                 <td class="text-center">{{ $resort->date_from ?? ''}}</td>
                 <td class="text-center">{{ $resort->date_to ?? ''}}</td>
                 <td class="text-center">{{ $resort->customer_name ?? ''}}</td>
                 <td class="text-center">{{ $resort->customer_email ?? ''}}</td>
                 <td class="text-center">{{ $resort->customer_phone ?? ''}}</td>
                 <td class="text-center">{{ $resort->customer_address ?? ''}}</td>
                 <td class="text-center">{{ $resort->is_confirmed ?? ''}}</td>
                 <td class="text-center">{{ $resort->notes ?? ''}}</td>
                 
             </tr>
         </table>
        </div>
    </div>
</div>