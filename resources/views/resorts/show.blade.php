<div class="container">
    <div class="row">
        <div class="col-12">
         <a href="{{ route('resorts.index') }}" class="btn btn-sm btn-info mb-2 float-end">Back to Resorts List</a>
                 
         
 
         <table class="table table-striped table-bordered">
             <tr class="text-center">
                <th class="text-center">Name</th>
                <th class="text-center">Rent</th>
                <th class="text-center">Address</th>
                <th class="text-center">Description</th>
                <th class="text-center">Image</th>
             </tr>
     
             <tr class="text-center">
                 <td class="text-center">{{ $resort->name ?? ''}}</td>
                 <td class="text-center">{{ $resort->rent ?? ''}}</td>
                 <td class="text-center">{{ $resort->address ?? ''}}</td>
                 <td class="text-center">{{ $resort->description ?? ''}}</td>
                 
                 {{-- <td class="text-center">
                     
                     @if (file_exists(storage_path().'/app/public/vendors/'.$resort->image) && (!is_null($resort->image)))
 
                     <img src="{{ asset('storage/resorts/'.$resort->image) }}" height="100" alt="">
                     
                     @else
                     <p class="text-danger">Img not Found</p>
                     @endif
                    
                 </td> --}}
                 
             </tr>
         </table>
        </div>
    </div>
</div>