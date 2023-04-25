{*Шаблон корзины*}

<section class="cart">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Корзина</h2>
                {if !$rsProducts}
                В корзине пусто.
                {else}
                <form action="/cart/order/" method="POST">
                <h2>Данные заказа</h2>
                {foreach $rsProducts as $item name=products}
                    Товар: {$smarty.foreach.products.iteration}<br>
                    <a style="color:black;"href="/product/{$item['id']}/">{$item['name']}</a><br />
                    <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});"/>
                    Цена за ед:
                    <span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span><br>
                    Стоимость:
                    <span id="itemRealPrice_{$item['id']}">{$item['price']}</span><br>
                    <a style="color:red;" id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;" title="Удалить из корзины"><button type="button" class="btn btn-danger">Удалить из корзины</button></a>
	                <a style="color:#008000;" id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;" title="Восстановить элемент"><button type="button" class="btn btn-success">Восстановить</button></a>
                    <hr>
                {/foreach}
                
                <button type="submit" class="btn btn-primary" value="Оформить заказ">Оформить заказ</button>
                </form>	  
   
                {/if}
            </div>
        </div>
   </div>
</section>
