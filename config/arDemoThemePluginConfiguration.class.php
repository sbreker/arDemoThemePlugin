<?php

class arDemoThemePluginConfiguration extends sfPluginConfiguration
{
  // Summary and version. AtoM recognizes any plugin as a theme as long as
  // the $summary string contains the word "theme" in it (case-insensitive).
  public static
    $summary = 'Demo Theme plugin, extension of arDominionPlugin. Cross-browser compatibility tested. Based in Twitter Bootstrap 2.0, 940px two-column layout, slightly responsive.',
    $version = '0.0.1';

  public function contextLoadFactories(sfEvent $event)
  {
    $context = $event->getSubject();

    // Runtime less interpreter will be loaded if debug mode is enabled
    // Remember to avoid localStorage caching when dev machine is not localhost
    if ($context->getConfiguration()->isDebug())
    {
      $context->response->addJavaScript('/vendor/less.js');
      $context->response->addStylesheet('/plugins/arDemoThemePlugin/css/main.less', 'last', array('rel' => 'stylesheet/less', 'type' => 'text/css', 'media' => 'all'));
    }
    else
    {
      $context->response->addStylesheet('/plugins/arDemoThemePlugin/css/main.css', 'last', array('media' => 'all'));
    }
  }

  public function initialize()
  {
    // Run the class method contextLoadFactories defined above once Symfony
    // is done loading the internal framework factories.
    $this->dispatcher->connect('context.load_factories', array($this, 'contextLoadFactories'));

    // This allows us to override the application decorators.
    $decoratorDirs = sfConfig::get('sf_decorator_dirs');
    $decoratorDirs[] = $this->rootDir.'/templates';
    sfConfig::set('sf_decorator_dirs', $decoratorDirs);

    // This allows us to override the contents of the application modules.
    $moduleDirs = sfConfig::get('sf_module_dirs');
    $moduleDirs[$this->rootDir.'/modules'] = false;
    sfConfig::set('sf_module_dirs', $moduleDirs);
  }
}
