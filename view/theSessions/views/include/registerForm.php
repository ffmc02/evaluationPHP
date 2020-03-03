<div class="titleGreen">  
    <h2>inscription</h2>
</div>
<div>
    <p><?= isset($addUserMessage) ? $addUserMessage : '' ?></p>
    <p><?= isset($formError['register']) ? $formError['register'] : '' ?></p>
    <form method="POST" action="#" name="addUser"> 
        <label for="surname">Votre nom:</label>
        <input type="text" placeholder="Votre nom" name="surname" id="surname" value=""/>
        <p><?= isset($formError['surname']) ? $formError['surname'] : '' ?></p> 
        <label for="firstname">Votre prénom:</label>
        <input type="text" placeholder="Votre prénom" name="firstname" id="firstname" value=""/>
        <p><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p> 
        <label for="email">Votre mail:</label>
        <input type="text" placeholder="Votre mail" name="email" id="email" value="" />
        <p><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
        <label for="password">Votre mot de passe:</label>
        <input type="password" placeholder="Votre mot de passe" name="password" id="password" />
        <p><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
        <label for="password2">Confirmation du mot de passe:</label>
        <input type="password" placeholder="Confirmation de votre MDP" name="confirmPassword" id="password2" />
        <p><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></p>
        <input type="submit" name="registration" value="je m'inscris" />
    </form>
</div>