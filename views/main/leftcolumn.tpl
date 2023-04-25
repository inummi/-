 <section>
    <div class="container">
         <div class="row col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Категории:</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                             </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                
                                    {foreach from = $rsCategories item=item}
                                        {if isset($item['children'])}
                                            {foreach from = $item['children'] item = itemChild}
                                                <li class="nav-item"> 
                                                <a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a>
                                      
                                                </li>
                                            {/foreach}
                                        {/if}
                                    {/foreach}
                              </ul>
                            </div>
                        </div>
                    </nav>

                    
                    
                    
                </div>
                </div>
               </section>