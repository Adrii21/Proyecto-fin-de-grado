<tr>
    @if($call->user_id == Auth::user()->id)
    <td class="row">
        {{$call->date}}
        <span class="note">{{ $call->time }}</span>
    </td>

    <td>{{ $call->from_name }}</td>
    <td>{{ $call->to_name }}</td>
    <td>{{$call->asunto}}</td>
    <td>{{ $call->contact }}</td>
    <td>{{ $call->tlf }}</td>
    <td>{{ $call->tlf2 }}</td>
    <td>{{ $call->mail }}</td>
    <td>{{ $call->mail2 }}</td>
    <td>{{ $call->observaciones }}</td>
    <td>
        <span class="note">{{ $call->created_at->format('d/m/Y') }}</span>
    </td>
    <td class="text-right">
        <a href="{{ route ('user.destroy', $call) }}" class="btn-outline-warning btn-sm"><span>Eliminar</span></a>
    </td>
        @endif
</tr>
