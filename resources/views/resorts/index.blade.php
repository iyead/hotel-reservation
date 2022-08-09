<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                
                <div class="card-header">
                    <a href="{{ route('resorts.create') }}" class="btn btn-sm btn-primary float-start">Add Resort</a>
                </div>
        
                @if (session('message'))
                    <p class="text-primary">{{ session('message') }}</p>
                @endif 
        
                <div class="card-body">    
                    <table class="table table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Rent</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($resorts as $resort)
                            <tr>
                                
                                <td class="text-center">{{ $resort->name }}</td>
                                <td class="text-center">{{ $resort->rent }}</td>
                                <td class="text-center">{{ $resort->address }}</td>
                                <td class="text-center">{{ $resort->description }}</td>
                                <td class="text-center">{{ $resort->image }}</td>
                                {{-- <td class="text-center">
                                        @if (file_exists(storage_path().'/app/public/vendors/'.$vendor->image) && (!is_null($vendor->image)))

                                        <img src="{{ asset('storage/vendors/'.$vendor->image) }}" height="120" alt="">

                                    @else
                                    <p class="text-danger">Img not Found</p>
                                    @endif
                                </td> --}}
                                
                                <td class="text-center d-flex">
                                    <a href="{{ route('resorts.show',$resort->id) }}" class="btn btn-sm btn-info me-2">Show</a>
                                    <a href="{{ route('resorts.edit',$resort->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                    <a href="{{ route('resorts.delete',$resort->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                    
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