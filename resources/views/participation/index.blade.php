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
                    <th>Course</th>
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
                        <td>{{ $participant->spr_nama }}</td>
                        <td>
                            @if($participant->profile->profile_pic)
                                <a href="{{ asset('storage/' . $participant->profile->profile_pic) }}" target="_blank">View Profile Pic</a>
                            @else
                                No Profile Pic
                            @endif
                        </td>
                        <td>{{ $participant->spr_nokp }}</td>
                        <td>{{ $participant->ssm_matrik }}</td>
                        <td>{{ $participant->ssm_kursus }}</td>
                        <td>
                            @if($participant->pivot->proof_image)
                                <a href="{{ asset('storage/' . $participant->pivot->proof_image) }}" target="_blank">View Proof</a>
                            @else
                                No Proof Image
                            @endif
                        </td>
                        <td>
                            @if ($participant->pivot->is_approve == 1)
                                <span class="badge bg-success">Approved</span>
                            @elseif ($participant->pivot->is_approve == 2)
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($participant->pivot->created_at)->format('d M Y h:i A') }}</td>
                        <td>
                            @if (is_null($participant->pivot->is_approve))
                                <form action="{{ route('programme.approveParticipant', $programme->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $participant->id }}">
                                    <input type="number" name="point_awarded" class="form-control mb-1" placeholder="Points" value="{{ $programme->prog_default_point }}" required>
                                    <input type="text" name="comment" class="form-control mb-1" placeholder="Comment" value="default">
                                    <button type="submit" name="action" value="1" class="btn btn-success btn-sm">Approve</button>
                                </form>
                                <form action="{{ route('programme.approveParticipant', $programme->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $participant->id }}">
                                    <button type="submit" name="action" value="0" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            @else
                                <p>Point: {{ $participant->pivot->point_awarded }}</p>
                                <p>Comment: {{ $participant->pivot->comment }}</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No participants have joined this programme yet.</p>
    @endif
</div>
