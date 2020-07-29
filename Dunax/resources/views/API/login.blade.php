<div class="container">
  <form action="/json-api" method='GET'>
  @csrf  
    <input type="email" placeholder="Email" name="email">
    <input type="password" placeholder="Senha" name="senha">
    <input type="text" placeholder="ID Usuario" name="id_user">
    <button type="submit">CONFIRMAR</button>
  </form>
</div>