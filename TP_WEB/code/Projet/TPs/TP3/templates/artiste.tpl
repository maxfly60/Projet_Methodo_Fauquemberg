{* Commentaire Smarty *} 
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titre}</title>
    </head>
    <body>
        <h1>artiste</h1>
        <table>
            <tr><h1>Album</h1></tr>
            {foreach $liste as $ligne}
                <tr>
                <td>{$ligne[1]}</td>
                </tr>
            {/foreach}
            </table>
    </body>
</html>