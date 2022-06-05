<?php

namespace App\Controller\Crudit\CrudMenu;

use Lle\CruditBundle\Dto\Icon;
use Lle\CruditBundle\Dto\Path;
use Lle\CruditBundle\Dto\Layout\LinkElement;
use Lle\CruditBundle\Dto\Layout\ExternalLinkElement;
use Lle\CruditBundle\Contracts\MenuProviderInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;

class AppMenuProvider implements MenuProviderInterface
{
  public function getMenuEntry(): iterable
  {
    return [
      LinkElement::new(
        'dashboard',
        Path::new('homepage'),
        Icon::new('home')
      ),
      LinkElement::new(
        'users',
        Path::new('app_crudit_user_index'),
        Icon::new('group')
      ),
      LinkElement::new(
        'pdf_generator',
        Path::new('lle_pdf_generator_admin_balise'),
        Icon::new('file')
      ),
      LinkElement::new(
        'credentials',
        Path::new('admin_credential'),
        Icon::new('lock')
      ),
      LinkElement::new(
        'credentials.group',
        Path::new('app_crudit_groupcredential_index'),
        Icon::new('lock')
      ),
      LinkElement::new(
        'hermes.dashboard',
        Path::new('lle_hermes_dashboard'),
        Icon::new('envelope')
      ),
      // ExternalLinkElement::new(
      //   'menu.google',
      //   'https://www.google.com',
      //   Icon::new('/img/icons/google.svg', Icon::TYPE_IMG)
      // ),
    ];
  }
}
