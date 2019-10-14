<?php 
/**
*@file
*Contains \Drupal\hello_world\Controller\HelloWorldController
*/

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase{

public function hello(){
    $tekija = 'Tyyppi Tyyppinen';
    $teksti = '<h1>Hurraa!</h1><p>Tämä on eka moduulini.</p>';
    return array(
        '#title' => 'Hello World',
        '#markup' => $teksti . '(tekijänä: ' . $tekija . '&copy;)'
    );

}
public function uutisoi() {
        $tekija = 'Tyyppi Tyyppinen';
        $teksti = '<h1>Päivän pääuutinen: Helvettiin organisaatiouudistus</h1>
        <p>Saatana kommentoi: En arvannut tämän päivän tulevan.</p>';
        return array(
            '#title' => 'News of the day',
            '#markup' => $teksti . '(tekijänä: ' . $tekija . '&copy;)',
        );

    }
}