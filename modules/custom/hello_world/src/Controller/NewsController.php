<?php
/**
 *@file
 *Contains \Drupal\news\Controller\NewsController
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {

    public function news() {
        $tekija = 'Tyyppi Tyyppinen';
        $teksti = '<h1>Päivän pääuutinen: Helvettiin organisaatiouudistus</h1>
        <p>Saatana kommentoi: En arvannut tämän päivän tulevan.</p>';
        return array(
            '#title' => 'News of the day',
            '#markup' => $teksti . '(tekijänä: ' . $tekija . '&copy;)',
        );

    }
}