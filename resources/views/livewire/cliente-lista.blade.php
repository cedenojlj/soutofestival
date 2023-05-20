<div>


    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Customers') }}
                </span>

            </div>
        </div>

        <div class="card-body">



            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif



            <div class="row mb-3">

                <label for="search" class="col-md-8 col-form-label text-md-end">Search:</label>

                <div class="col-md-4">

                    <input wire:model="search" class="form-control" type="text" placeholder="Search customers..." />

                </div>
            </div>




            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>

                            <th>Name</th>
                            <th>Email</th>
                            <th>Email</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>

                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->email2 }}</td>

                            <td>
                                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                    {{-- <a class="btn btn-sm btn-primary "
                                        href="{{ route('customers.show',$customer->id) }}"><i
                                            class="fa fa-fw fa-eye"></i>
                                        Show</a> --}}
                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('customers.edit',$customer->id) }}"><i
                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa fa-fw fa-trash"></i> Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- {{$customers->links('pagination::bootstrap-5')}} --}}
    {{$customers->links()}}


</div>