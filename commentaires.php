<?php if(!defined('PLX_ROOT')) exit; ?>

<div id="comments" class="comments-area">
    <?php if($plxShow->plxMotor->plxRecord_coms): ?>

        <h2 class="comments-title">
            <?php echo $plxShow->artNbCom(); ?>
        </h2>

        <?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

            <ol class="comment-list">
                <li id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?> parent">

                    <article id="com-<?php $plxShow->comIndex(); ?>" class="comment-body">

                        <header class="comment-meta">
                            <div class="comment-author vcard">
                                <b class="fn"> <?php $plxShow->comAuthor('link'); ?></b> <span class="says"><?php $plxShow->lang('SAID'); ?> </span>
                            </div>

                            <div class="comment-metadata smallPart">
                                <a href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">
                                    <time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time>
                                </a>
                            </div>

                        </header>

                        <div class="comment-content">
                            <p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
                        </div>

                        <?php
 /*                       <div class="reply">
                            <a rel="nofollow" class="comment-reply-link smallPart" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?><i class="fa fa-reply spaceLeft"></i></span></a>
                        </div>
                        */?>


                    </article>


                </li>
            </ol>

        <?php endwhile; # Fin de la boucle sur les commentaires ?>

        <p><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></p>

    <?php endif; ?>

    <?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">
                <?php $plxShow->lang('WRITE_A_COMMENT') ?>
            </h3>

            <p id="form" action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform" class="comment-form">

                <p class="comment-form-author">
                    <label for="id_name"><i class="fa fa-user"></i><span class="screen-reader-text"><?php $plxShow->lang('NAME') ?></span></label>
                    <input id="id_name" name="name" type="text"  size="20" aria-required='true' maxlength="30" placeholder="<?php $plxShow->comGet('name',''); ?>"/>
                </p>

                <p class="comment-form-email">
                    <label for="id_mail"><i class="fa fa-envelope"></i><span class="screen-reader-text"><?php $plxShow->lang('EMAIL') ?></span></label>
                    <input id="id_mail" name="mail" type="text"  size="20" aria-required='true' placeholder="<?php $plxShow->comGet('mail',''); ?>"/>
                </p>

                <p class="comment-form-url">
                    <label for="id_site"><i class="fa fa-link"></i><span class="screen-reader-text"><?php $plxShow->lang('WEBSITE') ?></span></label>
                    <input id="id_site" name="site" type="text" size="20" placeholder="<?php $plxShow->comGet('site',''); ?>"/>
                </p>


                <p class="comment-form-comment">
                    <label for="id_content"><i class="fa fa-comments"></i><span class="screen-reader-text"><?php $plxShow->lang('COMMENT') ?></span></label>
                    <textarea id="id_content" name="content" rows="8" aria-required="true" placeholder="<?php $plxShow->comGet('content',''); ?>"></textarea>
                </p>

                <?php if($plxShow->plxMotor->aConf['capcha']): ?>

                    <p class="comment-form-comment">
                        <label for="id_rep"><strong> <?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
                        <?php $plxShow->capchaQ(); ?>
                        <input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;"/>
                    </p>

                <?php endif; ?>


                <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="<?php $plxShow->lang('SEND') ?>"/>
                    <input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
                </p>


                <?php $plxShow->comMessage('<p id="com_message" class="text-red"><strong>#com_message</strong></p>'); ?>

            </form>


            <script>
                function replyCom(idCom) {
                    document.getElementById('id_answer').innerHTML='<?php $plxShow->lang('REPLY_TO'); ?> :';
                    document.getElementById('id_answer').innerHTML+=document.getElementById('com-'+idCom).innerHTML;
                    document.getElementById('id_answer').innerHTML+='<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()"><?php $plxShow->lang('CANCEL'); ?></a>';
                    document.getElementById('id_answer').style.display='inline-block';
                    document.getElementById('id_parent').value=idCom;
                    document.getElementById('id_content').focus();
                }
                function cancelCom() {
                    document.getElementById('id_answer').style.display='none';
                    document.getElementById('id_parent').value='';
                    document.getElementById('com_message').innerHTML='';
                }
                var parent = document.getElementById('id_parent').value;
                if(parent!='') { replyCom(parent) }
            </script>
        </div>

    <?php else: ?>

        <p class="no-comments">
            <?php $plxShow->lang('COMMENTS_CLOSED') ?>.
        </p>

    <?php endif; # Fin du if sur l'autorisation des commentaires ?>

</div>
