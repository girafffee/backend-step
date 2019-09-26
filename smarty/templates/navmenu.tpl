<nav class="main-nav">

    <ul>
        {foreach from=$menus key="name" item="url"}
            {if is_array($url)}
                {if isset($url.a_class)}
                    <li><a href="{$url.url}" class="{$url.a_class}">{$name}</a></li>

                {elseif isset($url.li_class)}
                    <li class="{$url.li_class}"><a href="{$url.url}">{$name}</a></li>

                {elseif isset($url.li_class) AND isset($url.a_class)}
                    <li class="{$url.li_class}"><a href="{$url.url}" class="{$url.a_class}">{$name}</a></li>
                {/if}
            {else}
                <li><a href="{$url}">{$name}</a></li>
            {/if}
        {/foreach}
    </ul>
</nav>