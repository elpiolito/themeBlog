<?php
/**
 * Created by IntelliJ IDEA.
 * User: dev
 * Date: 09/03/17
 * Time: 18:16
 */

<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>


<div class="menu-default-menu-container">
    <ul id="menu-default-menu" class="menu nav-menu" aria-expanded="false">
        {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
        {% else %}
            {% for page in pages.children.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'current-menu-item' : '' %}
                <li class="{{ current_page }} menu-item">
                    <a href="{{ page.url }}">
                        {% if page.header.icon %}<i class="fa fa-{{ page.header.icon }}"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        {% endif %}
        {% for mitem in site.menu %}
            <li>
                <a href="{{ mitem.url }}">
                    {% if mitem.icon %}<i class="fa fa-{{ mitem.icon }}"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
        {% if config.plugins.login.enabled and grav.user.username %}
            <li><i class="fa fa-lock"></i> {% include 'partials/login-status.html.twig' %}</li>
        {% endif %}
    </ul>
</div>

