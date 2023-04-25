<html> 
    <head>
            <title>{$pageTitle}</title>
            
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="{$templateWebPath}css/fontello.css" type="text/css" />
            <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css" />
            
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
            
            
            
            <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="/js/main.js"></script>
            <meta charset="UTF-8">
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        

        <body>
            <header>
                <container>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="myLogoTitle text-center">
                                <a href="/"><img width="225px" src="/images/bd.png" alt="альтернативный текст"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="social text-center">
                                
                                <a class="icon-vkontakte" href="#" title="" style=""></a>
                                <a class="icon-instagram" href="#" title="" style=""></a>
                                <a class="icon-telegram" href="#" title="" style=""></a><br>
                                
                                {if isset($arUser)}
                                    <div id="userBox">
                                        <a  style="color:black; font-size: 1.15rem;" href="/user/" id="userLink">{$arUser['displayName']}</a><br />
                                        <a style="color:red;" href ="/user/logout/" onclick="logout();"> Выход </a>
                                    </div>
                                {else}
                                <div class="reg" data-bs-toggle="modal" data-bs-target="#Modal1">
                                    <a data-bs-toggle="modal" data-bs-target="#Modal1" href="#" style="">Регистрация </a>
                                </div>
                                 <div class="reg" data-bs-toggle="modal" data-bs-target="#Modal2">
                                    <a data-bs-toggle="modal" data-bs-target="#Modal2" href="#" style="">Авторизация </a>
                                </div>
                                
                                {/if}
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="cart text-center" >
                                <a href="/cart/" title="Перейти в корзину">
                                    <div class="menuCaption icon-basket"></div>
                                    В корзине
                                </a>
                                <div id="cartCntItems" id="cartCntItems">
                                    {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </container>
            </header>
        
        
        <!-- Modal 1 -->
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel1">Регистрация</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <div id="registerBox">
                    <form class="row g-3 needs-validation" novalidate>
                              <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="pwd1" class="form-label">Пароль</label>
                                <input type="password" class="form-control" name="pwd1" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="pwd2" class="form-label">Повторить пароль</label>
                                <input type="password" class="form-control" name="pwd2" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              
                              <div class="col-12">
                                <button class="btn btn-primary" onclick="registerNewUser ();">Зарегистрироваться</button>
                              </div>
                            </div>    
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
        <!-- Modal 2 -->
                    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel2">Регистрация</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <div id="loginBox">
                            <form class="row g-3 needs-validation" novalidate>
                                      <div class="col-md-4">
                                        <label for="loginEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="loginPwd" class="form-label">Пароль</label>
                                        <input type="password" class="form-control" id="loginPwd" name="loginPwd" required>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>

                                      <div class="col-12">
                                        <button class="btn btn-primary" onclick="login ();">Войти</button>
                                      </div>
                                    </div>    
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>                    
                    
                    
                    
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {include file='leftcolumn.tpl'}
            
        {*Центральный столбец*}
       