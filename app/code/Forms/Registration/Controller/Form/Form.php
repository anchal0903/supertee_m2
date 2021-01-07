<?php 
	namespace Forms\Registration\Controller;

	class Form extends \Magento\Framework\App\Action\Action{

		/** @var Registration */
    protected $registration;
    /**
     *
     * @var Session
     */
    protected $session;
    
    /**
     *
     * @var PageFactory
     */
    protected $resultPageFactory;
    
    /**
     * Constructor
     *
     * @param Context $context            
     * @param Session $customerSession            
     * @param PageFactory $resultPageFactory            
     * @param Registration $registration            
     */
    public function __construct(Context $context, Session $customerSession, PageFactory $resultPageFactory, Registration $registration) {
        $this->session = $customerSession;
        $this->resultPageFactory = $resultPageFactory;
        $this->registration = $registration;
        parent::__construct ( $context );
    }
    
    /**
     * Customer register form page
     *
     * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
     */
    public function execute() {
        if ($this->session->isLoggedIn () || ! $this->registration->isAllowed ()) {
            /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
            $resultRedirect = $this->resultRedirectFactory->create ();
            $resultRedirect->setPath ( '*/*' );
            return $resultRedirect;
        }
        
        /** @var \Magento\Framework\View\Result\Page $resultPage */       
        return $this->resultPageFactory->create ();
    }
	}

?>