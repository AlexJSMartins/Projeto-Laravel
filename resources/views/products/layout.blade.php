<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <title>Projeto Laravel</title>
</head>
<style>
      body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .tabela{
            margin-top: 60px;
        }

        .topo{
            margin-top: 30px;
        }

        .hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
  margin-top: 50px;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}
</style>
<body>
    
    <div class="container">
        @yield('content')
    </div>
</body>

</html>

