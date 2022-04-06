<?php

namespace Drupal\prueba\Controller;

use Drupal\Core\Controller\ControllerBase;

class PruebaController extends ControllerBase {

  public function page(){

    $items = [
      ['title' => 'Indicador 1'],
      ['title' => 'Indicador 2'],
      ['title' => 'Indicador 3'],
      ['title' => 'Indicador 4'],
    ];

    return [
      '#theme' => 'prueba',
      '#items' => $items,
      '#title' => 'prueba'
    ];

  }

}