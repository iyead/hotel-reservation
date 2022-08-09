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
                {{-- <div class="card-header">
                    <a href="{{ route('reservations.index') }}" class="btn btn-sm btn-primary float-end">Reservations List</a>
                </div> --}}

                <div class="card-body">
                    <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <div>
                                <label for="">Resort</label>
                                <input type="text" name="resort_id" class="form-control">
                            </div>
                            <div>
                                <label for="">Date From</label>
                                <input type="date" name="date_from" class="form-control">
                            </div>

                            <div>
                                <label for="">Date To</label>
                                <input type="date" name="date_to" class="form-control">
                            </div>

                            <div>
                                <label for="">Customer Name</label>
                                <input type="text" name="customer_name" class="form-control">
                            </div>

                            <div>
                                <label for="">Customer Email</label>
                                <input type="text" name="customer_email" class="form-control">
                            </div>

                            <div>
                                <label for="">Customer Phone</label>
                                <input type="number" name="customer_phone" class="form-control">
                            </div>

                            <div>
                                <label for="">Customer Address</label>
                                <input type="text" name="customer_address" class="form-control">
                            </div>

                            {{-- <div>
                                <label for="">Is Confirmed</label>
                                <input type="checkbox" name="is_confirmed" class="form-control">
                            </div> --}}

                            <div>
                                <label for="">Notes</label>
                                <input type="text" name="notes" class="form-control">
                            </div>

                            <button type="submit">Save</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>