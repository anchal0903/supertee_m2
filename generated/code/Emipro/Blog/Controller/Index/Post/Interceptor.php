<?php
namespace Emipro\Blog\Controller\Index\Post;

/**
 * Interceptor class for @see \Emipro\Blog\Controller\Index\Post
 */
class Interceptor extends \Emipro\Blog\Controller\Index\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\UrlInterface $url, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezoneInterface)
    {
        $this->___init();
        parent::__construct($context, $url, $timezoneInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
