<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="col sml-12 med-8">

                <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

                    <article class="post hentry published" role="article" id="post-<?php echo $plxShow->artId(); ?>">

                        <header class="entry-header">
                            <div class="entry-category">
                                <span class="cat-links">
                                    <?php $plxShow->artCat() ?>
                                </span>
                            </div>
                            <h1 class="entry-title">
                                <?php $plxShow->artTitle('link'); ?>
                            </h1>
                            <div class="entry-meta small-part">
                                <span class="posted-on">
                                    <i class="fa fa-clock-o space-left-right"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
                                </span>
                                <span class="byline">
                                    <i class="fa fa-user space-left-right"></i>
                                    <span class="author vcard">
                                        <?php $plxShow->artAuthor(); ?>
                                    </span>
                                </span>
                                <span class="comment-link">
                                    <i class="fa fa-comments-o space-left-right"></i>
                                    <?php $plxShow->artNbCom(); ?>
                                </span>
                            </div>
                        </header>

                        <section class="entry-content">
                            <?php $plxShow->artThumbnail(); ?>
                            <?php $plxShow->artChapo(); ?>
                        </section>

                        <footer class="entry-footer">
                            <div class="entry-bottom small-part">
                                <span class="tags-links">
                                    <i class="fa fa-tags space-right"></i>
                                    <?php $plxShow->artTags() ?>
                                </span>
                            </div>
                        </footer>

                    </article>

                <?php endwhile; ?>

                <nav class="pagination text-center">
                    <?php $plxShow->pagination(); ?>
                </nav>

                <span>
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</span>

            </section>

        </main>
    </div>
    <?php include(dirname(__FILE__).'/sidebar.php'); ?>
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
