<?php
if(isset($_GET['seite']))
{
    switch($_GET['seite'])
    {
        case 'Page2':
            echo '
            <li><a href="?seite=home">Page1</a></li>
            <li class="active"><a href="?seite=page2">Title</a></li>
            <li><a href="?seite=page3">Title</a></li>
            <li><a href="?seite=page4">Title</a></li>';
            break;
        case 'Page3':
            echo '<li><a href="?seite=home">Page1</a></li>
            <li><a href="?seite=page2">Title</a></li>
            <li class="active"><a href="?seite=page3">Title</a></li>
            <li><a href="?seite=page4">Title</a></li>';
                    break;
        case 'Page4':
            echo '
            <li><a href="?seite=home">Page1</a></li>
            <li><a href="?seite=page2">Rezepte hinzufügen</a></li>
            <li><a href="?seite=page3">Rezepte suchen</a></li>
            <li class="active"><a href="?seite=page4">Rezepte ändern</a></li>';
            break;
        default:
            echo '
            <li class="active"><a href="?seite=home">Page1</a></li>
            <li><a href="?seite=page2">Title</a></li>
            <li><a href="?seite=page3">Title</a></li>
            <li><a href="?seite=page4">Title</a></li>';
    }
} else
{
    echo '
    <li class="active"><a href="?seite=home">Page1</a></li>
    <li ><a href="?seite=page2">Title</a></li>
    <li><a href="?seite=page3">Title</a></li>
    <li><a href="?seite=page4">Title</a></li>';
}