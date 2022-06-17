<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php include_once 'menu.html'; ?>
         <h1>Регистрация</h1>
          <h2>
                <?php if(isset($info) == true){ echo "$info";} ?>
            </h2>  
         <form name="authorization" method="post" action="processing_reg.php">
                
                <label>
                    <p>почта</p>
                    <input name="mail" type="text" autocomplete="off" value="<?php if (isset($info)){ echo "$_POST[mail]";} ?>">
                </label>
                
                <label>
                    <p>имя</p>
                    <input name="name" type="text" autocomplete="off" value="<?php if (isset($info)){ echo "$name";} ?>">
                </label>
                
                <label>
                    <p>пароль</p>
                    <input name="password_0" type="password" autocomplete="off">
                </label>
                
                <label>
                    <p>повторить пароль</p>
                    <input name="password_1" type="password" autocomplete="off">
                </label>
                
                <label>
                    <p>
                      <button>Регистрация</button>
                    </p>
                </label>
            </form>
        </div>
    </body>
</html>
