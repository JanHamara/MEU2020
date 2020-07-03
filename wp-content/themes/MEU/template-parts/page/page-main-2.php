<?php
/*
    Content Template | page-main-2
	Copyright: 2017, Seculin, www.seculin.com
*/
?>

    <div class="container-fluid">
        <div class="header-container">

            <?php $query = new WP_Query( "pagename=what-will-i-do" ); ?>
            <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <h1 class="meu-section-heading meu-link meu-m2-heading">
                <span><?php the_title(); ?></span>
            </h1>

            <div class="meu-section-paragraph">
                <?php the_content(); ?>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <div id="meu-m2-roles">
                <div id="m2-role-1" class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/01.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MEP</div>
                    <div class="meu-m2-roledesc">Member of the European Parliament</div>
                </div>
                <div id="m2-role-2" class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/03.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MINISTER</div>
                    <div class="meu-m2-roledesc">Member of the Council <br/>of Ministers</div>
                </div>
                <div id="m2-role-3" class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/05.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">JOURNALIST</div>
                    <div class="meu-m2-roledesc">Member of the European Federation of Journalists</div>
                </div>

                <div id="m2-role-1-content" class="meu-m2-role meu-m2-role-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/01.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MEP</div>
                    <div class="meu-m2-roledesc">Member of the European Parliament</div>
                    <div class="meu-m2-roledesc meu-m2-rolecontent">
                        Members of the European Parliament or MEPs represent their countries as well as the
                        political grouping they are part of in the European Parliament. As a successful applicant you
                        will be assigned to one of the eight political groups and your task will be to find allies across
                        other groups as well as work with the Ministers to pass any amendments to legislative
                        proposals.
                    </div>
                </div>
                <div id="m2-role-2-content" class="meu-m2-role meu-m2-role-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/03.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MINISTER</div>
                    <div class="meu-m2-roledesc">Member of the Council <br/>of Ministers</div>
                    <div class="meu-m2-roledesc meu-m2-rolecontent">
                        Ministers represent each EU member state and debate legislative proposals as presented by
                        the European Commission. Your primary focus in this position will be to represent the best
                        interests of your assigned country and the national government you will be part of. At the
                        same time, you will have to cooperate with your colleagues and promote common European
                        values and interests.
                    </div>
                </div>
                <div id="m2-role-3-content" class="meu-m2-role meu-m2-role-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/05.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">JOURNALIST</div>
                    <div class="meu-m2-roledesc">Member of the European Federation of Journalists</div>
                    <div class="meu-m2-roledesc meu-m2-rolecontent">
                        Journalists are an important part of every political meeting, bringing up heated information
                        from the negotiation table. Your role as a journalist in this simulation will comprise of
                        publishing political briefings and breaking news in real-time so that everyone can keep up
                        with the recent developments and all decisions being made during negotiations. Being a
                        journalist in this conference will also entail writing posts about webinars, workshops and
                        other side events.
                    </div>
                </div>
            </div>
        </div>
    </div>