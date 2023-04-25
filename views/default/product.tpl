{*Страница продукта*}
<div>
<h3>{$rsProduct['name']}</h3>


<img width="540" src="/images/products/{$rsProduct['image']}" style="float:left">
<br />
 <h3>Описание</h3>
<p>{$rsProduct['description']}</p>
</div>

<h4>Стоимость: {$rsProduct['price']} ₽ </h4>
<br />
<a style="color:red" id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onclick="removeFromCart({$rsProduct['id']});
   return false;" alt="Удалить из корзины"> Удалить из корзины </a>

<a style="color:#008000" id="addCart_{$rsProduct['id']}"{if $itemInCart}class="hideme"{/if} href="#" onclick="addToCart({$rsProduct['id']});
   return false;" alt="Добавить в корзину"> Добавить в корзину </a>

