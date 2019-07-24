
		<nav id="menuMain" class="col-lg-8">
			<ul>
				{*$data|var_dump*}
					{foreach from=$data.mainMenu item="item" key="key"}
						{if $item.parentId == 0}
							<li><a href="{$item.slug}" title="{$item.slug}">{$item.text}</a>
							{*Если есть потомки*}
							{if $item.hasChildren}
								{foreach from=$data.mainMenu item='item' key='key'}
									{if $item.parentId == 0}
										<li><a href="{$item.slug}" title="{$item.slug}">{$item.text}</a></li>
									{/if}
								{/foreach}
							{/if}
							</li>


						{/if}
						{foreachelse}
						<li><a href="#">+Home</a></li>
						<li><a href="#Services">+Servi</a></li>
						<li><a href="#About">+About</a></li>
						<li><a href="#Works">+Work</a></li>
						<li><a href="#Blog">+Blog</a></li>
						<li><a href="#Clients">+Clie</a></li>
						<li><a href="#Contact">+Conta</a></li>

					{/foreach}

			</ul>
		</nav>


