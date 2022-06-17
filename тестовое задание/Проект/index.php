<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
    </head>
    <body>
        
            <?php include_once 'menu.html'; ?>
           
            <h1>Авторизация</h1>
            <h2>
                <?php if(isset($info) == true){ echo "$info";} ?>
            </h2>
            <form name="authorization" method="post" action="processing_aut.php">
                
                <label>
                    <p>почта</p>
                    <input name="mail" type="text" autocomplete="off">
                    <!--<input name="mail" type="email" autocomplete="off">-->
                </label>
                
                <label>
                    <p>пароль</p>
                    <input name="password" type="password" autocomplete="off">
                </label>
                
                <label>
                    <p>
                      <button>Вход</button>
                    </p>
                </label>
            </form>
        
    </body>
</html>
