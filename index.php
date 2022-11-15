<?php include 'elements/header.php'; ?>
    
<div class="hero">
    <div class="hero__img">
        <img src="source/img/porsche.png" alt="Porsche">
    </div>
    <div class="hero__content">
        <p class="hero__pretext">Retour en Bourse pour la marque de voiture aux modèles légendaires</p>
        <h1 class="hero__title">Porsche a fait son entrée en bourse ! </h1>
        <p class="hero__text__space">Investissez dans l’un des constructeurs de voitures de sport les plus performants au monde.</p>
        <p class="hero__text__space">Bénéficiez d'un retour sur investissement garanti grâce au placement Porsche le plus sécurisé du marché, <span>en hausse de plus de 3,18%</span>.</p>
    </div>

    <form action="" class="hero__form">
        <div class="hero__form__grid">
                <!-- Nom -->
            <div class="hero__form__grp">
                <label for="name" class="hero__form__label">Votre nom</label>
                <input type="text" name="name" id="name" class="hero__form__input" placeholder="Doe">
            </div>
                <!-- Prénom -->
            <div class="hero__form__grp">
                <label for="firstname" class="hero__form__label">Votre prénom</label>
                <input type="text" name="firstname" id="firstname" class="hero__form__input" placeholder="John">
            </div>
        </div>

            <!-- mail -->
        <div class="hero__form__grp">
                <label for="mail" class="hero__form__label">Votre adresse mail</label>
                <input type="text" name="firstname" id="firstname" class="hero__form__input" placeholder="johndoe@mail.fr">
        </div>

            <!-- Téléphone -->
        <div class="hero__form__grp">
                <label for="phone" class="hero__form__label">Votre numéro de téléphone</label>
                <input type="text" name="phone" id="phone" class="hero__form__input" placeholder="06XXXXXXXX">
        </div>

        <div class="hero__form__grp">
            <label for="souhait">Vous souhaitez</label>
            <select name="souhait" id="souhait" class="hero__form__input">
                <option value selected disabled hidden>Vous souhaitez</option>
                <option value="Ouvrir un compte">Ouvrir un compte avec un conseiller</option>
                <option value="Plus d'info">Plus d'information avec un de nos conseillers</option>
                <option value="Info Porsche">Plus d'information sur l'action Porsche</option>
                <option value="Autres">Autres</option>
            </select>
        </div>

        <div class="hero__form__grp">
            <label for="souhait">Nombre d'actions précommandées estimé</label>
            <select name="souhait" id="souhait" class="hero__form__input">
                <option value selected disabled hidden>Estimation de votre précommande</option>
                <option value="25 à 50">25 à 50 actions (1875€ à 3750€)</option>
                <option value="50 à 100">50 à 100 actions (3750€ à 7500€)</option>
                <option value="100 à 200">100 à 200 actions (7500€ à 15000€)</option>
                <option value="+200">+ de 200 actions (15000€)</option>
            </select>
        </div>

        <button type="submit" class="btn outlined-secondary">Vérifié votre éligibilité</button>
        

    </form>
</div>

<div class="last">
    <h2 class="last__title">Une opportunitée à ne pas rater !</h2>
    <div class="last__content">
        <div class="last__content__img">
            <img src="source/img/porsche_black.png" alt="Porsche">
        </div>
        <div class="last__content_text">
            <p class="last__content__text__text__space">Porsche réussit son opération séduction après son entrée en Bourse avec près de 10 milliards d’actions vendues sur la première journée. </p>
            <p class="last__content__text__text__space">Porsche s’impose depuis des années sur le marché automobile non seulement par ses voitures de sports exceptionnelles mais aussi par sa flexibilité. Cette diversité prouve à quel point le constructeur est attentif et en vogue avec les tendances du marché de l’automobile. </p>
            <p class="last__content__text__text">Le deuxième constructeur de voitures de sport mondial compte tirer de cet investissement des milliards de liquidités afin de financer la transition de Volkswagen vers les véhicules 100% éléctriques.</p>
        </div>
    </div>
</div>

<?php include 'elements/footer.php'; ?>
