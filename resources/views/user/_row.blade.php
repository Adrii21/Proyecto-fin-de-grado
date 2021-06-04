<tr>
    @if($call->user_id == Auth::user()->id)
        <td class="row">
            {{$call->date}}
            <span class="note">{{ $call->time }}</span>
        </td>
        <td class="text-center">{{ $call->from_name }}</td>
        <td>{{ $call->to_name }}</td>
        <td>{{ $call->contact }}</td>
        <td>{{ $call->asunto }}</td>
        <td>{{ $call->tlf }}
            <span class="note">{{ $call->tlf2 }}</span>
        </td>
        <td>{{ $call->mail }}
            <span class="note">{{$call->mail2}}</span>
        </td>
        <td>{{ $call->observaciones }}</td>
        <td>
            <span class="note">{{ $call->created_at->format('d/m/Y') }}</span>
        </td>
        <td class="text-right">
            <a href="{{ route ('form.show', $call) }}" class="btn-outline-success btn-sm"><span>Ver</span></a>
            <a href="{{ route ('form.edit', $call) }}" class="btn-outline-info btn-sm"><span>Editar</span></a>

            <a href="{{ route ('user.destroy', $call) }}" class="btn-outline-warning btn-sm"><span>Eliminar</span></a>
        </td>
        @endif
</tr>
