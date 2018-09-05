<?php
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

require __DIRE__.'vendor/autolad.php';

$config = new Configuration();

include 'include/config.php';

$conn = DriverManager::getConnection($connectionParams, $config);

if (!isset($_COOKIE['newsletter'])) {
  $noNewsletter = "<div class=\"container newsletter_container\">
  <div class=\"row\">
  <form class=\"form_newsletter\" action=\"index.php\" method=\"post\">
  <p class=\"text_newsletter_form\">Pour ne rien rater de l'activité parlementaire de la sénatrice Cathy Apourceau-Poly, inscrivez-vous à lettre d'information en renseignant votre adresse email ci-dessous. Vous recevrez régulièrement les derniers articles publiés.</p>
  <input class=\"input_newsletter_form\" type=\"text\" name=\"email\" placeholder=\"adresse email\" autofocus required>
  </form>
  </div>
  </div>
  ";
}

if (isset($_POST['email'])) {
  if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
    $req=$conn->executeUpdate('INSERT INTO civicrm_email (email) VALUES (:email)', [
      'email' => $_POST['email']
    ]);
    setcookie("newsletter", "inscription_newsletter_done", time()+60*60*24*365);
    $newsletterDone = "<div class=\"container newsletter_container\">
    <div class=\"row\">
    <p class=\"text_newsletter\">Votre inscription à la lettre d'information de Cathy Apourceau-Poly</p>
    </div>
    </div>
    ";
  }
}
