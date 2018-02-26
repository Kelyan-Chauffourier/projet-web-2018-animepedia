<?php
/**
 * Created by PhpStorm.
 * User: max77
 * Date: 12/02/2018
 * Time: 18:50
 */

define("NOMDEPAGE", "Abonnement");
include_once $_SERVER['DOCUMENT_ROOT'] . '/configuration.php';
require ENTETE;

if( isset($_POST['fromPerson']) )
{
    $fromPerson = '+from%3A'.$_POST['fromPerson'];
    echo $fromPerson;
}?>

<link rel="stylesheet" href=<?php echo CSS_ABONNEMENT?>>
<section class="section-padding">
   <div class="container">
	   <div class="section-title">
		   <h2>Packs</h2>
		   <p class="pt-2">Abonnez-vous pour nous soutenir et gagner quelques fonctionnalités en plus ^^</p>
	   </div>
	   <div class="single-pricing-box">
		   <h3>Gratuit</h3>
		   <div class="pricing-icon">
			   <i class="fa fa-bullhorn"></i>
		   </div>
		   <div class="pricing-list">
			   <ul>
			   <li class="off">Navigation sans pub</li>
			   <li class="off">Rang Discord</li>
			   <li class="off">Section Premium</li>
		   </ul>
		   </div>
		   <h3 class="pricing-count">$0/mo</h3>
	   </div>
	   <div class="single-pricing-box">
		   <h3>Premium</h3>
		   <div class="pricing-icon">
			   <i class="fa fa-bullhorn"></i>
		   </div>
		   <div class="pricing-list">
			   <ul>
			   <li>Navigation sans pub</li>
			   <li>Rang Discord</li>
			   <li>Section Premium</li>
		   </ul>
		   </div>
		   <h3 class="pricing-count">$5/mo</h3>
		   <a href="<?php echo SITE ?>wizard" class="bordered-btn">Commander</a>
	   </div>
   </div>
</section>

<?php include PIEDDEPAGE;?>