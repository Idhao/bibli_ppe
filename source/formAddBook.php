    <form>
    <fieldset>
        <legend>Information à propos du livre :</legend>
        <table>
            <tr>
                <td><label for="author">Auteur : </label></td>
                <td><select name="author" id="">

                    </select></td>
            </tr>
            <tr>
                <td><label for="editor">Éditeur : </label></td>
                <td><select name="editor" id="">

                    </select></td>
            </tr>
            <tr>
                <td><label for="gender">Genre : </label></td>
                <td><select name="gender" id="">

                    </select></td>
            </tr>
            <tr>
                <td><label for="language">Langue : </label></td>
                <td><select name="language" id="">

                    </select></td>
            </tr>
            <tr>
                <td><label for="ISBN">ISBN : </label></td>
                <td><input type="text" name="ISBN" placeholder="2070411613" size="30" maxlength="10"></td>
            </tr>
            <tr>
                <td><label for="title">Titre : </label></td>
                <td><input type="text" name="title" placeholder="L'étranger" size="30" maxlength="30"></td>
            </tr>
            <tr>
                <td><label for="year">Année : </label></td>
                <td><input type="number" name="year" min="1500" max="2020" step="1" value="1999"></td>
            </tr>
            <tr>
                <td><label for="nbPages">Nombre de pages : </label></td>
                <td><input type="text" name="nbPages" placeholder="192" size="30" maxlength="4"></td>
            </tr>
        </table>
    </fieldset>
</form>
