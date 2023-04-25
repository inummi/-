{*Страница заказ*}
<section>
    <div class="container"
        <div class="row">
            <div class="col-12 mt-3">
                <h2>Данные заказа</h2>
                <form id="frmOrder" action="/cart/caveorder/" method="POST">
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
                        <hr
                {/foreach}
                
                    {if isset($arUser)}
        {$buttonClass = ""}
        <h2> Данные заказчика </h2>
        <div id="orderUserInfoBox" {$buttonClass}>
            {$name = $arUser['name']}
            {$phone = $arUser['phone']}
            {$adress = $arUser['adress']}
            <table>
                <tr>
                    <td>Имя*</td>
                    <td><input type="text" id="name" name="name" value="{$name}" /></td>
                </tr>
                <tr>
                    <td>Тел*</td>
                    <td><input type="text" id="phone" name="phone" value="{$phone}" /></td>
                </tr>
                <tr>
                    <td>Адрес*</td>
                    <td><textarea id="adress" name="adress" />{$adress}</textarea></td>
                </tr>
            </table>
        </div>
    
    {else}
        <div id="loginBox">
		<div class="menuCaption">Авторизация</div>
			<table>
			<tr>
				<td>Логин</td>
				<td><input type="text" id="loginEmail" name="loginEmail" value=""/></td>
			</tr>
			<tr>
				<td>Пароль</td>
				<td><input type="password" id="loginPwd" name="loginPwd" value=""/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" onclick="login();" value="Войти"/></td>
			</tr>
			</table> 
	</div> 
	
	<div id="registerBox">или <br />
            <div class="menuCaption">Регистрация нового пользователя:</div>
            email* :<br />
            <input type="text" id="email" name="email" value=""/><br />
            пароль* : <br />
            <input type="password" id="pwd1" name="pwd1" value=""/><br />
            повторить пароль* :<br />
            <input type="password" id="pwd2" name="pwd2" value=""/><br />

            Имя* :<br />
            <input type="text" id="name" name="name" value="" /><br />
            Тел* :<br />
            <input type="text" id="phone" name="phone" value="" /><br />
            Адрес* :<br />
            <textarea  id="adress" name="adress" /></textarea><br />

            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
        </div>
	{$buttonClass = "class='hideme'"}
        
    {/if}
                <input {$buttonClass} id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();"/>
                
                </form>
            </div>
        </div>
    </div>
</section>