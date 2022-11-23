<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste ok</title>
</head>
<body>
    <H1>Consumindo API</H1>
    <h4>Votantes: {{$quant_votantes}}</h4>
    
    <div>
        @php
            $votantes_id = '';
            $votantes_nome = '';
            foreach ($request_API as $key => $votante) {
                $votantes_id .= $votante['id'].','.$votante['nome'].',';
            }
            $list_votantes_id = explode(",", rtrim($votantes_id, ','));
            $list_votantes_id = array_chunk($list_votantes_id, 2);

            dd($request_API);
            dd($list_votantes_id);
        @endphp
    </div>
</body>
</html>