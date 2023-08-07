<?php

namespace Container7UBC47x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_Visitor_TransMethodService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.extractor.visitor.trans_method' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\Visitor\TransMethodVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/Visitor/AbstractVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/Visitor/TransMethodVisitor.php';

        return $container->privates['translation.extractor.visitor.trans_method'] = new \Symfony\Component\Translation\Extractor\Visitor\TransMethodVisitor();
    }
}
