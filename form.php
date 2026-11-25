<<form action="thnks.php" method="post">

    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <label for="firstname">Prénom :</label>
<input type="text" id="firstname" name="user_firstname" required>

    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="email" name="user_email" required>
    </div>

    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone" required>
    </div>

    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="user_subject" required>
            <option value="Information">Information</option>
            <option value="Réclamation">Réclamation</option>
            <option value="Assistance">Assistance</option>
            <option value="Autre">Autre</option>
        </select>
    </div>

    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>