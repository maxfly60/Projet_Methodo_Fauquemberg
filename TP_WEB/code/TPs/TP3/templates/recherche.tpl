{* Commentaire Smarty *} 
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titre}</title>
    </head>
    <body>
        <h1>recherche</h1>
            {foreach $liste as $ligne}
                <table>
                    <tr><th>Artiste</th><th>Album</th></tr>
                    <tr>
                    <td><a href='../artiste/{$ligne[3]}/{$ligne[6]}'>{$ligne[6]}</a></td>
                    <td>{$ligne[1]}</td>
                    </tr>
                </table>
            {foreachelse}
                Aucun élément n'a été trouvé dans la recherche
            {/foreach}
    </body>
</html>