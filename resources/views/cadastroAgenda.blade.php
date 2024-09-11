<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Agenda Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastrar Contatos</h1>
    <section>
    <div class="container" style="display: flex; justify-content:center; align-items:center; height:50vh">
        <form class="row g-3" method="POST" action="">
         @csrf
            <div class="col-md-6">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="text" name="nome" value="{{old('nome')}}" class="form-control" id="inputNome" placeholder="João">
                @error('nome')
                <div class="text-sm-start text-light">*Preencher o campo Nome.</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" id="inputEmail" placeholder="jose@email.com">
                @error('email')
                <div class="text-sm-start text light">*Preencher o campo email.</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
    </section>
</body>
</html>