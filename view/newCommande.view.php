<main id="commande">
    <div class="page-content">
    <form method="post" action="formulaire.php" class="formulaire">
            <fieldset>
            <section class="commande">
                        <label for="nom" id="label_nom">Nom </label>
                        <label for="prenom" id="label_prenom">Prénom </label>
                            <input id="nom" name="nom" placeholder="Entrez votre nom de famille" type="text" required/>
                            <input id="prenom" name="prenom" placeholder="Entrez votre prénom" type="text" required/>
                        <label for="mail">Adresse mail </label>
                            <input id="mail" name="mail" placeholder="Entrez votre adresse mail" type="email" required/>
                        <label for="adresse">Adresse postale</label>
                            <input id="adresse" name="adresse" placeholder="Entrez votre adresse postale" type="text" required/> 
                        <label for="ville">Ville</label>
                            <input id="ville" name="ville" placeholder="Entrez votre ville" type="text" required/> 
                        <label for="produit">Choisir un produit</label>
                            <select name="produit">
                                <option value="">Choisissez le produit à acheter</option>
                                <option value="pack">Pack éphémère</option>
                                <option value="ozias">Ozias</option>
                                <option value="ales">Alès</option>
                                <option value="eyries">Eyriès</option>
                                <option value="ss_verre_contours">Dessous de verre couleurs</option>
                                <option value="ss_verre_contours">Dessous de verre contours</option>
<option value="pinte">Pinte</option>
                            </select>
                        <label for="quantite">Quantité</label>
                        <input id="quantite" name="quantite" type="number" min="0" placeholder="1"required/>
                    </section>

                    <input type="submit" id='submit' value='Valider la commande' id="" >
            </fieldset>
        </form>
    </div>