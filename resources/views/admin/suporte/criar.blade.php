<h1>Nova Duvida</h1>

<form action="{{ route('suporte.store') }}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>