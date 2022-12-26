<?php
namespace xare\MpdfBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use xare\MpdfBundle\DependencyInjection\xareMpdfExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 *
 * xare\MpdfBundle\xareMpdfBundle
 *
 *
 * @author xare <sinus@xare.net>
 *         Created on: 1 juin 2020 @ 22:58:16
 */
class xareMpdfBundle extends Bundle
{

    /**
     *
     * {@inheritdoc}
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getContainerExtension()
     */
    public function getContainerExtension(): ?ExtensionInterface
    {

        return new xareMpdfExtension();

    }

}
