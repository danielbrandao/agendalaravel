<html>
<head>
    
</head>
<body>
    @foreach($pessoas as $pessoa)
        Nome: {{ $pessoa->nome }} <br>
    Telefone:
    @foreach($pessoa->telefone as $telefone)
        {{ $telefone->telefone}}
        <br><br>
    @endforeach
    @endforeach
    
</body>
</html>