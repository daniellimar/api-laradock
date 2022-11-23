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
            $votantes = '';
            foreach ($request_API as $key => $votante) {
                $votantes .= $votante['id'].',';
            }
            $list_votantes = explode(",", rtrim($votantes, ','));
            dd($list_votantes);
        @endphp
    </div>
</body>
</html>