<h3>Fornecedor</h3>

@php

@endphp


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if ($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
