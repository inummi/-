       {*Левый столбец*}
        <div id="leftColumn">
    
            <div id="leftMenu">
            
                <div class="menuCaption"><h3 style="color:#008000">Каталог</div>
                {foreach from = $rsCategories item=item}
                    <a href = "/?controller=category&id={$item['id']}" style="color:#8B4513; font-size: 1.25rem;">{$item['name']}:</a><br />
                    
                    {if isset($item['children'])}

                        {foreach from = $item['children'] item = itemChild}

                            <img src="/images/tree.png" width="20px" /> <a href="/?controller=category&id={$itemChild['id']}" style="color:#8B4513; font-size: 1.10rem;">{$itemChild['name']}</a><br>

                        {/foreach}

                    {/if}
                {/foreach}
            </div>
            
            {if isset($arUser)}
                <div id="userBox">
                    <a  style="color:black; font-size: 1.15rem;" href="/user/" id="userLink">{$arUser['displayName']}</a><br />
                    <a style="color:red;" href ="/user/logout/" onclick="logout();"> Выход </a>
                </div>
             {else}
                 
            <div id="userBox" class="hideme">
                <a href="#" id="userLink"></a><br />
                <a href="/user/logout" onclick="logout();">Выход</a>
            </div>
            
             {if ! isset($hideLoginBox)}    
                 
            <div id="loginBox">
                <div class="menuCaption" style="color:#008000"><h3>Авторизация</div>
                <input type="text" id="loginEmail" name="loginEmail" value=""/><br />
                <input type="password" id="loginPwd" name="loginPwd" value=""/><br />
                <input type="button" onclick="login();" value="Войти"/>
            </div>
            
            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox();"><h3 style="color:#008000;">Регистрация</div>
                <div id="registerBoxHidden" style="color:black;">
                    email:<br />
                    <input type="text" id="email" name="email" value=""/><br />
                    пароль:<br />
                    <input type="password" id="pwd1" name="pwd1" value=""/><br />
                    повторить пароль:<br />
                    <input type="password" id="pwd2" name="pwd2" value=""/><br />
                    <input type="button" onclick="registerNewUser ();" value="Зарегистрироваться"/>
                </div>
            </div>
            {/if}   
            {/if}
        </div>
 
                
                
                
                

    

