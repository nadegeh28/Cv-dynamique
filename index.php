<?php get_header(); ?>

    <h1>Curriculum Vitae - Nsenga Heaven Nadège</h1>
    <br>

    <h2>Informations Personnelles</h2>
<ul>
    <li> Nom: Nsenga Heaven</li>
    <li> Prénom : Nadège</li>
    <li>Date de naissance : 28 juin 2001 (22ans)</li>
    <li>Adresse : Avenue De La Perséverance, 1070 Anderlect, Belgique </li>
    <li> Numéro de Téléphone : 0483725585 </li>
    <li>Mail : nadege.nsenga@isfsc.be</li>
</ul>
<h2>Formations</h2>
<ul>
    <li>2019-2020 : Bachelier Marketing, EPHEC</li>
<li>2020 - à présent : Bachelier Ecriture Multimédia, ISFSC</li>
    </ul>
   
<h2>Expériences Professionnelles</h2>
<?php 
     $exp_proList = new WP_Query([
        'post_type' => 'exp_pro',
        'posts_per_page'=> -1
     ]);
     ?>

    <ul>
        <?php while ($exp_proList->have_posts()) : $exp_proList->the_post(); ?>
        <li><?php the_title(); ?></li>
        <?php endwhile; ?>
</ul>



<h2>Compétences</h2>
<?php 
      $competencesList = new WP_Query([
        'post_type'=> 'competences',
        'posts_per_page' => -1
    ]);
    ?>
<ul>
  <?php while ($competencesList->have_posts()): $competencesList->the_post(); ?>
  <li><?php the_title(); ?></li>
  <?php endwhile; ?> 


 
</ul>



<h2>Langues</h2>
<?php
    $languesList = new WP_Query([
        'post_type'=>'langues',
        'posts_per_page' => -1
        ]);
        ?>
<ul>
    <?php while ($languesList->have_posts()): $languesList->the_post();?>
    <li><?php the_title(); ?></li>
    <?php endwhile; ?> 

   
</ul>

<h2>Centre d'intêret</h2>
<?php 
     $centre_d_interetList = new WP_Query([
        'post_type'=> 'centre_d_interet',
        'posts_per_page' => -1
    ]);
    ?>
<ul>
    <?php while ($centre_d_interetList->have_posts()): $centre_d_interetList->the_post();?>
    <li><?php $hobbyList->the_title(); ?></li>
    <?php endwhile; ?>

</ul>

<?php get_footer(); ?>
