<div class="row">
    <div class="col-8 offset-2">
        <div class="card bg-light">
            <div class="card-header">
                <a href="{{ route('resorts.index') }} " class="btn btn-sm btn-primary float-end">Resorts List</a>
            </div>

            <div class="card-body">
                <form action="{{ route('resorts.update',$resort->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div>
                        <div>
                            <label for="">Name</label>
                        </div>
                        <input type="text" name="name" value="{{ $resort->name }}" class="form-control">
                    </div>

                    <div>
                        <div>
                            <label for="">Rent</label>
                        </div>
                        <input type="number" name="rent" value="{{ $resort->rent }}" class="form-control">
                    </div>

                    <div>
                        <div>
                            <label for="">Address</label>
                        </div>
                        <input type="text" name="address" value="{{ $resort->address }}" class="form-control">
                    </div>

                    <div>
                        <div>
                            <label for="">Description</label>
                        </div>
                        <input type="text" name="description" value="{{ $resort->description }}" class="form-control">
                    </div>

                    <div>
                    <div>
                        <label for="">Image</label>
                    </div>
                    {{-- <input type="file" name="image" value="{{ $resort->image }}" class="form-control">
                    <img src="{{ asset('storage/resorts/'.$resort->image) }}" height="100" alt=""> --}}
                    </div>

                    <button type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>