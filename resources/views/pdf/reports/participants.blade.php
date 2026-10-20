<table width="100%" style="border-collapse: collapse; font-size: 9px;">
    <thead>
        <tr style="background: #1F4E79; color: #fff;">
            @foreach ($columns as $label)
                <th style="border: 1px solid #BFBFBF; padding: 4px;">{{ $label }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @forelse ($registrations as $participant)
            <tr>
                @foreach (array_keys($columns) as $key)
                    <td style="border: 1px solid #BFBFBF; padding: 4px;">
                        {{ $formatter($participant, $key) }}
                    </td>
                @endforeach
            </tr>
        @empty
            <tr>
                <td colspan="{{ count($columns) }}" style="text-align: center; padding: 10px;">
                    Nenhum participante encontrado para os filtros seleccionados.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
