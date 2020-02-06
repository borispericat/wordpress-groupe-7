<footer id="footer">
        <!--
            Tout le contenu de la partie head de mon site
         -->	<?php echo do_shortcode('[ninja_form id=3]');  ?>
         <div class="sitemap-section">
            <div class="sitemap-1">
                <ul>
                    <li>Accueil</li>
                    <li>Tarifs</li>
                    <li>Reserver</li>
                    <li>Politique de vente</li>
                    <li>Foire aux questions</li>
                </ul>
            </div>
            <div class="sitemap-1">
                <ul>
                    <a href="#"><li>A propos</li></a>
                    <li><a href="#">Qui sommes nous</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">L'Equipe</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </div>
            <div class="custom-select" style="width:200px;">
                <select name="language">
                    <option value="1">Français</option>
                    <option value="2">English</option>
                    <option value="3">Spanish</option>
                    <option value="3">Chinese</option>
                </select>
            </div>
        </div>

        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>