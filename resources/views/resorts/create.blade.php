@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
        <div class="col-10 offset-1">
            <div class="card bg-light">
                <div class="card-header">
                    <a href="{{ route('resorts.index') }}" class="btn btn-sm btn-primary float-end">Resorts List</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('resorts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <div>
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div>
                                <label for="">Rent</label>
                                <input type="number" name="rent" class="form-control">
                            </div>

                            <div>
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div>
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>

                            <div>
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>