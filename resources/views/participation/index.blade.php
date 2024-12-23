
<div class="container">
    <h1>Participants for {{ $programme->prog_name }}</h1>

    @if($participants->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Profile Pic</th>
                    <th>IC Number</th>
                    <th>Matric Number</th>
                    <th>Course </th>
                    <th>Proof Image</th>
                    <th>Approval Status</th>
                    <th>Participation Date</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($participants as $participant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $participant->spr_nama}}</td>
                    <td>@if($participant->profile->profile_pic)
                        <a href="{{ asset('storage/' . $participant->profile->profile_pic) }}" target="_blank">View Proof</a>
                    @else
                        No Proof Image
                    @endif</td>
                    <td>{{ $participant->spr_nokp }}</td>
                    <td>{{ $participant->ssm_matrik}}</td>
                    <td>{{ $participant->ssm_kursus}}</td>
                    <td> @if($participant->pivot->proof_image)
                            <a href="{{ asset('storage/' . $participant->pivot->proof_image) }}" target="_blank">View Proof</a>
                        @else
                            No Proof Image
                        @endif
                    </td>
                    <td>{{ $participant->pivot->is_approve ? 'Approved' : 'Pending'}}
                    </td>
                    <td>{{ \Carbon\Carbon::parse($participant->pivot->created_at)->format('d M Y h:i A') }}</td>
                    <td>
                        @if ($participant->pivot->is_approve = true)
                        point = {{$participant->pivot->point_awarded}}
                        comment = {{ $participant->pivot->comment }}
                        @else
                        <form action="{{ route('programme.approveParticipant', $programme->id) }}" method="POST">
                            @csrf
                            <input type="number" name="point_awarded" value="{{$programme->prog_default_point}}">
                            <input type="text" name="comment" value="default">
                            <input type="hidden" name="user_id" value="{{ $participant->id }}">
                            <button type="submit" {{ $participant->pivot->is_approve ? 'disabled' : '' }}>
                                {{ $participant->pivot->is_approve ? 'Approved' : 'Approve' }}
                            </button>

                        @endif
                        </form>
                        <form action="{{ route('programme.rejectParticipant', $programme->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $participant->id }}">
                            <button type="submit" {{ $participant->pivot->is_rejected ? 'disabled' : '' }}>
                                {{ $participant->pivot->is_rejected ? 'Rejected' : 'Reject' }}
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No participants have joined this programme yet.</p>
    @endif
</div>

