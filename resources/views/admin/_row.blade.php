<tr>
    <td class="text-muted">{{ $call->id }}</td>
    <td class="row">
        {{$call->date}}
        <span class="note">{{ $call->time }}</span>
    </td>
    <td>{{ $call->from_name }}</td>
    <td>{{ $call->to_name }}</td>
    <td>{{ $call->asunto }}</td>
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
        <a href="{{ route ('form.show', $call) }}" class="btn-outline-success btn-sm"><span>Ver</span></a>
        <a href="{{ route ('form.edit', $call) }}" class="btn-outline-info btn-sm"><span>Editar</span></a>

        <a href="{{ route ('destroy', $call) }}" class="btn-outline-warning btn-sm"><span>Eliminar</span></a>
    </td>
</tr>
