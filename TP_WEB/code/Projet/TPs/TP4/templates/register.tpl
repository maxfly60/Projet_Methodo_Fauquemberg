<form action="/register" method="POST">
    <p>
        <label for="">Nom</label>
        {message.nom|default:''}
        <input type="text" name="nom" value={$nom|escape|default:''}>
        {$message.nom|default:''}
    </p>
    <p>
        <label for="">Email</label>
        <input type="email" name="email" value={$email|escape|default:''}>
    </p>
        <p><label for="">Mot de passe</label>
        <input type="password" name="motdepasse">
    </p>
    <p><input type="submit"></p>
</form>
