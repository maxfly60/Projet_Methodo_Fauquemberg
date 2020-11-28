{* Commentaire Smarty *} 
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titre}</title>
    </head>
    <body>
        <h1>liste</h1>
            <table>
            <tr><th>Artiste</th><th>Album</th><th>Date de sortie</th></tr>
            {foreach $liste as $ligne}
                <tr>
                <td><a href='artiste/{$ligne[3]}/{$ligne[6]}'>{$ligne[6]}</a></td>
                <td>{$ligne[1]}</td>
                <td>{$ligne[4]}</td>
                </tr>
            {/foreach}
            </table>
    </body>
</html>


