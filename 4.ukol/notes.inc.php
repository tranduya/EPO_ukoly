<?php
///////////////////////////////////////////////////////////////////
////////////// Stranka pro prihlaseni/odhlaseni uzivatele ////////////////
///////////////////////////////////////////////////////////////////

    // nacteni souboru s funkcemi
    require_once("MyDatabase.class.php");
    $myDB = new MyDatabase();

    // nacteni hlavicky stranky
    require_once("ZakladHTML.class.php");
    ZakladHTML::createHeader("Přihlášení a odhlášení uživatele");

    ///////////// PRO NEPRIHLASENE UZIVATELE ///////////////
    // pokud uzivatel neni prihlasen nebo nebyla ziskana jeho data, tak vypisu prihlasovaci formular
    if(!$myDB->isUserLogged()){
?>
        <div>
            <b>Tato strána je dostupná pouze přihlášeným uživatelům.</b>
        </div>
<?php
    ///////////// KONEC: PRO NEPRIHLASENE UZIVATELE ///////////////
    } else {
    ///////////// PRO PRIHLASENE UZIVATELE /////////////
?>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Pellentesque sapien. Morbi scelerisque luctus velit. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Phasellus faucibus molestie nisl. Pellentesque ipsum. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Praesent id justo in neque elementum ultrices. Nulla non lectus sed nisl molestie malesuada. Pellentesque sapien. Aliquam ante. Fusce wisi. In enim a arcu imperdiet malesuada. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit.</li>
            <li>Nullam eget nisl. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer tempor. Aliquam ornare wisi eu metus. Nullam eget nisl. Nullam rhoncus aliquam metus. Pellentesque arcu. Pellentesque ipsum. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Nullam faucibus mi quis velit. Etiam posuere lacus quis dolor. In enim a arcu imperdiet malesuada. Duis pulvinar. Mauris tincidunt sem sed arcu. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam ante. Nullam at arcu a est sollicitudin euismod. Suspendisse sagittis ultrices augue. Sed convallis magna eu sem. Aliquam id dolor.</li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Maecenas lorem. Aliquam ante. Fusce aliquam vestibulum ipsum. Etiam posuere lacus quis dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Etiam commodo dui eget wisi. Aenean vel massa quis mauris vehicula lacinia. Donec quis nibh at felis congue commodo. Nulla pulvinar eleifend sem. Etiam commodo dui eget wisi. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Integer malesuada. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Aliquam erat volutpat.</li>
        </ul>
<?php
    }
    ///////////// KONEC: PRO PRIHLASENE UZIVATELE ///////////////
    ZakladHTML::createFooter();
?>
