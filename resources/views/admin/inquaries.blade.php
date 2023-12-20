<div class="card-body">
  <table id="inquiry_details" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>User_Name</th>
        <th>Contact Details</th>
        <th>Message</th>
        <th>Preffered Response Type</th>
        <th>Status</th>
        <!-- <th>Responded By</th> -->
        <th >Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
            @forelse($inquiry_details as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{$data->name}}</td>
            @if($data->preferred_response_id==2)
        <td>{{$data->email}}</td>
            @else
        <td>{{$data->contact_number}}</td>
            @endif
        <td>{{$data->message}}</td>
        <td>{{$data->response_medium}}</td>
            @if($data->response_status==0)
        <td>Awatied For Response</td>
            @else
        <td>Already Responded</td>
            @endif
        <!-- <td></td> -->
        <td >{{$data->date}}</td>
        <td>
          <div class="form-check form-switch">
              <input class="form-check-input respond-toggle" type="checkbox" role="switch" id="respond"data-inquiry-id="{{ $data->user_id }}" {{ $data->response_status == 1 ? 'checked' : '' }}>
              <label class="form-check-label" for="flexSwitchCheckChecked">Responded</label>
          </div>
         <!--  <div id="responded_by" data-inquiry-id="{{ $data->user_id }}">
            
          </div> -->
        </td>
      </tr>
              @empty
    <td>Please enter Somedata</td>
              @endforelse
    </tbody>
  </table>
</div>
