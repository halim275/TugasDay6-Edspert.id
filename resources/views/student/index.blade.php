@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Create Student') }}</div>

                    <div class="card-body">
                        <form action="{{ route('student-store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" />
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="parent" class="form-label">Parent's Name</label>
                                <input type="text" name="parent" class="form-control @error('parent') is-invalid @enderror" id="parent" />
                                @error('parent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" rows="3"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Table Student') }}</div>

                    <div class="card-body">
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Parent</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->phone_number }}</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
