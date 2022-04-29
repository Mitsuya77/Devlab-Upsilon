<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">Logo</h1>
              
          <h3>Contact</h3>
          
          <address>
            Pôle de Léonard de Vinci. La défense<br>
                
            <a class="footer__btn" href="">Email </a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h3 class="nav__title">Media</h3>
      
            <ul class="nav__ul">
              <li>
                <a href="#">Instagram</a>
              </li>
      
              <li>
                <a href="#">Facebook</a>
              </li>
                  
              <li>
                <a href="#">Twitter</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h3 class="nav__title">AIDE</h3>
            
            <ul class="nav__ul nav__ul--extra">
              <li>
                <a href="#">Statut de commande</a>
              </li>
              
              <li>
                <a href="#">Expédition et livraison</a>
              </li>
              
              <li>
                <a href="http://hjngjvj.cluster029.hosting.ovh.net/remboursements_retours/">Retours</a>
              </li>
              
              <li>
                <a href="http://hjngjvj.cluster029.hosting.ovh.net/faq/">FAQ</a>
              </li>
              
              <li>
                <a href="#">Modes de paiement</a>
              </li>
              
              <li>
                <a href="#">Nous contacter</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h3 class="nav__title">Legal</h3>
            
            <ul class="nav__ul">
              <li>
                <a href="">Conditions générales de vente</a>
              </li>
              
              <li>
                <a href="http://hjngjvj.cluster029.hosting.ovh.net/politique-de-confidentialite/">Conditions d'utilisation</a>
              </li>
              
              <li>
                <a href="#">Paramètres des cookies</a>
              </li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; Uspilon</p>
          

        </div>
      </footer>   

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
