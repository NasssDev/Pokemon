<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die();
}
?>

<main id="homepage" class="<?php echo $page_css_id ?? "" ?>">
    <section id="qui-sommes-nous" class="text-cards-horizon team-section">
        <div class="container">
            <div class="row mainRow">
                <div class="col-12 text-cards-horizon__textWrapper">
                    <div class="pre-title pre-title--centered">Notre équipe de pokemons</div>
                    <div class="title title--centered">Des pokemons prêt à servir</div>
                    <p class="els-text-lg els-text-centered">Depuis toujours, ils sont armés pour le jeu.</p>
                </div>
                <div class="col-12 text-cards-horizon__cardsWrapper">
                    <?php
                    if(!empty($data))
                        foreach($data["pokemons"] as $member) { ?>

                            <div data-typebtn="team-btn" class="box modal-open-btn"
                                 data-title="<?php echo $member->getName() ?>">
                                <div class="top-bar"></div>
                                <div class="content">
                                    <img src="<?php echo '/assets/img/pokemons/pikachu.png' ?>" alt="<?php echo $member->getName() ?? '' ?>">
                                    <p><?php echo $member->getName() ?? "" ?></p>
                                    <?php echo $member->getType() ?? "" ?>
                                </div>
                                <div class="box-footer">
                                    <p><?php echo "Présentation" ?></p>
                                </div>
                            </div>

                        <?php } ?>
                </div>
            </div>
        </div>
    </section>
  
</main>
