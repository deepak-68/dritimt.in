@extends('layouts.back')
@section('title', 'Manage Events')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage Events</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Events</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4></h4>
              <div class="card-header-form">
                @can('create-user')
                    <a href="{{ url('event/create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Event</a>
                @endcan
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                  @forelse ($events as $event)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d-m-Y')  }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->end_date)->format('d-m-Y') }}</td>
                    <td>{{ $event->description }}</td>    
                    </td>
                    <td>
                        <a href="{{ url('event/edit/'.$event->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="{{ url('event/delete/'.$event->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this event?');"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No Event Found!</strong>
                        </span>
                    </td>
                @endforelse
                </table>
                {{ $events->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
