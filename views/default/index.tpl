{*Шаблон главной страницы*}
 {foreach $rsProducts as $item name = products}
     <div style="float: left; padding: 0px 30px 40px 0px; width: 150px; height: 170px;">
             <a href = "/product/{$item['id']}/">
                 <img src="/images/products/{$item['image']}" width="150" />
                 </a><br />
                 <a href="/product/{$item['id']}/" style="color: black;">{$item['name']}</a>
                 {if $smarty.foreach.products.iteration mod 3 == 0}
                     <div style="clear:both;"></div>
                 {/if}
    </div>
     
{/foreach}




